<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    protected $model = User::class;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();
    }
}
