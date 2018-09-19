<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
    	'name',
    	'surname',
    	'doctor'
    ];
    public function user(){
    	return $this->belongsTo('App\User', 'doctor');
    }
}
