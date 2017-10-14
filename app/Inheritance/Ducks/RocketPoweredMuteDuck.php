<?php


namespace App\Inheritance\Ducks;


use App\Inheritance\Duck;
use App\Inheritance\Traits\MuteTrait;
use App\Inheritance\Traits\RocketPowersTrait;

class RocketPoweredMuteDuck extends Duck
{
    use RocketPowersTrait, MuteTrait;
}