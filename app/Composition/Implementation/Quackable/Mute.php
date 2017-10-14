<?php


namespace App\Composition\Implementation\Quackable;


use App\Composition\Interfaces\QuackableInterface;

class Mute implements QuackableInterface
{

    /**
     * @return string
     */
    public function quack(): string
    {
        return '';
    }
}