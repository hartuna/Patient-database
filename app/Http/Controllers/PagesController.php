<?php

namespace App\Http\Controllers;

use Request;
use App\Patient;
use App\Visit;
use App\User;
use App\Http\Requests\AddPatientRequest;

class PagesController extends Controller
{
    public function list(){
    	$header = 'Lista pacjentów';
    	$patients = Patient::get();
    	return view('patient.list', compact('header', 'patients'));
    }
    public function show($id){
    	$patient = Patient::findOrFail($id);
    	$visits = Visit::latest()->where('patient', $id)->get();
    	return view('patient.show', compact('patient', 'visits'));
    }
    public function add(){
    	$header = 'Dodaj nowego pacjenta';
        $users = User::pluck('name', 'id');
    	return view('patient.add', compact('header', 'users'));
    }
    public function savePatient(AddPatientRequest $request){
        Patient::create($request->all());
        return redirect('list');
    }
}
