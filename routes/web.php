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
    return view('auth.login');
});
/* Peserta */
Auth::routes();

	/* Profile peserta */
Route::resource('home', 'UserController');
Route::put('gantipassword/{id}/{name}/{act}/{desc}', 'UserController@gantipassword');
Route::get('hapusdk/{id}/{ids}', 'UserController@hapusdk');

	/* Alur aplikasi digitalisasi kegiatan LPM UKSW */
Route::resource('alur','AlurController');

	/* Daftar kegiatan peserta */
Route::resource('kegiatan','KegiatanController');
Route::get('daftar/{id},{name},{ids},{names},{start_time},{end_time},{date},{desc}','KegiatanController@daftar');

	/* Presensi */
Route::resource('presensi','PresensiController');
Route::get('absenm/{id}/{ids}/{name}/{names}/{status_req}/{status}/{desc}', 'PresensiController@absenm');
Route::get('absenk/{id}/{ids}/{name}/{names}/{status_req}/{status}/{desc}', 'PresensiController@absenk');

	/* Evaluasi kegiatan peserta */
Route::resource('evaluasi', 'EvaluasiController');
Route::get('evaluasib/{id}/{name}','EvaluasibController@evaluasib');
Route::post('inserte/{id}/{ids}/{name}/{names}/{desc}', 'EvaluasibController@inserte');

	/* Sertifikat Peserta */
Route::resource('sertifikat', 'SertifikatController');
Route::get('sertif/{id}/unduhsertif/{desc}/{name}', 'SertifikatController@unduhsertif');
Route::get('sertif/{id}/{name}', 'SertifikatController@sertif');

	/*Regirstrasi Akun Peserta */
Route::resource('tambahpeserta', 'RegisterController');




/* Admin */

	/*Login Admin*/
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

	/*Profile Admin*/
Route::get('admin/profile', 'AdminController@index')->name('admin.dashboard');
Route::put('admin/update', 'AdminController@update')->name('admin.update');

	/*Peserta Admin*/
Route::resource('peserta', 'AdminPesertaController');
Route::get('edit/{id}', 'AdminPesertaController@edit');
Route::get('delete/{id}', 'AdminPesertaController@delete');
Route::put('update/{id}', 'AdminPesertaController@updatep');

	/*Kegiatan Admin*/
Route::resource('adminkegiatan', 'AdminKegiatanController');
Route::get('tambahkegiatan', 'AdminKegiatanController@tambahkegiatan');
Route::post('insertk', 'AdminKegiatanController@insertk');
Route::get('deletek/{id}', 'AdminKegiatanController@deletek');
Route::get('editk/{id}', 'AdminKegiatanController@editk');
Route::put('updatek/{id}', 'AdminKegiatanController@updatek');
Route::get('lihatk/{id}', 'AdminPresensiController@lihatk');
Route::get('lihatk/statusterima/{id}/{ids}/{ket}/{req}', 'AdminPresensiController@statusterima');
Route::get('lihatk/statustolak/{id}/{ids}/{ket}/{req}', 'AdminPresensiController@statustolak');
Route::get('lihatk/deleteinkeg/{id}/{ids}/{stat}', 'AdminPresensiController@deleteinkeg');

	/*Evaluasi Admin*/
Route::resource('adminevaluasi', 'AdminEvaluasiController');
Route::get('editpertanyaan/{id}/{question}', 'AdminEvaluasiController@editpertanyaan');
Route::put('updatepertanyaan/{id}', 'AdminEvaluasiController@updatepertanyaan');
Route::get('lihatev/{id}', 'AdminEvaluasiController@lihatev');
Route::get('lihatev/lihathaev/{id}/{ids}', 'AdminEvaluasiController@lihathaev');

	/*Laporan Admin*/
Route::resource('adminlaporan', 'AdminLaporanController');
Route::get('laporanjk','AdminLaporanController@laporanjk');
Route::get('laporanevkeg','AdminLaporanController@laporanevkeg');
Route::get('laporanpendik','AdminLaporanController@laporanpendik');
Route::get('laporanfakul','AdminLaporanController@laporanfakul');

	/*Log Aktifitas Admin*/
Route::resource('logaktifitas', 'AdminLogController');
Route::get('delog','AdminLogController@delog');

?>