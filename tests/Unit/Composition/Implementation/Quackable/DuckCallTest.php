<?php


namespace Tests\Unit\Composition\Implementation\Quackable;


use App\Composition\Implementation\Quackable\DuckCall;
use Tests\TestCase;

class DuckCallTest extends TestCase
{

    public function testQuack()
    {
        $class = new DuckCall();

        $this->assertEquals('Quack! Quack! Quack!', $class->quack());
    }

}