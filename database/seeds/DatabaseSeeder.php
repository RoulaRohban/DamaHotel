<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('booking_options')->insert([
            'name' => 'Single Room',
            'price' => '10000',
        ]);

        DB::table('booking_options')->insert([
            'name' => 'Single Room With View',
            'price' => '15000',
        ]);

        DB::table('booking_options')->insert([
            'name' => 'Deluxe Room',
            'price' => '20000',
        ]);

        DB::table('booking_options')->insert([
            'name' => 'Sweet',
            'price' => '30000',
        ]);
    }
}
