<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employes';
    protected $fillable = ['name','email','post','image'];
}
