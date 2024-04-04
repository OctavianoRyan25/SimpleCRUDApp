<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('data_user', [
            'users' => $users,
        ]);
    }

    public function changePasswordForm($id)
    {
        $user = User::findOrFail($id);

        if (!$user->is_admin) {
            return view('edit_user', [
                'user' => $user,
            ]);
        }

        return view('unauthorized')->with('message', 'Unauthorized to change password');
    }

    public function changePassword(Request $request, string $id)
    {
        $validated = $request->validate([
            'password' => 'required|min:8',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $check = User::where('id', $id)->update($validated);
        if ($check) {
            return redirect()->route('user.index')->with('success', 'Password berhasil diubah');
        }
        return redirect()->route('user.changePasswordForm')->with('message', 'Gagal mengubah password');
    }

    public function deleteUser(string $id){
        User::destroy($id);
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus');
    }
}
