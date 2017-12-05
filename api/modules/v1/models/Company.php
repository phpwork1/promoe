<?php

namespace api\modules\v1\models;

use api\common\models\AppModel;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $company_name
 * @property string $company_address
 * @property string $company_email
 * @property string $company_website
 * @property string $company_contact_no
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 *
 * @property Promo[] $promos
 * @property PromoeUser[] $promoeUsers
 */
class Company extends AppModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name', 'company_address', 'company_email', 'company_website', 'company_contact_no'], 'required'],
            [['company_address'], 'string'],
            [['company_name'], 'string', 'max' => 100],
            [['company_email', 'company_website', 'company_contact_no'], 'string', 'max' => 50],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPromos()
    {
        return $this->hasMany(Promo::className(), ['company_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPromoeUsers()
    {
        return $this->hasMany(PromoeUser::className(), ['company_id' => 'id']);
    }
}
