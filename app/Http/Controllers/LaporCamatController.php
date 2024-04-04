<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporCamat;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class LaporCamatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $lapor_camats = LaporCamat::all();

        foreach ($lapor_camats as $lapor_camat) {
            $lapor_camat->tanggal = Carbon::parse($lapor_camat->tanggal)->format('d-m-Y');
        }

        return view('lapor_camat', [
            'lapor_camats' => $lapor_camats,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $current_lapor_camat = LaporCamat::findOrFail($id);
        $current_lapor_camat->tanggal = Carbon::parse($current_lapor_camat->tanggal)->format('d-m-Y');
        return view('detail_lapor_camat', [
            'current_lapor_camat' => $current_lapor_camat,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $current_lapor_camat = LaporCamat::findOrFail($id);

        return view('edit_lapor_camat', [
            'current_lapor_camat' => $current_lapor_camat,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'aduan' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            Storage::delete($validated['gambar']);
            $validated['gambar'] = $request->file('gambar')->store('public/lapor_camat');
        } else {
            unset($validated['gambar']); 
        }

        LaporCamat::where('id', $id)->update($validated);

        return redirect()->route('lapor-camat.index')->with('success', 'Laporan berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Storage::delete(LaporCamat::find($id)->gambar);
        LaporCamat::destroy($id);
        return redirect()->route('lapor-camat.index')->with('success', 'Laporan berhasil dihapus');
    }
}
