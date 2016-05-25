<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test_case_affiliated".
 *
 * @property integer $tca_id
 * @property string $case_id
 * @property string $type
 * @property string $label
 * @property integer $delete
 * @property integer $created_at
 * @property integer $updated_at
 */
class TestCaseAffiliated extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test_case_affiliated';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['case_id','created_at', 'updated_at'], 'required'],
            [['delete', 'created_at', 'updated_at'], 'integer'],
            [['case_id',  'label'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tca_id' => 'Tca ID',
            'case_id' => 'Case ID',
            'label' => 'Label',
            'delete' => 'Delete',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
