<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'Admin',
            'eglise_id' => '1',
            'phone' => '0102030405',
            'status' => '1',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('01@pwd#24shofar'),
        ]);
    
        $role = Role::create(['name' => 'Admin']);
        $abonnes = Role::create(['name' => 'Abonnés']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}
