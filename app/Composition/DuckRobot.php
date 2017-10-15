<?php


namespace App\Composition;


use App\Composition\Interfaces\CleanableInterface;
use App\Composition\Interfaces\DuckRobotLikeInterface;
use App\Composition\Interfaces\QuackableInterface;

class DuckRobot implements DuckRobotLikeInterface
{

    /**
     * @var \App\Composition\Interfaces\QuackableInterface
     */
    private $quackBehaviour;
    /**
     * @var \App\Composition\Interfaces\CleanableInterface
     */
    private $cleanBehaviour;

    /**
     * ComposedDuckRobot constructor.
     *
     * @param \App\Composition\Interfaces\QuackableInterface $quackBehaviour
     * @param \App\Composition\Interfaces\CleanableInterface $cleanBehaviour
     */
    public function __construct(QuackableInterface $quackBehaviour, CleanableInterface $cleanBehaviour)
    {
        $this->quackBehaviour = $quackBehaviour;
        $this->cleanBehaviour = $cleanBehaviour;
    }

    /**
     * @return string
     */
    public function quack(): string
    {
        return $this->quackBehaviour->quack();
    }

    /**
     * @return string
     */
    public function clean(): string
    {
        return $this->cleanBehaviour->clean();
    }

    /**
     * @param \App\Composition\Interfaces\QuackableInterface $quackBehaviour
     */
    public function setQuackBehaviour(\App\Composition\Interfaces\QuackableInterface $quackBehaviour)
    {
        $this->quackBehaviour = $quackBehaviour;
    }

    /**
     * @param \App\Composition\Interfaces\CleanableInterface $cleanBehaviour
     */
    public function setCleanBehaviour(\App\Composition\Interfaces\CleanableInterface $cleanBehaviour)
    {
        $this->cleanBehaviour = $cleanBehaviour;
    }
}