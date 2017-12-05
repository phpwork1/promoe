<?php

namespace api\modules\v1\models;

use api\common\models\AppModel;

/**
 * This is the model class for table "promo".
 *
 * @property int $id
 * @property int $company_id
 * @property int $category_id
 * @property int $location_id
 * @property string $promo_title
 * @property string $promo_subtitle
 * @property string $promo_desc
 * @property string $promo_status
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 *
 * @property Category $category
 * @property Company $company
 * @property Location $location
 * @property PromoImage[] $promoImages
 */
class Promo extends AppModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'promo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'category_id', 'location_id', 'promo_title', 'promo_subtitle', 'promo_desc', 'promo_status'], 'required'],
            [['company_id', 'category_id', 'location_id'], 'integer'],
            [['promo_desc', 'promo_status'], 'string'],
            [['promo_title', 'promo_subtitle'], 'string', 'max' => 70],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'id']],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPromoImages()
    {
        return $this->hasMany(PromoImage::className(), ['promo_id' => 'id']);
    }
}
