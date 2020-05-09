<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    //
    protected $table = 'sosmed';
    protected $fillable = ['facebook','twitter','instagram','linkedin','whatsapp','gmail','telegram','youtube'];
}
