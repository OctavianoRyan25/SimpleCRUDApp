<?php

namespace App\Http\Controllers;

use App\Models\LaporDesa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lapor_desas = LaporDesa::all();

        foreach ($lapor_desas as $lapor_desa) {
            $lapor_desa->tanggal = Carbon::parse($lapor_desa->tanggal)->format('d-m-Y');
        }

        return view('lapor_desa', [
            'lapor_desas' => $lapor_desas,
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
        $current_lapor_desa = LaporDesa::findOrFail($id);
        $current_lapor_desa->tanggal = Carbon::parse($current_lapor_desa->tanggal)->format('d-m-Y');
        return view('detail_lapor_desa', [
            'current_lapor_desa' => $current_lapor_desa,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $current_lapor_desa = LaporDesa::findOrFail($id);
        // $current_lapor_desa->tanggal = Carbon::parse($current_lapor_desa->tanggal)->format('d-m-Y');

        // Mengembalikan view 'edit' dengan data laporan camat yang akan diedit
        return view('edit_lapor_desa', [
            'current_lapor_desa' => $current_lapor_desa,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'penanggung_jawab' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'hasil_kegiatan' => 'required|string',
            'kendala' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            Storage::delete($validated['gambar']);
            $validated['gambar'] = $request->file('gambar')->store('public/lapor_desa');
        } else {
            unset($validated['gambar']); 
        }

        LaporDesa::where('id', $id)->update($validated);

        return redirect()->route('lapor-desa.index')->with('success', 'Laporan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Storage::delete(LaporDesa::find($id)->gambar);
        LaporDesa::destroy($id);
        return redirect()->route('lapor-desa.index')->with('success', 'Laporan berhasil dihapus');
    }
}
