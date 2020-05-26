<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LogRegController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function logout()
    {
        Session::flush();
        return redirect('/home');
    }

    //PASIEN
    public function loginpasien()
    {
        return view('login-pasien');
    }

    //validasi login
    public function loginPostPasien(Request $request)
    {

        $this->validate(
            $request,
            ['email' => 'required'],
            ['password' => 'required']
        );

        $email = $request->input('email');
        $password = $request->input('password');

        $users = DB::table('pasien')->where(['email' => $email, 'password' => $password])->first();

        if (count((array)$users) == 0) {
            Session::flash('message', "Email atau password salah");
            return redirect('/login-pasien');
        } else if ($email == $users->email and $password == $users->password) {
            Session::flush();
            Session::put('nama_pasien', $users->nama_pasien);
            Session::put('id_pasien', $users->id_pasien);
            Session::put('alamat', $users->alamat);
            Session::put('tgl_lahir', $users->tgl_lahir);
            Session::put('gender', $users->gender);
            Session::put('no_telp', $users->no_telp);
            Session::put('email', $users->email);
            Session::put('status', "loggedin");
            $session_id_pasien=Session::get('id_pasien');
            $session_alamat=Session::get('alamat');
            $session_gender=Session::get('gender');
            $session_tgl_lahir=Session::get('tgl_lahir');
            $session_no_telp=Session::get('no_telp');
            $session_email=Session::get('email');
            return redirect('/user');
        }
    }

    //PEGAWAI
    public function loginpegawai()
    {
        return view('login-pegawai');
    }
    //validasi login
    public function loginPostPegawai(Request $request)
    {
        $this->validate(
            $request,
            ['email' => 'required'],
            ['password' => 'required']
        );

        $email = $request->input('email');
        $password = $request->input('password');

        $users = DB::table('pegawai')->where(['email' => $email, 'password' => $password])->first();

        if (count((array)$users) == 0) {
            Session::flash('message', "Email atau password salah");
            return redirect('/login-pegawai');
        } else
       
        if ($email == $users->email and $password == $users->password) {
            Session::flush();
            Session::put('nama_peg', $users->nama_peg);
            Session::put('id_pegawai', $users->id_pegawai);
            Session::put('no_ktp', $users->no_ktp);
            Session::put('alamat', $users->alamat);
            Session::put('tgl_lahir', $users->tgl_lahir);
            Session::put('gender', $users->gender);
            Session::put('no_telp', $users->no_telp);
            Session::put('email', $users->email);
            Session::put('status', "loggedin");
            $session_id_pasien=Session::get('nama_peg');
            $session_alamat=Session::get('id_pegawai');
            $session_gender=Session::get('no_ktp');
            $session_gender=Session::get('gender');
            $session_tgl_lahir=Session::get('tgl_lahir');
            $session_no_telp=Session::get('no_telp');
            $session_email=Session::get('email');
            return redirect('/biopegawai');
        }
    }

    //PETUGAS MEDIS
    public function loginpetugas()
    {
        return view('login-petugas');
    }
    //validasi login
    public function loginPostPetugas(Request $request)
    {

        $this->validate(
            $request,
            ['email' => 'required'],
            ['password' => 'required']
        );

        $email = $request->input('email');
        $password = $request->input('password');

        $users = DB::table('petugas')->where(['email' => $email, 'password' => $password])->first();

        if (count((array)$users) == 0) {
            Session::flash('message', "Email atau password salah");
            return redirect('/login-petugas');
        } else
       
        if ($email == $users->email and $password == $users->password) {
            Session::flush();
            Session::put('nama', $users->nama);
            Session::put('id_petugas', $users->id_petugas);
            Session::put('no_ktp', $users->no_ktp);
            Session::put('alamat', $users->alamat);
            Session::put('tgl_lahir', $users->tgl_lahir);
            Session::put('gender', $users->gender);
            Session::put('no_telp', $users->no_telp);
            Session::put('spesialisasi', $users->spesialisasi);
            Session::put('waktu_praktek', $users->waktu_praktek);
            Session::put('id_poli', $users->id_poli);
            Session::put('email', $users->email);
            Session::put('status', "loggedin");
            $session_id_pasien=Session::get('id_petugas');
            $session_id_pasien=Session::get('nama');
            $session_alamat=Session::get('no_ktp');
            $session_alamat=Session::get('alamat');
            $session_gender=Session::get('gender');
            $session_tgl_lahir=Session::get('tgl_lahir');
            $session_tgl_lahir=Session::get('waktu_praktek');
            $session_tgl_lahir=Session::get('spesialisasi');
            $session_no_telp=Session::get('no_telp');
            $session_no_telp=Session::get('id_poli');
            $session_email=Session::get('email');
            return redirect('/medis');
        }
    }

    //REGISTRASI USER
    public function adduser()
    {
        // memanggil view tambah (REGISTER)
        return view('add-user');
    }
    // method untuk insert data ke table pasien
    public function storeuser(Request $request)
    {  
        
        $status_akun =DB::table('pasien')->where('email',$request->email)->first();
        if($status_akun){
            Session::flash('message', "Email sudah terdaftar");
            return Redirect::back();} 
            else {
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
          
            return redirect('/user/notif-register');
        }
    }
    public function notifregister()
    {
        // memanggil view notifikasi registrasi berhasil
        return view('notif-register');
    }
}
