<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = 'gambar';
    
    // pengisian kolom file hanya boleh diisi pada table pemeriksaan
    protected $fillable = ['file','keterangan'];
}

