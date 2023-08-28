<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Announcement extends Migration
{

    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => True,
                'auto_increment' => True
            ],

            'headtitle'=>[
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => True
            ],

            'subtitle'=>[
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => True
            ],

            'theme'=>[
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => True
            ],

            'content'=>[
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => True
            ],

            'create_date' =>[
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => True
            ],

            'start_date' =>[
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => True
            ],

            'end_date' =>[
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => True
            ],

            'pdf_path' =>[
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => True
            ]

            ]);
            $this->forge->addKey('id', True);
            $this->forge->createTable('announcements');
    }

    public function down()
    {
        //
    }
}
