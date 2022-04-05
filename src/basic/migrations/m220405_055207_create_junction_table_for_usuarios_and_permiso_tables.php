<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%usuarios_permiso}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%usuarios}}`
 * - `{{%permiso}}`
 */
class m220405_055207_create_junction_table_for_usuarios_and_permiso_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%usuarios_permiso}}', [
            'usuarios_id' => $this->integer(),
            'permiso_id' => $this->integer(),
            'PRIMARY KEY(usuarios_id, permiso_id)',
        ]);

        // creates index for column `usuarios_id`
        $this->createIndex(
            '{{%idx-usuarios_permiso-usuarios_id}}',
            '{{%usuarios_permiso}}',
            'usuarios_id'
        );

        // add foreign key for table `{{%usuarios}}`
        $this->addForeignKey(
            '{{%fk-usuarios_permiso-usuarios_id}}',
            '{{%usuarios_permiso}}',
            'usuarios_id',
            '{{%usuarios}}',
            'id',
            'CASCADE'
        );

        // creates index for column `permiso_id`
        $this->createIndex(
            '{{%idx-usuarios_permiso-permiso_id}}',
            '{{%usuarios_permiso}}',
            'permiso_id'
        );

        // add foreign key for table `{{%permiso}}`
        $this->addForeignKey(
            '{{%fk-usuarios_permiso-permiso_id}}',
            '{{%usuarios_permiso}}',
            'permiso_id',
            '{{%permiso}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%usuarios}}`
        $this->dropForeignKey(
            '{{%fk-usuarios_permiso-usuarios_id}}',
            '{{%usuarios_permiso}}'
        );

        // drops index for column `usuarios_id`
        $this->dropIndex(
            '{{%idx-usuarios_permiso-usuarios_id}}',
            '{{%usuarios_permiso}}'
        );

        // drops foreign key for table `{{%permiso}}`
        $this->dropForeignKey(
            '{{%fk-usuarios_permiso-permiso_id}}',
            '{{%usuarios_permiso}}'
        );

        // drops index for column `permiso_id`
        $this->dropIndex(
            '{{%idx-usuarios_permiso-permiso_id}}',
            '{{%usuarios_permiso}}'
        );

        $this->dropTable('{{%usuarios_permiso}}');
    }
}
