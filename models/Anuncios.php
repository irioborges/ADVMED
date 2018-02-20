<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anuncios".
 *
 * @property int $ID
 * @property string $Descricao
 * @property int $Ativo
 * @property int $ID_anunciante
 */
class Anuncios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anuncios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Descricao', 'Ativo', 'ID_anunciante'], 'required'],
            [['Descricao'], 'string'],
            [['ID_anunciante'], 'integer'],
            [['Ativo'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Descricao' => 'Descricao',
            'Ativo' => 'Ativo',
            'ID_anunciante' => 'Id Anunciante',
        ];
    }
}
