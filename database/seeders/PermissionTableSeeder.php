<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',

           'user-list',
           'user-create',
           'user-edit',
           'user-delete',

           'member-list',
           'member-create',
           'member-edit',
           'member-delete',

           'post-list',
           'post-create',
           'post-edit',
           'post-delete',

           'medias-list',
           'medias-create',
           'medias-edit',
           'medias-delete',

           'category-list',
           'category-create',
           'category-edit',
           'category-delete',

           'communes-list',
           'communes-create',
           'communes-edit',
           'communes-delete',

           'regions-list',
           'regions-create',
           'regions-edit',
           'regions-delete',

           'religions-list',
           'religions-create',
           'religions-edit',
           'religions-delete',

           'projets-list',
           'projets-create',
           'projets-edit',
           'projets-delete',

           'depenses-list',
           'depenses-create',
           'depenses-edit',
           'depenses-delete',

           'cotisations-list',
           'cotisations-create',
           'cotisations-edit',
           'cotisations-delete',

           'cotisInwait-list',
           'cotisInwait-create',
           'cotisInwait-edit',
           'cotisInwait-delete',

           'EnregistrementTitle-list',
           'GestCompteTitle-list',
           'GestProjetTitle-list',
           'PublicationsTitle-list',
           'ParamètreTitle-list',
           'GestArticleTitle-list',
           'editeur-read'

        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
