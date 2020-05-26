<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\Session;
use PDF;

class PetugasController extends Controller
{  
    public function readpetugas()
    {
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
    	// mengambil data dari table petugas
    	$petugas = DB::table('petugas')->get();
 
    	// mengirim data petugas ke view index
    	return view('read-petugas',['petugas' => $petugas]);
 
    }
    public function cetak_pdf()
    { 
        if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
    	$petugas = DB::table('petugas')->get();
 
    	$pdf = PDF::loadview('read-petugas-pdf',['petugas'=>$petugas])->setPaper('a4', 'landscape');
    	return $pdf->stream();
    }

    public function readmedis()
    { if(!Session::get('status')){
        return redirect('/login-petugas')->with('alert','Anda belum login');
    }
    	// mengirim data petugas ke view index
    	return view('read-medis');
 
    }
    public function readjadwal()
    {
        if(!Session::get('status')){
            return redirect('/login-pasien')->with('alert','Anda belum login');
        }
        $poli = DB::table('poli')->get();
     
        // mengambil data dari table petugas
        $petugas = DB::table('petugas')
                    -> join('poli','petugas.id_poli','=','poli.id_poli')
                    -> select('poli.nama_poli','petugas.nama','petugas.waktu_praktek')
                    -> orderby('nama_poli','asc')
                    -> distinct()
                    -> get();
 
    	// mengirim data petugas ke view index
    	return view('read-jadwaldokter',['petugas' => $petugas],['poli'=>$poli]);
 
    }

        // method untuk menampilkan view form tambah petugas
        public function addpetugas()
        { if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
       
        $poli = DB::table('poli')->get();
        // memanggil view tambah
        return view('add-petugas',['poli'=>$poli]);
        }
    
        // method untuk insert data ke table petugas
        public function storepetugas(Request $request) 
        {
            if(!Session::get('status')){
                return redirect('/login-pegawai')->with('alert','Anda belum login');
            }
            $waktu_praktek = $request->waktu_praktek1 .",". $request->waktu_praktek2;

        // insert data ke table petugas
        DB::table('petugas')->insert([
            'id_petugas'=>$request->id_petugas,
            'id_poli'=>$request->id_poli,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'tgl_lahir' => $request->tgl_lahir,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'no_ktp' => $request->no_ktp,
            'password' => $request->password,
            'spesialisasi'=> $request->spesialisasi,
            'waktu_praktek'=>$waktu_praktek
        ]);
        
        // alihkan halaman ke halaman petugas
        return redirect('/petugas');
        }

        // method untuk insert data ke table petugas
        public function storemedis(Request $request) 
        { 
            if(!Session::get('status')){
                return redirect('/login-pegawai')->with('alert','Anda belum login');
            }
            $waktu_praktek = $request->waktu_praktek1 .",". $request->waktu_praktek2;

            // insert data ke table petugas
            DB::table('petugas')->insert([
                'id_petugas'=>$request->id_petugas,
                'id_poli'=>$request->id_poli,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'gender' => $request->gender,
                'tgl_lahir' => $request->tgl_lahir,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'no_ktp' => $request->no_ktp,
                'password' => $request->password,
                'spesialisasi'=> $request->spesialisasi,
                'waktu_praktek'=>$waktu_praktek
        ]);
        
        // alihkan halaman ke halaman petugas
        return redirect('/medis');
        }

         // method untuk edit data petugas
        public function editpetugas(Request $request)
        {
            if(!Session::get('status')){
                return redirect('/login-pegawai')->with('alert','Anda belum login');
            }
        $poli = DB::table('poli')->get();
        // mengambil data petugas berdasarkan id yang dipilih
        $petugas = DB::table('petugas')->where('id_petugas',$request->id)->get();
        // passing data petugas yang didapat ke view edit-petugas.blade.php
        return view('edit-petugas',['petugas' => $petugas],['poli'=>$poli]);
        }
        
        
        // update data petugas   
        public function updatepetugas(Request $request)
        { if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
            $waktu_praktek = $request->waktu_praktek1 .",". $request->waktu_praktek2;

        DB::table('petugas')->where('id_petugas',$request->id_petugas)->update([
            'nama' => $request->nama,
            'id_poli' => $request->id_poli,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'tgl_lahir' => $request->tgl_lahir,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'password'=> $request->password,
            'spesialisasi'=> $request->spesialisasi,
            'waktu_praktek'=>$waktu_praktek
        ]);
        // alihkan halaman ke halaman petugas
        return redirect('/petugas');
        }
    
        // method untuk hapus data petugas
        public function hapuspetugas($id)
        { if(!Session::get('status')){
            return redirect('/login-pegawai')->with('alert','Anda belum login');
        }
        // menghapus data petugas berdasarkan id yang dipilih
        DB::table('petugas')->where('id_petugas',$id)->delete();
            
        // alihkan halaman ke halaman petugas
        return redirect('/petugas');
        }
}
