<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Bahan extends Model
{
    protected $table = 'bahans';

    protected $fillable = ['kode','nama','keterangan','user_id'];

    
    /**
     * @return relasi one to one, bahan dengan stok
     */
    public function stok()
    {
        return $this->hasOne('App\Stok','bahan_id');
    }
}
