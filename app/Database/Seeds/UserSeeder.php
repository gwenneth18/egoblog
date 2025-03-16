<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            'name' => 'Admin',
            'email' => 'kimmykim2509@gmail.com',
            'username' => 'admin',
            'password' => password_hash('12345', PASSWORD_BCRYPT), // Fixed comma and correct PASSWORD_BCRYPT usage
        );

        // Insert the data into the users table
        $this->db->table('users')->insert($data);
    }
}