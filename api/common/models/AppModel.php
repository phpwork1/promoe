<?php
/**
 * Created by PhpStorm.
 * User: User
 * Author: Joshua Saputra
 * Date: 4/12/2017
 * Time: 1:45 PM
 */

namespace api\common\models;

use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use common\base\AppConstants;
use Yii;

class AppModel extends \yii\db\ActiveRecord
{
    public function behaviors() {
        return [
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by'
            ],
            TimestampBehavior::className(),
        ];
    }

    public function delete() {

        try {
            return parent::delete();
        } catch (\Exception $ex) {
            Yii::$app->session->addFlash('danger', $ex->getMessage());
            Yii::$app->session->addFlash('danger', AppConstants::ERR_INTEGRITY_CONSTRAINT_VIOLATION);
            return false;
        }
    }
}