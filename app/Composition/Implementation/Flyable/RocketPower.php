<?php


namespace App\Composition\Implementation\Flyable;


use App\Composition\Interfaces\FlyableInterface;

class RocketPower implements FlyableInterface
{

    /**
     * @return string
     */
    public function fly(): string
    {
       return '&#128640;';
    }
}