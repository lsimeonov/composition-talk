<?php


namespace App\Inheritance\Ducks;


class MuteDuck extends \App\Inheritance\Duck
{

    /**
     * @return string
     */
    public function quack()
    {
        return '';
    }

}