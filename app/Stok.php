<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Stok extends Model
{    
    protected $fillable = ['bahan_id','jumlah','user_id'];

          
    public function bahan()
    {
    	return $this->belongsTo('App\Bahan', 'bahan_id');
    }
}