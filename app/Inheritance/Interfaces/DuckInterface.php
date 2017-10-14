<?php


namespace App\Inheritance\Interfaces;


interface DuckInterface
{
    /**
     * @return string
     */
    public function quack(): string;

    /**
     * @return string
     */
    public function fly(): string;

}