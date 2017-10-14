<?php


namespace Tests\Unit\Composition\Implementation\Flyable;


use App\Composition\Implementation\Flyable\CannotFly;
use Tests\TestCase;

class CannotFlyTest extends TestCase
{

    public function testFly()
    {
        $class = new CannotFly();

        $this->assertEquals('', $class->fly());
    }

}