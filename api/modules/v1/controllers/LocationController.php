<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * LocationController implements the CRUD actions for Location model.
 */
class LocationController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Location';
}
