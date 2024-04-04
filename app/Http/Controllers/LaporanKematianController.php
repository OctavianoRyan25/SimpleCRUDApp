<?php

namespace App\Http\Controllers;

use App\Models\LaporKematian;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanKematianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lapor_kematians = LaporKematian::all();

        foreach ($lapor_kematians as $lapor_kematian) {
            $lapor_kematian->tanggal_meninggal = Carbon::parse($lapor_kematian->tanggal_meninggal)->format('d-m-Y');
        }

        return view('lapor_kematian', [
            'lapor_kematians' => $lapor_kematians,
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
        $current_lapor_kematian = LaporKematian::findOrFail($id);
        $current_lapor_kematian->tanggal_lahir = Carbon::parse($current_lapor_kematian->tanggal_lahir)->format('d-m-Y');
        $current_lapor_kematian->tanggal_meninggal = Carbon::parse($current_lapor_kematian->tanggal_meninggal)->format('d-m-Y');
        $current_lapor_kematian->status_kawin = $current_lapor_kematian->status_kawin == '0' ? 'Belum Kawin' : 'Kawin';
        return view('detail_lapor_kematian', [
            'current_lapor_kematian' => $current_lapor_kematian,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $current_lapor_kematian = LaporKematian::findOrFail($id);
        $current_lapor_kematian->status_kawin = $current_lapor_kematian->status_kawin == '0' ? 'Belum Kawin' : 'Kawin';
        return view('edit_lapor_kematian', [
            'current_lapor_kematian' => $current_lapor_kematian,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|regex:/^\d{16}$/',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'tempat_meninggal' => 'required|string|max:255',
            'tanggal_meninggal' => 'required|date',
            'nama_suami_istri' => 'required|string|max:255',
            'nama_anak' => 'required|string|max:255',
            'status_kawin' => 'required',
        ]);

        LaporKematian::where('id', $id)->update($validated);

        return redirect()->route('lapor-kematian.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        LaporKematian::destroy($id);

        return redirect()->route('lapor-kematian.index')->with('success', 'Data berhasil dihapus');
    }
}
