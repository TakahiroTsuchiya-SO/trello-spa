<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            User::create([
                'name'           => 'test' .$i,
                'email'          => 'test' .$i .'@test.com',
                'password'       => Hash::make('12345678'),
                'remember_token' => str_random(3),
                'created_at'     => now(),
                'updated_at'     => now()
            ]);
        }
    }
}
