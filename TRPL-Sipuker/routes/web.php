<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout'); //method sakti

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/register', 'NewRegisterController@register');

Route::get('/admin', 'PemerintahController@index')->middleware('pemerintah'); //('')sesuai nama kernel

Route::post('/admin/postforum', 'PemerintahController@sendpost')->middleware('pemerintah');

Route::get('/pengusaha', 'PengusahaController@index')->middleware('pengusaha');

Route::post('/pengusaha/post', 'PengusahaController@sendpost')->middleware('pengusaha');

Route::get('/pengusaha/pinjamanModal', 'PengusahaController@getModal')->middleware('pengusaha');

Route::get('/pengusaha/kegiatanUMKMUser/', 'PengusahaController@getKegiatan')->middleware('pengusaha');

Route::get('/admin/kegiatanUMKM/', 'PemerintahController@getKegiatan')->middleware('pemerintah');

Route::get('/admin/pinjamanModalprt', 'PemerintahController@getModalPrt')->middleware('pemerintah');

Route::get('/pengusaha/profil', 'PengusahaController@getProfil')->middleware('pengusaha');

Route::get('/admin/profilprt', 'PemerintahController@getProfil')->middleware('pemerintah');

Route::post('pengusaha/pinjamanModal', 'PengusahaController@pinjam')->middleware('pengusaha');

Route::get('pengusaha/daftarKegiatan/{id}', 'PengusahaController@redir')->middleware('pengusaha');

Route::post('pengusaha/daftarMember/{id}', 'PengusahaController@daftarMember')->middleware('pengusaha');

Route::post('/admin/pinjamanModalprt', 'PemerintahController@updateStatusPinjaman')->middleware('pemerintah');

Route::get('/hapusForum/{id}','PemerintahController@hapusForum')->middleware('pemerintah');

Route::get('/admin/forum', 'PemerintahController@forum')->middleware('pemerintah');

Route::get('/detailForum', 'PemerintahController@detailForum');

Route::get('/admin/laporan', 'PemerintahController@laporan')->middleware('pemerintah');

Route::get('/admin/laporan/{id}', 'PemerintahController@laporanUkm')->middleware('pemerintah');

Route::get('/laporan', 'PengusahaController@laporan')->middleware('pengusaha')->name('laporan_pengusaha');
Route::post('/laporan', 'PengusahaController@inputLaporan')->middleware('pengusaha');
