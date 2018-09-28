<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preview extends Model
{
    protected $fillable = [
    	'date',
    	'title',
    	'patient'
    ];
}
