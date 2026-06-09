<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PlaystationController;
use App\Http\Controllers\TransaksiRentalController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

Route::get('/reset-admin', function () {

    $user = User::where(
        'email',
        'admin@gmail.com'
    )->first();

    $user->password = Hash::make('admin123');

    $user->save();

    return [
        'berhasil' => true,
        'hash_baru' => $user->password,
        'test' => Hash::check(
            'admin123',
            $user->password
        )
    ];
});
/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/', [
    LoginController::class,
    'index'
])->name('login');

Route::post('/login', [
    LoginController::class,
    'authenticate'
]);

Route::get('/logout', [
    LoginController::class,
    'logout'
]);

/*
|--------------------------------------------------------------------------
| AREA ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware('ceklogin')->group(function () {

    Route::get('/dashboard', [
        DashboardController::class,
        'index'
    ]);

    Route::resource(
        'pelanggan',
        PelangganController::class
    );

    Route::resource(
        'playstations',
        PlaystationController::class
    );

    Route::resource(
        'transaksi',
        TransaksiRentalController::class
    );

    Route::put(
        '/transaksi/{id}/kembalikan',
        [
            TransaksiRentalController::class,
            'kembalikan'
        ]
    );

});