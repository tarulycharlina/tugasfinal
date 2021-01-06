<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //menunjuk tabel yang digunakan
    protected $table ='berita';
    //mass assignment
    protected $guarded = [];
}
