<?php


namespace App\Inheritance;


class Duck
{
    public function quack()
    {
        return 'Quack';
    }

    /**
     * @return string
     */
    public function fly()
    {
        return 'Flap Flap';
    }

}