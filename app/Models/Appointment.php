<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appoinments';

    protected $fillable = [

        'patient',
        'doctor',
        'date',
        'number',
        'email',

        'nic',
        'appoinmentNumber',
    ];
    public $timestamps = false;

}
