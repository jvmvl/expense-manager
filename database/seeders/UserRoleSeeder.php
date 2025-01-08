<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_roles')->insert([
            ['name' => 'Admin', 'description' => 'Full access to the system', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Editor', 'description' => 'Can edit content', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Viewer', 'description' => 'Can view content', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
