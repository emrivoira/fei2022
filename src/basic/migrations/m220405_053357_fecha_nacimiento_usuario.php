<?php

use yii\db\Migration;

/**
 * Class m220405_053357_fecha_nacimiento_usuario
 */
class m220405_053357_fecha_nacimiento_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('usuarios', 'nacimiento', $this->date());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('usuarios', 'nacimiento');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220405_053357_fecha_nacimiento_usuario cannot be reverted.\n";

        return false;
    }
    */
}
