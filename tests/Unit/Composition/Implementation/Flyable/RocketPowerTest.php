<?php


namespace Tests\Unit\Composition\Implementation\Flyable;


use App\Composition\Implementation\Flyable\RocketPower;
use Tests\TestCase;

class RocketPowerTest extends TestCase
{

    public function testFly()
    {
        $class = new RocketPower();

        $this->assertEquals('&#128640;', $class->fly());
    }

}