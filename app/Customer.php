<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Customer extends Model
{
    protected $fillable = ['kode','nama','negara','keterangan','user_id'];

    // public function komposisis()//panggil model Komposisi
    // {
    //     return $this->hasMany('App\Komposisi');
    // }

    // public function komposisis()
    // {
    //     $this->hasMany('App\Komposisi');
    // }
}
