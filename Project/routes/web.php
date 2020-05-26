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
//route admin lte
Route::get('/admin', function () {
    return view('admin/adminlte');
});
//Route index page
Route::get('/', function () {
    return view('home');
});
// Route untuk index
Route::get('/home', 'LogRegController@home');

//route untuk logout
Route::get('/logout', 'LogRegController@logout');

//PASIEN
//route utuk login pasien
Route::get('/login-pasien', 'LogRegController@loginpasien');
Route::post('/loginPostPasien', 'LogRegController@loginPostPasien');


////route read data pasien
Route::get('/pasien', 'PasienController@readpasien');
Route::get('/user','PasienController@readuser');
Route::get('/user-profile', 'PasienController@readuserprofile');

Route::get('/pasien/cetak_pdf', 'PasienController@cetak_pdf');

//route tambah pasien
Route::get('/pasien/add_data', 'PasienController@addpasien');
Route::get('/user/add_data', 'LogRegController@adduser');

//route untuk notif registrasi user
Route::get('/user/notif-register', 'LogRegController@notifregister');

//route untuk store data pasien
Route::post('/pasien/store', 'PasienController@storepasien');
Route::post('/user/store', 'LogRegController@storeuser');

//route edit data pasien
Route::get('/pasien/edit/{id}', 'PasienController@editpasien');

//route untuk update data pasien
Route::post('/pasien/update', 'PasienController@updatepasien');

//route untuk hapus data pasien
Route::get('/pasien/hapus/{id}', 'PasienController@hapuspasien');

//PEGAWAI

//route utuk login pegawai
Route::get('/login-pegawai', 'LogRegController@loginpegawai');
Route::post('/loginPostPegawai', 'LogRegController@loginPostPegawai');

////route read data pegawai
Route::get('/pegawai', 'PegawaiController@readpegawai');
Route::get('/biopegawai', 'PegawaiController@readbiopegawai');

//route untuk report PDF data pegawai
Route::get('/pegawai/cetak_pdf', 'PegawaiController@cetak_pdf');

//route tambah pegawai
Route::get('/pegawai/add_data', 'PegawaiController@addpegawai');

//route untuk store data pegawai
Route::post('/pegawai/store', 'PegawaiController@storepegawai');

//route edit data pegawai
Route::get('/pegawai/edit/{id}', 'PegawaiController@editpegawai');

//route untuk update data pegawai
Route::post('/pegawai/update', 'PegawaiController@updatepegawai');

//route untuk hapus data pegawai
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapuspegawai');

//POLI
////route read data poli
Route::get('/poli', 'PoliController@readpoli');

Route::get('/poli/cetak_pdf', 'PoliController@cetak_pdf');

//route tambah poli
Route::get('/poli/add_data', 'PoliController@addpoli');

//route untuk store data poli
Route::post('/poli/store', 'PoliController@storepoli');

//route edit data poli
Route::get('/poli/edit/{id}', 'PoliController@editpoli');

//route untuk update data poli
Route::post('/poli/update', 'PoliController@updatepoli');

//route untuk hapus data poli
Route::get('/poli/hapus/{id}', 'PoliController@hapuspoli');

//PETUGAS

//route utuk login petugas
Route::get('/login-petugas', 'LogRegController@loginpetugas');
Route::post('/loginPostPetugas', 'LogRegController@loginPostPetugas');


////route read data petugas
Route::get('/petugas', 'PetugasController@readpetugas');
Route::get('/medis', 'PetugasController@readmedis');


Route::get('/petugas/cetak_pdf', 'PetugasController@cetak_pdf');

////route read data dokter oleh user
Route::get('/jadwal-dokter','PetugasController@readjadwal');

//route tambah petugas
Route::get('/petugas/add_data', 'PetugasController@addpetugas');
Route::get('/medis/add_data', 'PetugasController@addmedis');

//route untuk store data petugas
Route::post('/petugas/store', 'PetugasController@storepetugas');
Route::post('/medis/store', 'PetugasController@storemedis');

//route edit data petugas
Route::get('/petugas/edit/{id}', 'PetugasController@editpetugas');

//route untuk update data petugas
Route::post('/petugas/update', 'PetugasController@updatepetugas');

//route untuk hapus data petugas
Route::get('/petugas/hapus/{id}', 'PetugasController@hapuspetugas');

//RESERVASI
////route read data reservasi
Route::get('/reservasi', 'ReservasiController@readreservasi');
Route::get('/reservasi-medis', 'ReservasiController@readreservasimedis');


Route::get('/reservasi/cetak_pdf', 'ReservasiController@cetak_pdf');

//route tambah reservasi
Route::get('/reservasi/add_data', 'ReservasiController@addreservasi');
Route::get('/reservasi-user/add_data', 'ReservasiController@addreservasiuser');

//route untuk store data reservasi
Route::post('/reservasi/store', 'ReservasiController@storereservasi');
Route::post('/reservasi-user/store', 'ReservasiController@storereservasiuser');

//notif reservasi user
Route::get('/reservasi-user/notif', 'ReservasiController@notifreservasiuser');

//route edit data reservasi
Route::get('/reservasi/edit/{id}', 'ReservasiController@editreservasi');

//route untuk update data reservasi
Route::post('/reservasi/update', 'ReservasiController@updatereservasi');

//route untuk hapus data petugas
Route::get('/reservasi/hapus/{id}', 'ReservasiController@hapusreservasi');

//PEMBAYARAN
////route read data pembayaran
Route::get('/pembayaran', 'PembayaranController@readpembayaran');

Route::get('/pembayaran/cetak_pdf', 'PembayaranController@cetak_pdf');
Route::get('/pembayaran/cetak/{id}', 'PembayaranController@cetakinvoice');

//route tambah pembayaran
Route::get('/pembayaran/add_data', 'PembayaranController@addpembayaran');

//route untuk store data pembayaran
Route::post('/pembayaran/store', 'PembayaranController@storepembayaran');

//route edit data pembayaran
Route::get('/pembayaran/edit/{id}', 'PembayaranController@editpembayaran');

//route untuk update data pembayaran
Route::post('/pembayaran/update', 'PembayaranController@updatepembayaran');

//route untuk hapus data pembayaran
Route::get('/pembayaran/hapus/{id}', 'PembayaranController@hapuspembayaran');

//PEMERIKSAAN
////route read data pemeriksaan
Route::get('/pemeriksaan', 'PemeriksaanController@readpemeriksaan');
Route::get('/pemeriksaan-pegawai', 'PemeriksaanController@readpemeriksaanpegawai');

//cetak PDF
Route::get('/pemeriksaan/cetak_pdf', 'PemeriksaanController@cetak_pdf');
Route::get('/pemeriksaan-pegawai/cetak_pdf', 'PemeriksaanController@cetak_pdf2');

//route tambah pemeriksaan
Route::get('/pemeriksaan-medis/add_data', 'PemeriksaanController@addpemeriksaanmedis');

//route untuk store data pemeriksaan
Route::post('/pemeriksaan-medis/store', 'PemeriksaanController@storepemeriksaanmedis');

//route edit data pemeriksaan
Route::get('/pemeriksaan/edit/{id}', 'PemeriksaanController@editpemeriksaan');

//route untuk update data pemeriksaan
Route::post('/pemeriksaan/update', 'PemeriksaanController@updatepemeriksaan');

//route untuk hapus data pemeriksaan
Route::get('/pemeriksaan/hapus/{id}', 'PemeriksaanController@hapuspemeriksaan');

//UPLOAD
///route untuk upload dan download file 
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/prosesupload', 'UploadController@proses_upload');
Route::get('/upload/hapus/{id}', 'UploadController@hapus');
Route::get('/upload/save/{id}',[
    'as' => 'gambar.download', 'uses' => 'UploadController@downloadImage']);
Route::resource('gambar','UploadController');

//LOGIN
///route untuk page pengguna
Route::get('/pengguna', 'HomeController@home');
//route untuk page pengurus

//SARAN
///route untuk baca tabel saran
Route::get('/saran', 'SaranController@readsaran');
Route::get('/notif-saran', 'SaranController@notifsaran');

Route::get('/saran/cetak_pdf', 'PegawaiController@cetak_pdf2');

//route tambah saran
Route::get('/add-saran', 'SaranController@addsaran');

//route untuk store data saran
Route::post('/store-saran', 'SaranController@storesaran');


