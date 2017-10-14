<?php


namespace App\Composition\Implementation\Flyable;


use App\Composition\Interfaces\FlyableInterface;

class CannotFly implements FlyableInterface
{

    /**
     * @return string
     */
    public function fly(): string
    {
        return '';
    }
}