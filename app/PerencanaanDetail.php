<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerencanaanDetail extends Model
{
    protected $table = 'perencanaan_details';
	// protected $guarded = [];

    protected $fillable = [
    	'no_mesin', 'melt_pump', 
    	'mat_com1','per_com1','needhour_com1','need_com1',
    	'mat_com2','per_com2','needhour_com2','need_com2',
    	'mat_com3','per_com3','needhour_com3','need_com3',
    	'mat_com4','per_com4','needhour_com4','need_com4',
    	'mat_com5','per_com5','needhour_com5','need_com5',
    	'mat_com6','per_com6','needhour_com6','need_com6'
    ];

    public function perencanaan()
    {
    	return $this->belongsTo(Perencanaan::class,'perencanaan_id');
    }}
