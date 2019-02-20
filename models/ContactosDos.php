<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contactos_dos".
 *
 * @property integer $id_contactos_dos
 * @property integer $numero
 * @property integer $numero_2
 * @property integer $numero_3
 * @property string $nombre
 * @property string $correo
 * @property string $empresa
 * @property string $descripcion
 */
class ContactosDos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contactos_dos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero', 'nombre'], 'required'],
            [['numero', 'numero_2', 'numero_3'], 'integer'],
            [['nombre', 'empresa', 'descripcion'], 'string', 'max' => 255],
            [['correo'], 'string', 'max' => 128],
            [['correo'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_contactos_dos' => 'ID',
            'numero' => 'Número 1',
            'numero_2' => 'Número 2',
            'numero_3' => 'Número 3',
            'nombre' => 'Nombre',
            'correo' => 'Correo',
            'empresa' => 'Empresa',
            'descripcion' => 'Descripción',
        ];
    }
}
