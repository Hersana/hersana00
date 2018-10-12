<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Perencanaan extends Model
{
    protected $fillable = ['kode', 'komposisi_id', 'customer_id', 'spk_num', 'kode_warna', 'length', 'width', 'thickness', 'quantity', 'allowance', 'keterangan','user_id'];

     public function customer()
    {
    	return $this->belongsTo('App\Customer','customer_id');
    }
    
    public function komposisi()
    {
        return $this->belongsTo('App\Komposisi','komposisi_id');
    }

    public function perencanaandetails()
    {
    	return $this->hasMany(PerencanaanDetail::class);
    }

}
