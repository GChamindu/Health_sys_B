<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddDoctor extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'adddoctor';
    protected $fillable = ['regNo', 'name', 'specialists', 'hospital', 'day', 'other', 'imagedata'];


}
