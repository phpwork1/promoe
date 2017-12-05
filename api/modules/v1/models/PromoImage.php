<?php

namespace api\modules\v1\models;

use api\common\models\AppModel;

/**
 * This is the model class for table "promo_image".
 *
 * @property int $id
 * @property int $promo_id
 * @property string $pi_image
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 *
 * @property Promo $promo
 */
class PromoImage extends AppModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'promo_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['promo_id', 'pi_image'], 'required'],
            [['promo_id'], 'integer'],
            [['pi_image'], 'string', 'max' => 200],
            [['promo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Promo::className(), 'targetAttribute' => ['promo_id' => 'id']],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPromo()
    {
        return $this->hasOne(Promo::className(), ['id' => 'promo_id']);
    }
}
