<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class, 29)->create();
        App\User::create([
            'name' => 'Samuel R.',
            'email' => 'samuel@gmail.com',
            'password' => Hash::make('demo'), // secret
            // 'remember_token' => str_random(10),
        ]);
    }
}
