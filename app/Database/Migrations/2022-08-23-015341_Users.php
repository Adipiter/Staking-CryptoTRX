<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
                'null' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => "200",
            ],
            'reffrence_link' => [
                'type' => 'INT',
                'constraint' => '100',
                'default' => '0'
            ],
            'created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
