<?php

namespace App\Composition\Implementation\Quackable;

use App\Composition\Interfaces\QuackableInterface;

class Quack implements QuackableInterface
{

    /**
     * @return mixed
     */
    public function quack(): string
    {
        return 'Quack!';
    }
}