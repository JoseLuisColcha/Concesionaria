<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaracteristicasController extends Controller
{
    public function caracteristica()
    {
           $caracteristicas =
        [
            ["img"=>'https://static.vecteezy.com/system/resources/previews/002/581/764/non_2x/car-steering-wheel-logo-illustration-free-vector.jpg',
            'Titulo' => 'El concesionario mas grande ',
            'Contenido' => 'Quis nostrud exercitate laboridy aliquip duis irure sed dolor excepture fugiat incididunt ut labore et dolore.'
     
            ],

            ["img"=>'https://png.pngtree.com/png-vector/20190904/ourlarge/pngtree-service-tool-and-gear-service-logo-designs-inspiration-isolated-png-image_1722765.jpg',
            'Titulo' => 'Modernos chequeos en taller ',
            'Contenido' => 'Quis nostrud exercitate laboridy aliquip duis irure sed dolor excepture fugiat incididunt ut labore et dolore.'
     
            ],
            ["img"=>'https://static.vecteezy.com/system/resources/thumbnails/000/623/711/small/auto_car-05.jpg',
            'Titulo' => 'Mejor inventario de automoviles',
            'Contenido' => 'Quis nostrud exercitate laboridy aliquip duis irure sed dolor excepture fugiat incididunt ut labore et dolore.'
     
            ]
        ];
        

        return view('home',compact('caracteristicas'));
        
    }
}
