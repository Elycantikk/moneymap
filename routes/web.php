<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function(){
    $data = [
        'content' => 'home'
    ];
    return view ('layouts.wrapper', $data);
});
Route::get('/', function(){
    return view ('layouts.wrapper');
});

Route::get('/tentangku', function(){
    $data = [
        'content' => 'tentangku'
    ];
    return view ('layouts.wrapper', $data);
});
Route::get('/pemasukan', function(){
    $data = [
        'content' => 'pemasukan'
    ];
    return view ('layouts.wrapper', $data);
});
Route::get('/pengeluaran', function(){
    $data = [
        'content' => 'pengeluaran'
    ];
    return view ('layouts.wrapper', $data);
});

Route::get('/saldoawal', function(){
    $data = [
        'content' => 'saldoawal'
    ];
    return view ('layouts.wrapper', $data);
});
Route::post('/saldoawal', function (Illuminate\Http\Request $request) {
    // proses simpan saldo awal
    $initial_balance = $request->input('initial_balance');
    
    // Simpan atau lakukan tindakan lain dengan saldo awal
    // Misalnya, redirect ke halaman lain dengan pesan sukses
    return redirect('/saldoawal')->with('success', 'Saldo awal berhasil disimpan!');
});
//Route::get('/pengeluaran', function(){
//    return view ('pengeluaran');
//});
// routes/web.php

use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);
Route::get('/user', function(){
    $data = [
        'content' => 'user'
    ];
    return view ('layouts.wrapper', $data);
});
Route::post('/user', function (Illuminate\Http\Request $request) {
    // proses simpan saldo awal
    $User = $request->input('User');
});


