<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Visit;

class PagesController extends Controller
{
    public function list(){
    	$header = 'Lista pacjentów';
    	$patients = Patient::get();
    	return view('patient.list', compact('header', 'patients'));
    }
    public function show($id){
    	$patient = Patient::findOrFail($id);
    	$visits = Visit::where('patient', $id)->get();
    	return view('patient.show', compact('patient', 'visits'));
    }
    public function add(){
    	$header = 'Dodaj nowego pacjenta';
    	return view('patient.add')->with('header', $header);
    }
}
