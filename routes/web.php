<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LaporanKematianController;
use App\Http\Controllers\LaporCamatController;
use App\Http\Controllers\LaporDesaController;
use App\Http\Controllers\LaporKelahiranController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckSuperAdmin;
use App\Http\Middleware\GuestOnly;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

//Login Route
Route::get('/login', [LoginController::class, 'showLoginForm'], )->name('login')->middleware(GuestOnly::class);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        $now = Carbon::now();
                $month = $now->month;
                $year = $now->year;

                $jumlahKelahiran = DB::table('lapor_kelahirans')
                        ->whereMonth('tanggal_lahir', $month)
                        ->whereYear('tanggal_lahir', $year)
                        ->count();
        return view('dashboard', [
            'jumlahKelahiran' => $jumlahKelahiran,
        ]);
    });
    Route::get('/dashboard', function () {
        return redirect('/');
    });
    
    // Route::get('/lapor-camat', [LaporCamatController::class, 'index'])->name('lapor-camat.index');
    // Route::get('/lapor-camat/{id}', [LaporCamatController::class, 'show'])->name('lapor-camat.show');
    // Route::get('/lapor-camat/{id}/edit', [LaporCamatController::class, 'edit'])->name('lapor-camat.edit');
    // Route::put('/lapor-camat/{id}', [LaporCamatController::class, 'update'])->name('lapor-camat.update');
    // Route::delete('/lapor-camat/{id}', [LaporCamatController::class, 'destroy'])->name('lapor-camat.destroy');

    Route::resource('lapor-camat', LaporCamatController::class);

    // Route::get('/lapor-desa', [LaporDesaController::class, 'index'])->name('lapor-desa.index');
    // Route::get('/lapor-desa/{id}', [LaporDesaController::class, 'show'])->name('lapor-desa.show');
    // Route::get('/lapor-desa/{id}/edit', [LaporDesaController::class, 'edit'])->name('lapor-desa.edit');
    // Route::put('/lapor-desa/{id}', [LaporDesaController::class, 'update'])->name('lapor-desa.update');
    // Route::delete('/lapor-desa/{id}', [LaporDesaController::class, 'destroy'])->name('lapor-desa.destroy');

    Route::resource('lapor-desa', LaporDesaController::class);

    Route::resource('lapor-kelahiran', LaporKelahiranController::class);

    Route::get('/user', [UserController::class, 'index'])->name('user.index')->middleware(CheckSuperAdmin::class);

    Route::get('/user/{id}/change-password', [UserController::class, 'changePasswordForm'])->name('user.changePasswordForm')->middleware(CheckSuperAdmin::class);

    Route::put('/user/{id}/change-passwords', [UserController::class, 'changePassword'])->name('user.changePassword')->middleware(CheckSuperAdmin::class);

    Route::delete('/user/{id}', [UserController::class, 'deleteUser'])->name('user.destroy')->middleware(CheckSuperAdmin::class);

    Route::resource('lapor-kematian', LaporanKematianController::class);

});



