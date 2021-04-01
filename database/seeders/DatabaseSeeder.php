<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@kelana.co.id',
                'is_admin' => '1',
                'password' => bcrypt('admin432'),

            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
