<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PDF;

class PembayaranController extends Controller
{   
    public function readpembayaran()
    {   if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
    	// mengambil data dari table pembayaran
        $pembayaran = DB::table('pembayaran')
                    -> join('reservasi','pembayaran.id_reservasi','=','reservasi.id_reservasi')
                    -> join('petugas','reservasi.id_petugas','=','petugas.id_petugas')
                    -> join('poli','petugas.id_poli','=','poli.id_poli')
                    -> join('pasien','reservasi.id_pasien','=','pasien.id_pasien')
                    -> select('reservasi.karcis','pembayaran.id_pembayaran','pembayaran.tgl_pembayaran','petugas.nama',
                    'poli.nama_poli','pasien.nama_pasien','poli.tarif','pembayaran.id_pegawai')
                    ->get();
        
      
    	// mengirim data pembayaran ke view index
    	return view('read-pembayaran',['pembayaran' => $pembayaran]);
 
    }
    public function cetak_pdf()
    { if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
        $pembayaran = DB::table('pembayaran')
        -> join('reservasi','pembayaran.id_reservasi','=','reservasi.id_reservasi')
        -> join('petugas','reservasi.id_petugas','=','petugas.id_petugas')
        -> join('poli','petugas.id_poli','=','poli.id_poli')
        -> join('pasien','reservasi.id_pasien','=','pasien.id_pasien')
        -> join('pegawai','pembayaran.id_pegawai','=','pegawai.id_pegawai')
        -> select('reservasi.karcis','pembayaran.id_pembayaran','pembayaran.tgl_pembayaran','petugas.nama',
        'poli.nama_poli','pasien.nama_pasien','poli.tarif','pembayaran.id_pegawai')
        ->get();


        
    	$pdf = PDF::loadview('read-pembayaran-pdf',['pembayaran'=>$pembayaran])->setPaper('a4', 'landscape');
    	return $pdf->stream();
    }
    public function cetakinvoice(Request $request){
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
        $pembayaran = DB::table('pembayaran')
        -> join('reservasi','pembayaran.id_reservasi','=','reservasi.id_reservasi')
        -> join('petugas','reservasi.id_petugas','=','petugas.id_petugas')
        -> join('poli','petugas.id_poli','=','poli.id_poli')
        -> join('pasien','reservasi.id_pasien','=','pasien.id_pasien')
        -> join('pegawai','pembayaran.id_pegawai','=','pegawai.id_pegawai')
        -> where('id_pembayaran',$request->id)
        -> select('reservasi.karcis','pembayaran.id_pembayaran','pembayaran.tgl_pembayaran','petugas.nama',
        'poli.nama_poli','pasien.nama_pasien','poli.tarif','pembayaran.id_pegawai','reservasi.id_reservasi','pegawai.nama_peg')
        ->get();



    $pdf = PDF::loadview('cetak-invoice-pdf',['pembayaran'=>$pembayaran])->setPaper('a6', 'portrait');
    return $pdf->stream();
    }

    // method untuk menampilkan view form tambah pembayaran
    public function addpembayaran()
        {
            if(!Session::get('status')){
                return redirect('/login-pegawai')->with('alert','Anda belum login');
            }
            $reservasi = DB::table('reservasi')->get();
            $pegawai = DB::table('pegawai')->get();
        // memanggil view tambah
        return view('add-pembayaran',['reservasi'=>$reservasi],['pegawai'=>$pegawai]);
        }
    
        // method untuk insert data ke table pembayaran
        public function storepembayaran(Request $request) 
        { if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
        // insert data ke table pembayaran
        DB::table('pembayaran')->insert([
            'id_pembayaran'=>$request->id_pembayaran,
            'tgl_pembayaran'=>$request->tgl_pembayaran,
            'id_reservasi' => $request->id_reservasi,
            'id_pegawai' => $request->id_pegawai,
            
        ]);
        
        // alihkan halaman ke halaman pembayaran
        return redirect('/pembayaran');
        }

         // method untuk edit data pembayaran
        public function editpembayaran(Request $request)
        {
            if(!Session::get('status')){
                return redirect('/login-pegawai')->with('alert','Anda belum login');
            }
            $reservasi = DB::table('reservasi')->get();
            $pegawai = DB::table('pegawai')->get();
        // mengambil data pembayaran berdasarkan id yang dipilih
        $pembayaran = DB::table('pembayaran')->where('id_pembayaran',$request->id)->get();
        // passing data pembayaran yang didapat ke view edit-pembayaran.blade.php
        return view('edit-pembayaran',['pembayaran' => $pembayaran],['reservasi'=>$reservasi],['pegawai'=>$pegawai]);
        }
        
        // update data pembayaran   
        public function updatepembayaran(Request $request)
        {
            if(!Session::get('status')){
                return redirect('/login-pegawai')->with('alert','Anda belum login');
            }
        DB::table('pembayaran')->where('id_pembayaran',$request->id_pembayaran)->update([
            
            'tgl_pembayaran'=>$request->tgl_pembayaran,
            'total_biaya'=>$request->total_biaya,
            'id_reservasi' => $request->id_reservasi,
            'id_pegawai' => $request->id_pegawai,
        ]);
        // alihkan halaman ke halaman pembayaran
        return redirect('/pembayaran');
        }
        
        // method untuk hapus data pembayaran
        public function hapuspembayaran($id)
        {
            if(!Session::get('status')){
                return redirect('/login-pegawai')->with('alert','Anda belum login');
            }
        // menghapus data pembayaran berdasarkan id yang dipilih
        DB::table('pembayaran')->where('id_pembayaran',$id)->delete();
            
        // alihkan halaman ke halaman pembayaran
        return redirect('/pembayaran');
        }    


}    