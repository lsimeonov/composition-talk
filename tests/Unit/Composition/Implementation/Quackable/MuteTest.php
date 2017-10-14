<?php


namespace Tests\Unit\Composition\Implementation\Quackable;


use App\Composition\Implementation\Quackable\Mute;
use Tests\TestCase;

class MuteTest extends TestCase
{

    public function testQuack()
    {
        $class = new Mute();

        $this->assertEquals('', $class->quack());
    }

}