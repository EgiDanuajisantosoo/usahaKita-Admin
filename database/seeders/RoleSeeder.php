<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            ['jenis_role' => 'Admin'],
            ['jenis_role' => 'Bisnisman'],
            ['jenis_role' => 'Bisnis Partner'],
        ]);
    }
}
