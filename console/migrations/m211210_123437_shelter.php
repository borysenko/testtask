<?php

use yii\db\Migration;

/**
 * Class m211210_123437_shelter
 */
class m211210_123437_shelter extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shelter}}', [
            'id' => $this->primaryKey(),
            'type' => 'ENUM("Кошки", "Собаки", "Черепахи")',
            'nik' => $this->string(255)->notNull(),
            'age' => $this->integer(3)->notNull(),
            'status' => $this->integer(1)->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%shelter}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211210_123437_shelter cannot be reverted.\n";

        return false;
    }
    */
}
