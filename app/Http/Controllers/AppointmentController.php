<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {

        $validateData = $req->validate([
            'patient' => 'required',
            'doctor' => 'required',
            'date' => 'required',
            'number' => 'required',
            'email' => 'required',
            'nic' => 'required',
            'appointmentNumber' => 'required',

        ]);

        $patient = new Appointment;

        $patient->patient = $validateData['patient'];
        $patient->doctor = $validateData['doctor'];
        $patient->date = $validateData['date'];
        $patient->number = $validateData['number'];
        $patient->email = $validateData['email'];
        $patient->nic = $validateData['nic'];
        $patient->appointmentNumber = $validateData['appointmentNumber'];

        $patient->save();














    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
