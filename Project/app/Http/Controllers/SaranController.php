<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaranController extends Controller
{   
    public function notifsaran()
    {

    	// mengirim data saran ke view index
    	return view('notif-saran');
 
    }
    public function readsaran()
    {
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
    	// mengambil data dari table saran
    	$saran = DB::table('saran')->get();
 
    	// mengirim data saran ke view index
    	return view('read-saran',['saran' => $saran]);
 
    }
     // method untuk menampilkan view form tambah saran
     public function addsaran()
     {
     // memanggil view tambah
     return view('/notif-saran');
     }
 
     // method untuk insert data ke table saran
     public function storesaran(Request $request) 
     {
     // insert data ke table saran
     DB::table('saran')->insert([
         'nama' => $request->nama,
         'email' => $request->email,
         'subject' => $request->subject,
         'message' => $request->message
     ]);
     
     // alihkan halaman ke halaman saran
     return redirect('/notif-saran');
     }
 
}