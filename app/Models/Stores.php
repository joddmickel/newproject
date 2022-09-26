<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\StoresController;

class Stores extends Model
{
    // protect the variables 
    protected $fillable= ['DeviceName','SerialNumber','Status','Count'];
  
}
