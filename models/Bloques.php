<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bloques".
 *
 * @property integer $id_bloque
 * @property string $bloque
 * @property string $yacimiento
 * @property string $campo
 * @property string $zona_supervisoria
 * @property string $unidad_explotacion
 * @property string $distrito
 */
class Bloques extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bloques';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bloque', 'yacimiento', 'campo', 'zona_supervisoria', 'unidad_explotacion', 'distrito'], 'required'],
            [['yacimiento', 'campo', 'zona_supervisoria', 'unidad_explotacion', 'distrito'], 'string'],
            [['bloque'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_bloque' => 'Id Bloque',
            'bloque' => 'Bloque',
            'yacimiento' => 'Yacimiento',
            'campo' => 'Campo',
            'zona_supervisoria' => 'Zona Supervisoria',
            'unidad_explotacion' => 'Unidad Explotacion',
            'distrito' => 'Distrito',
        ];
    }
}
