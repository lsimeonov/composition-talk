<?php


namespace App\Http\Controllers;


use App\Factories\DuckFactory;
use App\Model\Duck;
use Illuminate\Http\Request;

class DuckController extends Controller
{

    public function index(Request $request, DuckFactory $factory)
    {
        $ducks = Duck::all();

        $composedDucks = $ducks->map([$factory, 'create']);

        return view('ducks', ['ducks' => $composedDucks]);

    }

}