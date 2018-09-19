<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
    	'name',
    	'surname',
    	'pesel',
    	'phone',
    	'email',
    	'doctor'
    ];
    public function user(){
    	return $this->belongsTo('App\User', 'doctor');
    }
}
