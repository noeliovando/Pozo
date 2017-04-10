<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "desviacion".
 *
 * @property string $uwi
 * @property string $md
 * @property string $tvd
 * @property string $desviation
 * @property string $azimuth
 * @property string $dx
 * @property string $dy
 */
class Desviacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'desviacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uwi', 'md', 'tvd', 'desviation', 'azimuth', 'dx', 'dy'], 'required'],
            [['uwi'], 'string', 'max' => 16],
            [['md', 'tvd', 'desviation', 'azimuth', 'dx', 'dy'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uwi' => 'UWI',
            'md' => 'MD',
            'tvd' => 'TVD',
            'desviation' => 'Desviation',
            'azimuth' => 'Azimuth',
            'dx' => 'Dx',
            'dy' => 'Dy',
        ];
    }
}
