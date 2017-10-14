<?php
namespace App\Composition\Interfaces;

interface QuackableInterface
{

    /**
     * @return string
     */
    public function quack(): string;

}