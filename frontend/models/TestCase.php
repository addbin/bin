<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
//use frontend\models\User;
/**
 * This is the model class for table "test_case".
 *
 * @property integer $case_id
 * @property string $id_case
 * @property string $route
 * @property string $key
 * @property string $value
 * @property string $label
 * @property string $success_label
 * @property string $trigger
 * @property integer $type
 * @property integer $delete
 * @property integer $created_at
 * @property integer $updated_at
 */
class TestCase extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test_case';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_case','key', 'value', 'created_at', 'updated_at'], 'required'],
            [[ 'delete', 'created_at', 'updated_at'], 'integer'],
            [['id_case', 'route', 'key', 'value', 'label', 'trigger','illustration'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'case_id' => 'Case ID',
            'id_case' => 'Id Case',
            'illustration' => 'Illustration',
            'route' => 'Route',
            'key' => 'Key',
            'value' => 'Value',
            'label' => 'Label',
            'trigger' => 'Trigger',
            'delete' => 'Delete',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
