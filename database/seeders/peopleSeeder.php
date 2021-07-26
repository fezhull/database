<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class peopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name' => 'john',
            'email' => 'john@gmail.com.',
            'address' => '13',
            
         ]);
         DB::table('people')->insert([
            'name' => 'ann',
            'email' => 'ann@gmail.com.',
            'address' => '18',
         ]);
 
         
         DB::table('people')->insert([
            'name' => 'vic',
            'email' => 'vic@gmail.com.',
            'address' => '16',
         ]);
         DB::table('people')->insert([
            'name' => 'mathhew',
            'email' => 'mathhew@gmail.com.',
            'address' => '10',
         ]);
 
         DB::table('people')->insert([
            'name' => 'evans',
            'email' => 'evans@gmail.com.',
            'address' => '11',
         ]);
    }
}
