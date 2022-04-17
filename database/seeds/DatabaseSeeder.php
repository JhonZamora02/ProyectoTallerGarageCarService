<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@gcs.com.co';
        $user->password = 'admin';
        $user->role = 'admin';

        $user->save();
    }

}
