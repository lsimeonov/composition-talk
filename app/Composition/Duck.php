<?php
namespace App\Composition;

use App\Composition\Interfaces\DuckLikeInterface;
use App\Composition\Interfaces\FlyableInterface;
use App\Composition\Interfaces\QuackableInterface;

class Duck implements DuckLikeInterface
{


    /**
     * @var \App\Composition\Interfaces\FlyableInterface
     */
    private $flyBehaviour;
    /**
     * @var \App\Composition\Interfaces\QuackableInterface
     */
    private $quackBehaviour;

    /**
     * ComposedDuck constructor.
     *
     * @param \App\Composition\Interfaces\FlyableInterface $flyBehaviour
     * @param \App\Composition\Interfaces\QuackableInterface $quackBehaviour
     */
    public function __construct(FlyableInterface $flyBehaviour, QuackableInterface $quackBehaviour)
    {
        $this->flyBehaviour = $flyBehaviour;
        $this->quackBehaviour = $quackBehaviour;
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

    /**
     * @param \App\Composition\Interfaces\FlyableInterface $flyBehaviour
     */
    public function setFlyBehaviour(\App\Composition\Interfaces\FlyableInterface $flyBehaviour)
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    /**
     * @param \App\Composition\Interfaces\QuackableInterface $quackBehaviour
     */
    public function setQuackBehaviour(\App\Composition\Interfaces\QuackableInterface $quackBehaviour)
    {
        $this->quackBehaviour = $quackBehaviour;
    }
}