<?php

namespace api\modules\v1\models;

use api\common\models\AppModel;

/**
 * This is the model class for table "promoe_user".
 *
 * @property int $id
 * @property int $company_id
 * @property string $pu_username
 * @property string $pu_hashed_password
 * @property string $pu_status
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 *
 * @property Company $company
 */
class PromoeUser extends AppModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'promoe_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'pu_username', 'pu_hashed_password', 'pu_status'], 'required'],
            [['company_id', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['pu_status'], 'string'],
            [['pu_username'], 'string', 'max' => 50],
            [['pu_hashed_password'], 'string', 'max' => 100],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'id']],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'company_id']);
    }
}
