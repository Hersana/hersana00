<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Komposisi extends Model
{
    protected $fillable = ['kode', 'spk_num','kode_warna','customer_id','prod_date','length','width','thickness','quantity','calspeed','keterangan','user_id'];
    
    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }

    public function perencanaans()
    {
    	return $this->hasMany('App\Perencanaan');
    }

    public function komposisidetails()
    {
    	return $this->hasMany(KomposisiDetail::class);
    }    
    
}
