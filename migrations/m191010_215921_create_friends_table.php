<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%friends}}`.
 */
class m191010_215921_create_friends_table extends Migration
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
        
        $this->createTable('{{friends}}', [
            'id'            => $this->primaryKey(),
            'name'          => $this->string(50)->notNull()->unique(),
            'url'           => $this->string(200)->notNull()->unique(),
            'image'         => $this->string(20),
            'created_by'    => $this->integer()->notNull(),
            'created_at'    => $this->dateTime()->notNull(),
            'updated_by'    => $this->integer()->notNull(),
            'updated_at'    => $this->dateTime()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey(
            'usercreatefriend', 'friends', 'created_by', 'users', 'id', 'no action', 'no action'
        );
        
        $this->addForeignKey(
            'userupdatefriend', 'friends', 'updated_by', 'users', 'id', 'no action', 'no action'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('usercreatefriend', 'friend');
        $this->dropForeignKey('userupdatefriend', 'friend');
        $this->dropTable('{{%friends}}');
    }
}
