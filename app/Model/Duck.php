<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Duck extends Model
{

    protected $fillable = ['name', 'fly', 'quack'];
}
