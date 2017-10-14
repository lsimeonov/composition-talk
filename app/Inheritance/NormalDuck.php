<?php


namespace App\Inheritance;


use App\Inheritance\Interfaces\DuckInterface;

class NormalDuck extends Bird
{
    
    /**
     * @return string
     */
    public function quack(): string
    {
        return 'Quack';
    }
}