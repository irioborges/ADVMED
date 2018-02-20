<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anunciantes".
 *
 * @property int $ID
 * @property string $Nome
 * @property string $Endereco
 * @property string $Telefone
 */
class Anunciantes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anunciantes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nome', 'Endereco', 'Telefone'], 'required'],
            [['Nome', 'Endereco'], 'string', 'max' => 60],
            [['Telefone'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Nome' => 'Nome',
            'Endereco' => 'Endereco',
            'Telefone' => 'Telefone',
        ];
    }
}
