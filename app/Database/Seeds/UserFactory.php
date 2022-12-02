<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker;


class UserFactory extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'username' => static::faker()->username,
                'name' => static::faker()->name,
                'email'    => static::faker()->email,
                'password' => static::faker()->password,
                'role'    => 3,
                'phone_no' => 213123123123,
            ];
            $this->db->table('users')->insert($data);
        }
    }
}
