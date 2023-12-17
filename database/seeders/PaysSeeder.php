<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pays;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sql = File::get(database_path('pays.sql'));
        DB::unprepared($sql);

    }
}
