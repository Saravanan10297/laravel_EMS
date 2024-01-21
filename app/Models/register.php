<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $table = 'emp';
    protected $guarded =['agreeCheck','updated_at','created_at'];
}
