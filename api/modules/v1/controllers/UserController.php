<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\User';
}
