<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function personal()
    {
        $persons =
        [
            ['Nombre' => 'Roberth ',
            'Apellido' => 'Pincha',
            "Contacto"=>'0998374348',
            "Web"=>'https://github.com/Roberth',
            "img"=>'http://www.w3bai.com/w3css/img_avatar3.png'
            ],

            ["Nombre"=>'Miguel',
            "Apellido"=>'Cuenca',
            "Contacto"=>'0934635688',
            "Web"=>'https://github.com/Miguel',
            "img"=>'http://www.w3bai.com/w3css/img_avatar2.png'
            ],

            ["Nombre"=>'Wendy',
            "Apellido"=>'Palomo',
            "Contacto"=>'0999743145',
            "Web"=>'https://github.com/Wendy',
            "img"=>'http://www.w3bai.com/w3css/img_avatar4.png'
            ],

            ["Nombre"=>'Jose Luis',
            "Apellido"=>'Colcha',
            "Contacto"=>'0993649181',
            "Web"=>'https://github.com/Jose',
            "img"=>'https://img.freepik.com/vector-gratis/avatar-personaje-empresario-aislado_24877-60111.jpg?size=338&ext=jpg'
            ],

            ["Nombre"=>'Luis',
            "Apellido"=>'Jacome',
            "Contacto"=>'0997648193',
            "Web"=>'https://github.com/Luis',
            "img"=>'https://thumbs.dreamstime.com/b/persona-casual-del-retrato-masculino-del-avatar-del-icono-del-perfil-58249506.jpg'
            ],

            ["Nombre"=>'Marlon',
            "Apellido"=>'Tuquerres',
            "Contacto"=>'0997749003',
            "Web"=>'https://github.com/Marlon',
            "img"=>'https://thumbs.dreamstime.com/b/persona-casual-del-retrato-masculino-del-avatar-del-icono-del-perfil-58249394.jpg'
            ]
        ];

        return view('personal',compact('persons'));
    }
}
