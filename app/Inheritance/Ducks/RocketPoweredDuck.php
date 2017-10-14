<?php


namespace App\Inheritance\Ducks;


use App\Inheritance\Duck;

class RocketPoweredDuck extends Duck
{
    public function fly()
    {
        return '&#128640;';
    }

}