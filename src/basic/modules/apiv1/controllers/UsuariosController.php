<?php

namespace app\modules\controllers;

use yii\rest\ActiveController;

/**
 * Default controller for the `apiv1` module
 */
class UsuariosController extends ActiveController
{
    public $modelClass = 'app\modules\apiv1\models\Usuarios';
}
