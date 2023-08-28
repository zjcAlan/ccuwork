<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Account extends Migration
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
            'permission' => [//使用者權限，0是最高管理者，1是後臺管理者，2是一般使用者
                'type' => 'INT',
                'constraint' => 1,
                'unsigned' => True,
                'null' => True,
                'auto_increment' => False
            ],
            'name' => [//中文名字
                'type' => 'VARCHAR',
                'constraint' => 8,
                'null' => True
            ],
            'email' => [//信箱
                'type' => 'VARCHAR',
                'constraint' => 35,
                'null' => False
            ],
            'identity_number' => [//身分證字號
                'type' => 'CHAR',
                'constraint' => 10,//固定長度為10
                'null' => False
            ],
            'phone' => [//手機號碼
                'type' => 'CHAR',
                'constraint' => 10,//固定長度為10
                'null' => False
            ],
            'address' => [//地址
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => True
            ],
            'password' => [//密碼
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => True
            ],

        ]);

        $this->forge->addKey('id', True);
        $this->forge->createTable('accounts');//table名字叫accounts
    }

    public function down()
    {
        $this->forge->dropTable('accounts');//table名字叫accounts
    }
}
