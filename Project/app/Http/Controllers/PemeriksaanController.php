<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PDF;

class pemeriksaanController extends Controller
{
    public function readpemeriksaanpegawai()
    {
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
        // mengambil data dari table pemeriksaan
        $pemeriksaan = DB::table('pemeriksaan')->get();

        // mengirim data pemeriksaan ke view read-pemeriksaanpegawai
        return view('read-pemeriksaanpegawai', ['pemeriksaan' => $pemeriksaan]);

    }
    public function cetak_pdf2()
    {
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
    	$pemeriksaan=  DB::table('pemeriksaan')->get();
 
    	$pdf = PDF::loadview('read-pemeriksaanpegawai-pdf',['pemeriksaaan'=>$pemeriksaan])->setPaper('a4', 'landscape');
    	return $pdf->stream();
    }

    public function readpemeriksaan()
    {   if(!Session::get('status')){
        return redirect('/login-petugas')->with('alert','Anda belum login');
    }
    $session_id_petugas=Session::get('id_petugas');    
    $pemeriksaan = DB::table('pemeriksaan')
                    -> join('pembayaran','pemeriksaan.id_pembayaran','=','pembayaran.id_pembayaran')
                    -> join('reservasi','pembayaran.id_reservasi','=','reservasi.id_reservasi')
                    -> join('petugas','reservasi.id_petugas','=','petugas.id_petugas')
                    -> join('pasien','reservasi.id_pasien','=','pasien.id_pasien')
                    -> select('pemeriksaan.id_pemeriksaan','pasien.nama_pasien', 'petugas.nama','pemeriksaan.tgl_pemeriksaan',
                    'pemeriksaan.keluhan','pemeriksaan.catatan_medis','pemeriksaan.id_pembayaran')
                    -> where('reservasi.id_petugas',$session_id_petugas)
                    -> get();

        // mengirim data pemeriksaan ke view index
        return view('read-pemeriksaan', ['pemeriksaan' => $pemeriksaan]);
    }

    public function cetak_pdf()
    {   if(!Session::get('status')){
        return redirect('/login-petugas')->with('alert','Anda belum login');
    }
    	$pemeriksaan = DB::table('pemeriksaan')
                    -> join('pembayaran','pemeriksaan.id_pembayaran','=','pembayaran.id_pembayaran')
                    -> join('reservasi','pembayaran.id_reservasi','=','reservasi.id_reservasi')
                    -> join('petugas','reservasi.id_petugas','=','petugas.id_petugas')
                    -> join('pasien','reservasi.id_pasien','=','pasien.id_pasien')
                    -> select('pemeriksaan.id_pemeriksaan','pasien.nama_pasien', 'petugas.nama','pemeriksaan.tgl_pemeriksaan',
                    'pemeriksaan.keluhan','pemeriksaan.catatan_medis','pemeriksaan.id_pembayaran')
                    -> get();
 
    	$pdf = PDF::loadview('read-pemeriksaan-pdf',['pemeriksaan'=>$pemeriksaan])->setPaper('a4', 'portrait');
    	return $pdf->stream();
    }
   
    // method untuk menampilkan view form tambah pemeriksaan oleh medis
    public function addpemeriksaanmedis()
    {   if(!Session::get('status')){
        return redirect('/login-petugas')->with('alert','Anda belum login');
    }
        $pembayaran = DB::table('pembayaran')->get();
        // memanggil view tambah
        return view('add-pemeriksaanmedis',['pembayaran'=>$pembayaran]);
    }

    // method untuk insert data ke table pemeriksaan oleh medis
    public function storepemeriksaanmedis(Request $request)
    {   if(!Session::get('status')){
        return redirect('/login-petugas')->with('alert','Anda belum login');
    }
        // insert data ke table pemeriksaan
        DB::table('pemeriksaan')->insert([
            'id_pemeriksaan' => $request->id_pemeriksaan,
            'tgl_pemeriksaan' => $request->tgl_pemeriksaan,
            'keluhan' => $request->keluhan,
            'catatan_medis' => $request->catatan_medis,
            'id_pembayaran' => $request->id_pembayaran

        ]);

        // alihkan halaman ke halaman pemeriksaan medis
        return redirect('/pemeriksaan');
    }

    // method untuk edit data pemeriksaan
    public function editpemeriksaan(Request $request)
    {   if(!Session::get('status')){
        return redirect('/login-petugas')->with('alert','Anda belum login');
    }
        $pembayaran = DB::table('pembayaran')->get();
        // mengambil data pemeriksaan berdasarkan id yang dipilih
        $pemeriksaan = DB::table('pemeriksaan')->where('id_pemeriksaan', $request->id)->get();
        // passing data pemeriksaan yang didapat ke view edit-pemeriksaan.blade.php
        return view('edit-pemeriksaan', ['pemeriksaan' => $pemeriksaan],['pembayaran'=>$pembayaran]);
    }


    // update data pemeriksaan   
    public function updatepemeriksaan(Request $request)
    {   
        if(!Session::get('status')){
        return redirect('/login-petugas')->with('alert','Anda belum login');
    }
        DB::table('pemeriksaan')->where('id_pemeriksaan', $request->id_pemeriksaan)->update([

            'tgl_pemeriksaan' => $request->tgl_pemeriksaan,
            'keluhan' => $request->keluhan,
            'catatan_medis' => $request->catatan_medis,
            'id_pembayaran' => $request->id_pembayaran
        ]);
        // alihkan halaman ke halaman pemeriksaan
        return redirect('/pemeriksaan');
    }

    // method untuk hapus data pemeriksaan
    public function hapuspemeriksaan($id)
    { 
        if(!Session::get('status')){
        return redirect('/login-petugas')->with('alert','Anda belum login');
    }
        // menghapus data pemeriksaan berdasarkan id yang dipilih
        DB::table('pemeriksaan')->where('id_pemeriksaan', $id)->delete();

        // alihkan halaman ke halaman pemeriksaan
        return redirect('/pemeriksaan');
    }
}