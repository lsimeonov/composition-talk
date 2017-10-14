<?php


namespace App\Inheritance\Ducks;


use App\Inheritance\Duck;

class RobotDuck extends Duck
{

    /**
     * @return string
     */
    public function clean()
    {
        return 'Brum Brum.. Done';
    }

    /**
     * Our robot cannot have the possibility to fly.. Gorilla banana problem.
     * @return string
     */
    public function fly()
    {
        return parent::fly();
    }
}