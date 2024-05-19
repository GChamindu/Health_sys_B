<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddDoctor;

class AddDoctortController extends Controller
{
    public function index(){

        $doctors = AddDoctor::all();

        foreach($doctors as $doctor){
        $doctor->imagedata = base64_encode($doctor->imagedata);

    }


    return response()->json($doctors);


    }
}
