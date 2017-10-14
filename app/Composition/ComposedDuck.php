<?php
namespace App\Composition;

use App\Composition\Interfaces\DuckLikeInterface;
use App\Composition\Interfaces\FlyableInterface;
use App\Composition\Interfaces\QuackableInterface;

class ComposedDuck implements DuckLikeInterface
{


    /**
     * @var \App\Composition\Interfaces\FlyableInterface
     */
    private $flyBehaviour;
    /**
     * @var \App\Composition\Interfaces\QuackableInterface
     */
    private $quackBehaviour;

    public function __construct(FlyableInterface $flyBehaviour, QuackableInterface $quackBehaviour)
    {
        $this->flyBehaviour = $flyBehaviour;
        $this->quackBehaviour = $quackBehaviour;
    }

    /**
     * @return string
     */
    public function swim(): string
    {
        return 'Swim Swam';
    }

    /**
     * @return string
     */
    public function fly(): string
    {
        return $this->flyBehaviour->fly();
    }

    /**
     * @return string
     */
    public function quack(): string
    {
        return $this->quackBehaviour->quack();
    }
}