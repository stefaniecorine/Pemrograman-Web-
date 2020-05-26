<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PDF;

class PoliController extends Controller
{

    public function readpoli()
    { if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
        //mengambil data dari table poli
        $poli = DB::table('poli')->get();

        //mengirim data poli ke view read-poli
        return view('read-poli', ['poli' => $poli]);
    }

    public function cetak_pdf()
    { 
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
    	$poli = DB::table('poli')->get();
 
    	$pdf = PDF::loadview('read-poli-pdf',['poli'=>$poli])->setPaper('a4', 'portrait');
    	return $pdf->stream();
    }

    
    // method untuk menampilkan view form tambah poli
    public function addpoli()
    {
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
        // memanggil view tambah
        return view('add-poli');
    }


    // method untuk insert data ke table poli
    public function storepoli(Request $request)
    {
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
        // insert data ke table poli
        DB::table('poli')->insert([
            'id_poli' => $request->id_poli,
            'nama_poli' => $request->nama_poli,
            'no_ruang' => $request->no_ruang
        ]);

        // alihkan halaman ke halaman poli
        return redirect('/poli');
    }


    // method untuk edit data poli
    public function editpoli(Request $request)
    {  if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
        // mengambil data poli berdasarkan id yang dipilih
        $poli = DB::table('poli')->where('id_poli', $request->id)->get();
        // passing data poli yang didapat ke view edit-poli.blade.php
        return view('edit-poli', ['poli' => $poli]);
    }


    // update data poli   
    public function updatepoli(Request $request)
    {  if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
        DB::table('poli')->where('id_poli', $request->id_poli)->update([
            'nama_poli' => $request->nama_poli,
            'no_ruang' => $request->no_ruang

        ]);
        // alihkan halaman ke halaman poli
        return redirect('/poli');
    }

    // method untuk hapus data poli
    public function hapuspoli($id)
    {  if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('poli')->where('id_poli', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/poli');
    }
}
