<?php
/**
 * Created by PhpStorm.
 * User: User
 * Author: Joshua Saputra
 * Date: 4/12/2017
 * Time: 5:48 PM
 */

namespace api\modules\v1\controllers;


use yii\rest\ActiveController;

class CategoryController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Category';
}