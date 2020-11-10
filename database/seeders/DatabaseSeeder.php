<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = env('USER_NAME');
        $user->email = env('USER_EMAIL');
        $user->password = bcrypt(env('USER_PASSWORD'));
        $user->save();
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CommentSeeder::class);

    }
}
