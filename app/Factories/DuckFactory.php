<?php

namespace App\Factories;

use App\Composition\ComposedDuck;
use App\Composition\Implementation\Flyable\CannotFly;
use App\Composition\Implementation\Flyable\FlyWithWings;
use App\Composition\Implementation\Flyable\RocketPower;
use App\Composition\Implementation\Quackable\DuckCall;
use App\Composition\Implementation\Quackable\Mute;
use App\Composition\Implementation\Quackable\Quack;
use App\Composition\Interfaces\DuckLikeInterface;
use App\Composition\Interfaces\FlyableInterface;
use App\Composition\Interfaces\QuackableInterface;
use App\Model\Duck as DuckModel;

/**
 * Class DuckFactory.
 */
class DuckFactory
{

    /**
     * @param \App\Model\Duck $duck
     *
     * @return \App\Composition\ComposedDuck
     * @throws \Exception
     */
    public function create(DuckModel $duck): DuckLikeInterface
    {
        $flyBehaviour = $this->findFlyBehaviour($duck);
        $quackBehaviour = $this->findQuackBehaviour($duck);

        return new ComposedDuck($flyBehaviour, $quackBehaviour);
    }

    /**
     * @param \App\Model\Duck $duck
     *
     * @return \App\Composition\Interfaces\FlyableInterface
     * @throws \Exception
     */
    private function findFlyBehaviour(DuckModel $duck): FlyableInterface
    {
        switch ($duck->fly) {
            case 'wings':
                return new FlyWithWings();
            case 'rocket':
                return new RocketPower();
            case null:
                return new CannotFly();
            default:
                throw new \Exception('Our ducks cannot fly like this: ' . $duck->fly);
        }
    }

    /**
     * @param \App\Model\Duck $duck
     *
     * @return \App\Composition\Interfaces\QuackableInterface
     * @throws \Exception
     */
    private function findQuackBehaviour(DuckModel $duck): QuackableInterface
    {
        switch ($duck->quack) {
            case 'quack':
                return new Quack();
            case 'duck_call':
                return new DuckCall();
            case 'mute':
                return new Mute();
            default:
                throw new \Exception('Our ducks cannot quack like this: ' . $duck->quack);
        }
    }

}