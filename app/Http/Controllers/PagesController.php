<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PagesController extends Controller
{
    public function list(){
    	$header = 'Lista pacjentów';
    	$patients = Patient::get();
    	return view('patient.list', compact('header', 'patients'));
    }
    public function show($id){
    	$patient = Patient::findOrFail($id);
    	return view('patient.show')->with('patient', $patient);
    }
    public function add(){
    	$header = 'Dodaj nowego pacjenta';
    	return view('patient.add')->with('header', $header);
    }
}
