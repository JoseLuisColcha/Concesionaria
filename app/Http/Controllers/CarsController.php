<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function home()
    {
        $cars =
        [
            [
            "img"=>'https://loscoches.com/wp-content/uploads/2021/04/carros-deportivos-potencia.jpg'
            ],

            [
            "img"=>'https://loscoches.com/wp-content/uploads/2021/04/carros-deportivos-potencia.jpg'
            ],

            [
            "img"=>'https://loscoches.com/wp-content/uploads/2021/04/carros-deportivos-potencia.jpg'
            ]
        ];

        return view('home',compact('cars'));
    }
}
