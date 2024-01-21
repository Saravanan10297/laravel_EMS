<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class emp extends Model
{
    use HasFactory;
     
    //mass asssigment
    //protected $fillable =['name']
   // protected $fillable = ['name','email','phone','joining_date','salary'];


    //not for mass assignment
    protected $guarded =['is_active'];


}
