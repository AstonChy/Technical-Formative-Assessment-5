<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '0917 555 0101', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@example.com', 'phone' => '0918 555 0102', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Angela Reyes', 'email' => 'angela.reyes@example.com', 'phone' => '0919 555 0103', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Miguel Garcia', 'email' => 'miguel.garcia@example.com', 'phone' => '0920 555 0104', 'status' => 'Inactive', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sofia Bautista', 'email' => 'sofia.bautista@example.com', 'phone' => '0921 555 0105', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('users')->insert([
            ['name' => 'Ashton Chy', 'email' => 'ashton.chy@example.com', 'role' => 'Administrator', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rainier Espino', 'email' => 'rainier.espino@example.com', 'role' => 'Cashier', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jared Mangaoang', 'email' => 'jared.mangaoang@example.com', 'role' => 'Cashier', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rashid Adlus', 'email' => 'rashid.adlus@example.com', 'role' => 'Manager', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chloe Navarro', 'email' => 'chloe.navarro@example.com', 'role' => 'Inventory Clerk', 'status' => 'Inactive', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
