<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomposisiDetail extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'komposisi_details';
	// protected $guarded = [];

    protected $fillable = ['no_mesin', 'melt_pump', 'mat_com1','per_com1','mat_com2','per_com2','mat_com3','per_com3','mat_com4','per_com4','mat_com5','per_com5','mat_com6','per_com6'];

    public function komposisi()
    {
    	return $this->belongsTo(Komposisi::class,'komposisi_id');
    }

    // public function bahan()
    // {
    // 	return $this->belongsTo('App\Bahan');
    // }
}
