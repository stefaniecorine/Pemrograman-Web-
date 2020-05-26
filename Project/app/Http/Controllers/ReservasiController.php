<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PDF;

class ReservasiController extends Controller
{   
    public function readreservasi()
    {
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
    	// mengambil data dari table reservasi
    	$reservasi = DB::table('reservasi')->get();
 
    	// mengirim data reservasi ke view index
    	return view('read-reservasi',['reservasi' => $reservasi]);
 
    }
    public function readreservasimedis()
    {
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
        $session_id_petugas=Session::get('id_petugas');    
    	// mengambil data dari table reservasi
        $reservasi = DB::table('reservasi')
                    -> leftjoin ('pembayaran','reservasi.id_reservasi','=','pembayaran.id_reservasi')
                    -> where('reservasi.id_petugas',$session_id_petugas)
                    ->get();
 
    	// mengirim data reservasi ke view index
    	return view('read-reservasimedis',['reservasi' => $reservasi]);
 
    }

    public function cetak_pdf()
    {  if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
    	$reservasi = DB::table('reservasi')->get();
 
    	$pdf = PDF::loadview('read-reservasi-pdf',['reservasi'=>$reservasi])->setPaper('a4', 'landscape');
    	return $pdf->stream();
    }

    // method untuk menampilkan view form tambah reservasi
        public function addreservasi()
        {
            if(!Session::get('status')){
                return redirect('/login-pegawai')->with('alert','Anda belum login');
            }
        $petugas = DB::table('petugas')->get();    
        $pasien = DB::table('pasien')->get(); 
        // memanggil view tambah
        return view('add-reservasi',['petugas'=>$petugas],['pasien'=>$pasien]);
        }

        public function addreservasiuser()
        { if(!Session::get('status')){
            return redirect('/login-pasien')->with('alert','Anda belum login');
        }
        $session_id_pasien=Session::get('id_pasien');
        $petugas = DB::table('petugas')->get();
        $reservasi = DB::table('reservasi')
                -> leftjoin('petugas','reservasi.id_petugas','=','petugas.id_petugas')
                -> leftjoin('poli','petugas.id_poli','=','poli.id_poli')
                -> leftjoin('pembayaran','reservasi.id_reservasi','=','pembayaran.id_reservasi')
                -> leftjoin('pegawai','pembayaran.id_pegawai','=','pegawai.id_pegawai')
                -> select ('reservasi.id_pasien','reservasi.id_reservasi','reservasi.tgl_reservasi','reservasi.tgl_layanan', 'poli.nama_poli','petugas.nama','reservasi.jadwal_ke',
                'pembayaran.id_pembayaran','pembayaran.tgl_pembayaran','poli.tarif','reservasi.karcis','pegawai.nama_peg')
                -> where('id_pasien',$session_id_pasien)
                ->get();  

        return view('add-reservasiuser',['petugas'=>$petugas],['reservasi'=>$reservasi]);
        }
    
        // method untuk insert data ke table reservasi
        public function storereservasi(Request $request) 
        { 
            if(!Session::get('status')){
                return redirect('/login-pegawai')->with('alert','Anda belum login');
            }
        // insert data ke table reservasi
        
        DB::table('reservasi')->insert([
            'id_reservasi'=>$request->id_reservasi,
            'tgl_reservasi'=>$request->tgl_reservasi,
            'tgl_layanan' => $request->tgl_layanan,
            'id_pasien' => $request->id_pasien,
            'id_petugas' => $request->id_petugas,
            'jadwal_ke' => $request->jadwal_ke,
            'karcis' => "10000",
        ]);
        
        // alihkan halaman ke halaman reservasi
        return redirect('/reservasi');
        }

        // method untuk insert data ke table reservasi user 
        public function storereservasiuser(Request $request) 
        { 
            if(!Session::get('status')){
                return redirect('/login-pasien')->with('alert','Anda belum login');
            }
        // insert data ke table reservasi
        $session_id_pasien=Session::get('id_pasien');
        DB::table('reservasi')->insert([
            'id_reservasi'=>$request->id_reservasi,
            'tgl_reservasi'=>$request->tgl_reservasi,
            'tgl_layanan' => $request->tgl_layanan,
            'id_pasien' => $session_id_pasien,
            'id_petugas' => $request->id_petugas,
            'jadwal_ke' => $request->jadwal_ke,
            'karcis' => "10000",
            
        ]);
        
        return redirect('/reservasi-user/notif');
        }
        
       
        // method untuk notif reservasi user telah tercatat
        public function notifreservasiuser()
        { if(!Session::get('status')){
            return redirect('/login-pasien')->with('alert','Anda belum login');
        }
        return view('notif-reservasiuser');
        }


        
        // method untuk edit data reservasi
        public function editreservasi(Request $request)
        {
            if(!Session::get('status')){
                return redirect('/login-pegawai')->with('alert','Anda belum login');
            }
         $petugas = DB::table('petugas')->get();    
         $pasien = DB::table('pasien')->get();     
        // mengambil data reservasi berdasarkan id yang dipilih
        $reservasi = DB::table('reservasi')->where('id_reservasi',$request->id)->get();
        // passing data reservasi yang didapat ke view edit-reservasi.blade.php
        return view('edit-reservasi',['reservasi' => $reservasi],['petugas'=>$petugas],['pasien'=>$pasien]);
        }
        
        
        // update data reservasi   
        public function updatereservasi(Request $request)
        {
            if(!Session::get('status')){
                return redirect('/login-pegawai')->with('alert','Anda belum login');
            }
        DB::table('reservasi')->where('id_reservasi',$request->id_reservasi)->update([
            'tgl_reservasi' => $request->tgl_reservasi,
            'tgl_layanan' => $request->tgl_layanan,
            'id_pasien' => $request->id_pasien,
            'id_petugas' => $request->id_petugas,
            'jadwal_ke' => $request->jadwal_ke,
            'karcis' => "10000",
        ]);
        // alihkan halaman ke halaman reservasi
        return redirect('/reservasi');
        }
        
        // method untuk hapus data reservasi
        public function hapusreservasi($id)
        {
            if(!Session::get('status')){
                return redirect('/login-pegawai')->with('alert','Anda belum login');
            }
        // menghapus data reservasi berdasarkan id yang dipilih
        DB::table('reservasi')->where('id_reservasi',$id)->delete();
            
        // alihkan halaman ke halaman reservasi
        return redirect('/reservasi');
        }    


}    