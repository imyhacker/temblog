<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //
    protected $table = 'artikel';
    protected $fillable = ['judul','tag','image','isi','author','image','tanggal'];

    
}
