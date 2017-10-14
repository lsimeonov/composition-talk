<?php


namespace App\Composition\Implementation\Quackable;


use App\Composition\Interfaces\QuackableInterface;

class DuckCall implements QuackableInterface
{

    /**
     * @return string
     */
    public function quack(): string
    {
        return 'Quack! Quack! Quack!';
    }
}