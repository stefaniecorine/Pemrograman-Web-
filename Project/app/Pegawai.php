<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Pegawai extends Model
{
    protected $table = "pegawai";
 
    protected $fillable = ['id_pegawai','nama','no_ktp','alamat','gender','tgl_lahir','no_telp','email','password'];
}