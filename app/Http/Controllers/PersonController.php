<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Роман',
                'age' => 21,
            ],
            [
                'id' => 2,
                'name' => 'Роберт',
                'age' => 21,
            ],
            [
                'id' => 3,
                'name' => 'Славик',
                'age' => 22,
            ],
            [
                'id' => 4,
                'name' => 'Гончаренко',
                'age' => 21,
            ],
        ];
        return $persons;
    }
}
