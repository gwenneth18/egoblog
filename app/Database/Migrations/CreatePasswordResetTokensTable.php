<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePasswordResetTokensTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
          'email' => [
            'type' => 'VARCHAR',
            'constraint' => '255',  // Fixed typo: constraint not constrant
          ],
          'token' => [
            'type' => 'VARCHAR',
            'constraint' => '255',  // Fixed typo: constraint not constrant
          ],
          'created_at' => [
            'type' => 'TIMESTAMP',
            'default' => new \CodeIgniter\Database\RawSql('CURRENT_TIMESTAMP'),
          ]
        ]);
        $this->forge->createTable('password_reset_tokens');
    }

    public function down()
    {
        $this->forge->dropTable('password_reset_tokens');
    }
}