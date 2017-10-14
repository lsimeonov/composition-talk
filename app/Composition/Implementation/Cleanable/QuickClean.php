<?php


namespace App\Composition\Implementation\Cleanable;


use App\Composition\Interfaces\CleanableInterface;

class QuickClean implements CleanableInterface
{

    /**
     * @return string
     */
    public function clean(): string
    {
        return 'Brum Brum.. Done';
    }
}