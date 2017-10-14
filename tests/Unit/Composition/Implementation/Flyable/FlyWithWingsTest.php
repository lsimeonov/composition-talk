<?php


namespace Tests\Unit\Composition\Implementation\Flyable;


use App\Composition\Implementation\Flyable\FlyWithWings;
use Tests\TestCase;


class FlyWithWingsTest extends TestCase
{
    public function testFly()
    {
        $class = new FlyWithWings();

        $this->assertEquals('Flap Flap', $class->fly());
    }

}