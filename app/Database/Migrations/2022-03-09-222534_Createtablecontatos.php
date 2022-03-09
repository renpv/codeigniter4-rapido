<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createtablecontatos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id',
            'name' => [
                'type' => 'varchar',
                'constraint' => 80
            ],
            'phone' => [
                'type' => 'varchar',
                'constraint' => 80
            ]
        ]);
        $this->forge->createTable('contatos');
    }

    public function down()
    {
        $this->forge->dropTable('contatos');
    }
}
