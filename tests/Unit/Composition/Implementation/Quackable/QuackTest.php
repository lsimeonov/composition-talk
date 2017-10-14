<?php


namespace Tests\Unit\Composition\Implementation\Quackable;


use App\Composition\Implementation\Quackable\Quack;
use Tests\TestCase;

class QuackTest extends TestCase
{

    public function testQuack(){
        $class = new Quack();

        $this->assertEquals('Quack!', $class->quack());
    }

}