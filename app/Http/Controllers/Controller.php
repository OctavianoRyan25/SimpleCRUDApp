<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

abstract class Controller
{
        public function index()
        {
                $now = Carbon::now();
                $month = $now->month;
                $year = $now->year;

                $jumlahKelahiran = DB::table('lapor_kelahirans')
                        ->whereMonth('tanggal_lahir', $month)
                        ->whereYear('tanggal_lahir', $year)
                        ->count();
                $jumlahKematian = DB::table('lapor_kematians')
                        ->whereMonth('tanggal_meninggal', $month)
                        ->whereYear('tanggal_meninggal', $year)
                        ->count();
                return view('dashboard', [
                        'jumlahKelahiran' => $jumlahKelahiran,
                ]);
        }
}
