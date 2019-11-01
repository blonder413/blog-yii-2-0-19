<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%messages}}`.
 */
class m191010_220026_create_messages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }
        
        $this->createTable('{{messages}}', [
            'id'            => $this->primaryKey(),
            'name'          => $this->string(100)->notNull(),
            'email'         => $this->string(100)->notNull(),
            'message'       => $this->text()->notNull(),
            'date'          => $this->dateTime()->notNull(),
            'client_ip'     => $this->string(15),
            'client_port'   => $this->string(5),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%messages}}');
    }
}
