<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('authors')->insert([
            'name'=> Str::random(12), //sugeneruos teksta 12 simboliu
            'surname'=> Str::random(15), //sugeneruos teksta 15 simboliu
            'username'=> Str::random(17), //sugeneruos teksta 17 simboliu
        ]);


    }
}
