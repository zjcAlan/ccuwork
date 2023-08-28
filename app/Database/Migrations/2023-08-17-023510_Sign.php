<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sign extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsign' => True,
                'auto_increment' => True
            ],
            'school' => [
                'type' => 'VARCHAR',
                'contrait' => '10',
                'null' => True
            ],
            'department' => [
                'type' => 'VARCHAR',
                'contrait' => '10',
                'null' => True
            ],
            'firstschool' => [
                'type' => 'VARCHAR',
                'contrait' => '20',
                'null' => True
            ],
            'firstdepartment' => [
                'type' => 'VARCHAR',
                'contrait' => '20',
                'null' => True
            ],
            'secondschool' => [
                'type' => 'VARCHAR',
                'contrait' => '20',
                'null' => True
            ],
            'seconddepartment' => [
                'type' => 'VARCHAR',
                'contrait' => '20',
                'null' => True
            ],
            'thirdschool' => [
                'type' => 'VARCHAR',
                'contrait' => '20',
                'null' => True
            ],
            'thirddepartment' => [
                'type' => 'VARCHAR',
                'contrait' => '20',
                'null' => True
            ]
            ]);
            $this->forge->addKey('id', True);
            $this->forge->createTable('sign'); //table name
    }

    public function down()
    {
        $this->forge->dropTable('sign'); //table name
    }
}
