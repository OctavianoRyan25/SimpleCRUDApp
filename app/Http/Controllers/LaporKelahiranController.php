<?php

namespace App\Http\Controllers;

use App\Models\DataAnak;
use App\Models\LaporKelahiran as ModelsLaporKelahiran;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporKelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataKelahirans = ModelsLaporKelahiran::with('anak', 'ayah', 'ibu')->get();
        foreach ($dataKelahirans as $dataKelahiran) {
            $dataKelahiran->tanggal_lahir = Carbon::parse($dataKelahiran->tanggal_lahir)->format('d-m-Y');
        }
        return view('lapor_kelahiran', [
            'dataKelahirans' => $dataKelahirans,
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
        $currentDataKelahiran = ModelsLaporKelahiran::with('anak', 'ayah', 'ibu')->findOrFail($id);
        $currentDataKelahiran->tanggal_lahir = Carbon::parse($currentDataKelahiran->tanggal_lahir)->format('d-m-Y');
        return view('detail_lapor_kelahiran', [
            'currentDataKelahiran' => $currentDataKelahiran,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $currentDataKelahiran = ModelsLaporKelahiran::with('anak', 'ayah', 'ibu')->findOrFail($id);
        return view('edit_lapor_kelahiran', [
            'currentDataKelahiran' => $currentDataKelahiran,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated_kelahiran = $request->validate([
            'nomor_kk' => 'required|string|max:255',
            'anak_ke' => 'required|numeric',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'jam_lahir' => 'required',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
        ]);

        $validated_anak = $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        ModelsLaporKelahiran::where('id', $id)->update($validated_kelahiran);
        DataAnak::where('data_kelahiran_id', $id)->update($validated_anak);

        return redirect()->route('lapor-kelahiran.index')->with('success', 'Laporan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
