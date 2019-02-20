<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telefono".
 *
 * @property integer $id_telefono
 * @property string $numero
 * @property string $piso
 * @property integer $direccion_id
 * @property integer $cargo_id
 * @property string $descripcion
 *
 * @property Cargo $cargo
 * @property Direccion $direccion
 */
class Telefono extends \yii\db\ActiveRecord
{

    public static $pisos = array('1' => 'Piso 1', '2' => 'Piso 2', '3' => 'Piso 3', '4' => 'Piso 4', '5' => 'Piso 5', '6' => 'Piso 6', '7' => 'Piso 7', '8' => 'Piso 8', '9' => 'Piso 9');

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'telefono';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero'], 'required'],
            [['direccion_id', 'cargo_id'], 'integer'],
            [['numero'], 'string', 'max' => 8],
            [['piso'], 'string', 'max' => 1],
            [['descripcion'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_telefono' => 'Id Teléfono',
            'numero' => 'Número',
            'piso' => 'Piso',
            'direccion_id' => 'Dirección',
            'cargo_id' => 'Cargo',
            'descripcion' => 'Descripción',
            'globalSearch' => 'Búsqueda Global'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCargo()
    {
        return $this->hasOne(Cargo::className(), ['id_cargo' => 'cargo_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDireccion()
    {
        return $this->hasOne(Direccion::className(), ['id_direccion' => 'direccion_id']);
    }


    public static function getPisos($key=null){
        if($key!==null)
            return self::$pisos[$key];
        return self::$pisos;
    }
}
