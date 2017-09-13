<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$posts = factory(App\Post::class, 50)
           ->create();*/

        factory(App\User::class, 10)->create()->each(function ($u) {
            $u->post()->save(factory(App\Post::class)->make());
        });
    }
}
