<?php

namespace frontend\models;

use common\models\Category;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "shelter".
 *
 * @property int $id
 * @property string|null $type
 * @property string $nik
 * @property int $age
 * @property int $created_at
 * @property int $updated_at
 */
class Shelter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shelter';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type'], 'string'],
            [['type', 'nik', 'age'], 'required'],
            [['age'], 'integer'],
            [['nik'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'nik' => 'Nik',
            'age' => 'Age',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
