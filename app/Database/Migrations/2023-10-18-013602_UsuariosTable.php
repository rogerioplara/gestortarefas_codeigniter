<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsuariosTable extends Migration
{
    // Método que vai ser executado quando a quiser que a estrutura seja adicionada a base de dados
    public function up()
    {
        // columns - forge já está disponível no codeigniter
        // seu conteúdo diz respeito a cada uma das colunas da tabela, dentro de cada coluna suas características
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'senha' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        // primary key
        $this->forge->addPrimaryKey('id');

        // create table
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        // delete table
        $this->forge->dropTable('usuarios');
    }
}
