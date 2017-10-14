<?php


namespace App\Inheritance\Ducks;


use App\Inheritance\NormalDuck;

class SwimmingDuck extends NormalDuck
{

    public function swim()
    {
        return 'Swim Swam';
    }

}