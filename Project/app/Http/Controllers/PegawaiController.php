<?php

namespace App\Http\Controllers;
use App\Pegawai; 
use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\Session;
use PDF;

class PegawaiController extends Controller
{   
    public function readpegawai()
    {
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();
        
    	// mengirim data pegawai ke view index
    	return view('read-pegawai',['pegawai' => $pegawai]);
 
    }
    public function cetak_pdf()
    {   if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
    	$pegawai = DB::table('pegawai')->get();
 
    	$pdf = PDF::loadview('read-pegawai-pdf',['pegawai'=>$pegawai])->setPaper('a4', 'landscape');
    	return $pdf->stream();
    }
    public function cetak_pdf2()
    {   if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
    	$saran = DB::table('saran')->get();
 
    	$pdf = PDF::loadview('read-saran-pdf',['saran'=>$saran])->setPaper('a4', 'portrait');
    	return $pdf->stream();
    }
    public function readbiopegawai()
    {   if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }

    	// mengirim data pegawai ke view index
    	return view('read-biopegawai');
 
    }


        // method untuk menampilkan view form tambah pegawai
    public function addpegawai()
        {   if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
        // memanggil view tambah
        return view('add-pegawai');
        }
    
        // method untuk insert data ke table pegawai
        public function storepegawai(Request $request) 
        {   if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'id_pegawai'=>$request->id_pegawai,
            'nama_peg' => $request->nama_peg,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'tgl_lahir' => $request->tgl_lahir,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'no_ktp' => $request->no_ktp,
            'password' => $request->password
        ]);
        
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
        }
    
    // method untuk edit data pegawai
    public function editpegawai(Request $request)
    {   if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
	// mengambil data pegawai berdasarkan id yang dipilih
	$pegawai = DB::table('pegawai')->where('id_pegawai',$request->id)->get();
	// passing data pegawai yang didapat ke view edit-pegawai.blade.php
    return view('edit-pegawai',['pegawai' => $pegawai]);
    }
    
    
    // update data pegawai   
    public function updatepegawai(Request $request)
    {   if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
	DB::table('pegawai')->where('id_pegawai',$request->id_pegawai)->update([
		'nama_peg' => $request->nama_peg,
		'alamat' => $request->alamat,
		'gender' => $request->gender,
		'tgl_lahir' => $request->tgl_lahir,
        'no_telp' => $request->no_telp,
        'email' => $request->email,
        'no_ktp'=> $request->no_ktp,
        'password'=>$request->password
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
    }
    
    // method untuk hapus data pegawai
    public function hapuspegawai($id)
    {   if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pegawai')->where('id_pegawai',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
    }    
}