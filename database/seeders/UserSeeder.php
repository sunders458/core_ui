<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partener=User::create([
            'name' => 'Partenaire 1',
            'eglise_id' => '0',
            'phone' => '0702030405',
            'status' => '1',
            'email' => 'partenaire@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
