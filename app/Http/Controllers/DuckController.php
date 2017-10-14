<?php


namespace App\Http\Controllers;


use App\Composition\DuckRobot;
use App\Composition\Factory\DuckFactory;
use App\Composition\Implementation\Cleanable\QuickClean;
use App\Composition\Implementation\Flyable\RocketPower;
use App\Composition\Implementation\Quackable\DuckCall;
use App\Composition\Implementation\Quackable\Quack;
use App\Model\Duck;

class DuckController extends Controller
{

    public function index()
    {
        $duck = new \App\Composition\Duck(new RocketPower(), new Quack());

        echo $duck->quack() . '<br />';
        echo $duck->fly();

        echo '<hr />';

        $duckRobot = new DuckRobot(new DuckCall(), new QuickClean());

        echo $duckRobot->quack() . '<br />';;
        echo $duckRobot->clean();
    }

    /**
     * @param \App\Composition\Factory\DuckFactory $factory
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function model(DuckFactory $factory)
    {
        $ducks = Duck::all();

        $composedDucks = $ducks->map([$factory, 'create']);

        return view('ducks', ['ducks' => $composedDucks]);
    }

}