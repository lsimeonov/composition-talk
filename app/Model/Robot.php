<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    protected $fillable = ['model', 'quack', 'clean'];
}