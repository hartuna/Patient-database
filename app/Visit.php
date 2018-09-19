<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
    	'date',
    	'title',
    	'patient'
    ];
}
