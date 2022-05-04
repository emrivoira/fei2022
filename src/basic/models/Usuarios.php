<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string $username
 * @property string|null $nombre
 * @property string|null $apellido
 * @property int|null $edad
 * @property string|null $nacimiento
 *
 * @property Permiso[] $permisos
 * @property UsuariosPermiso[] $usuariosPermisos
 */
class Usuarios extends \yii\db\ActiveRecord
{
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['nombre', 'apellido'], 'string'],
            [['edad'], 'integer'],
            [['nacimiento'], 'safe'],
            [['username'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'edad' => 'Edad',
            'nacimiento' => 'Nacimiento',
        ];
    }

    /**
     * Gets query for [[Permisos]].
     *
     * @return \yii\db\ActiveQuery|PermisoQuery
     */
    public function getPermisos()
    {
        return $this->hasMany(Permiso::className(), ['id' => 'permiso_id'])->viaTable('usuarios_permiso', ['usuarios_id' => 'id']);
    }

    /**
     * Gets query for [[UsuariosPermisos]].
     *
     * @return \yii\db\ActiveQuery|UsuariosPermisoQuery
     */
    public function getUsuariosPermisos()
    {
        return $this->hasMany(UsuariosPermiso::className(), ['usuarios_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return UsuariosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsuariosQuery(get_called_class());
    }
}
