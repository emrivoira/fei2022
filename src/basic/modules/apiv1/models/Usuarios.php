<?php

namespace app\modules\apiv1\models;

class Usuarios extends \app\models\Usuarios
{
    public function fields()
    {
        return ['id', 'nombre', 'apellido', 'edad'];
    }
}