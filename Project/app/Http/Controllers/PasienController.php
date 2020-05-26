<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use PDF;
class PasienController extends Controller
{
    public function readpasien()
    {
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
        //mengambil data dari table pasien
        $pasien = DB::table('pasien')->get();

        //mengirim data pasien ke view read-pasien
        return view('read-pasien', ['pasien' => $pasien]);
    }
    public function cetak_pdf()
    {   if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
    	$pasien = DB::table('pasien')->get();
 
    	$pdf = PDF::loadview('read-pasien-pdf',['pasien'=>$pasien])->setPaper('a4', 'landscape');
    	return $pdf->stream();
    }


    public function readuser()
    {
        if(!Session::get('status')){
            return redirect('/login-pasien')->with('alert','Anda belum login');
        }
        
        $pasien = DB::table('pasien')->get();
        //mengirim data pasien ke view read-user
        return view('read-user', ['pasien' => $pasien]);
    }
    public function readuserprofile()
    {
        if(!Session::get('status')){
            return redirect('/login-pasien')->with('alert','Anda belum login');
        }
        
        return view('read-userprofile');
    }

    // method untuk menampilkan view form tambah pasien
    public function addpasien()
    {
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
        // memanggil view tambah
        return view('add-pasien');
    }

    

    // method untuk insert data ke table pasien
    public function storepasien(Request $request)
    {   if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
        // insert data ke table pasien
        DB::table('pasien')->insert([
            'id_pasien' => $request->id_pasien,
            'nama_pasien' => $request->nama_pasien,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'tgl_lahir' => $request->tgl_lahir,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'password' => $request->password
        ]);

        // alihkan halaman ke halaman pasien
        return redirect('pasien');
    }

    

    // method untuk edit data pasien
    public function editpasien(Request $request)
    {   if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
        // mengambil data pasien berdasarkan id yang dipilih
        $pasien = DB::table('pasien')->where('id_pasien', $request->id)->get();
        // passing data pasien yang didapat ke view edit-pasien.blade.php
        return view('edit-pasien', ['pasien' => $pasien]);
    }

    // update data pasien   
    public function updatepasien(Request $request)
    {   if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
        DB::table('pasien')->where('id_pasien', $request->id_pasien)->update([
            'nama_pasien' => $request->nama_pasien,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'tgl_lahir' => $request->tgl_lahir,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'password' => $request->password
        ]);
        // alihkan halaman ke halaman pasien
        return redirect('/pasien');
    }

    // method untuk hapus data pasien
    public function hapuspasien($id)
    {   if(!Session::get('status')){
        return redirect('/login-pegawai')->with('alert','Anda belum login');
    }
        // menghapus data pasien berdasarkan id yang dipilih
        DB::table('pasien')->where('id_pasien', $id)->delete();

        // alihkan halaman ke halaman pasien
        return redirect('/pasien');
    }
}
