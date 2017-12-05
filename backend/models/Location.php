<?php

namespace backend\models;

use api\common\models\AppModel;
use common\base\AppLabels;

/**
 * This is the model class for table "location".
 *
 * @property int $id
 * @property string $location_name
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 *
 * @property Promo[] $promos
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

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location_name' => AppLabels::LOCATION,
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPromos()
    {
        return $this->hasMany(Promo::className(), ['location_id' => 'id']);
    }
}
