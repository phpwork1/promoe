<?php

namespace api\modules\v1\models;

use api\common\models\AppModel;
use

/**
 * This is the model class for table "location".
 *
 * @property int $id
 * @property string $location_name
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 */
class Location extends AppModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['location_name'], 'required'],
            [['location_name'], 'string', 'max' => 100],
        ];
    }

    public function fields()
    {
        $fields = parent::fields();

        // remove fields that contain sensitive information
        unset($fields['created_by'], $fields['created_at'], $fields['updated_by'], $fields['updated_at']);

        return $fields;
    }
}
