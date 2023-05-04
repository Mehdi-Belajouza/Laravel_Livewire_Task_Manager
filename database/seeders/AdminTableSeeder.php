<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete existing data from the table
        DB::table('admins')->truncate();

        // Create a sample admin
        Admin::create([
            'name' => 'John Doe',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123456'),
        ]);

        // Create more admins using a factory (optional)
        \App\Models\Admin::factory()->count(10)->create();
    }
}
