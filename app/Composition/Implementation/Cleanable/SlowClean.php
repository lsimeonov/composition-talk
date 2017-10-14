<?php


namespace App\Composition\Implementation\Cleanable;


use App\Composition\Interfaces\CleanableInterface;

class SlowClean implements CleanableInterface
{
    /**
     * @return string
     */
    public function clean(): string
    {
        return 'Brum Brum Brum.... (one hour later) Done';
    }
}