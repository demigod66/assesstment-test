<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'pemimpin',
                'username' => 'pemimpin',
                'email'    => 'pemimpin@pemimpin.com',
                'password' => password_hash('12345678', PASSWORD_BCRYPT),
                'role' => '1',
                'phone_no' => '1234567898',
            ], [
                'name' => 'bendahara',
                'username' => 'bendahara',
                'email'    => 'bendahara@bendahara.com',
                'password' => password_hash('12345678', PASSWORD_BCRYPT),
                'role' => '2',
                'phone_no' => '1234567898',
            ], [

                'name' => 'mahasiswa',
                'username' => 'mahasiswa',
                'email'    => 'mahasiswa@mahasiswa.com',
                'password' => password_hash('12345678', PASSWORD_BCRYPT),
                'role' => '3',
                'phone_no' => '1234567898',
            ]

        ];

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}
