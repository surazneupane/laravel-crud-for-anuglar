<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Hero;
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
        // \App\Models\User::factory(10)->create();
        Comment::create(
            [
                'author' => 'Suraj',
                'text' => 'Hi I am Suraj',
            ]
        );

        Comment::create(
            [
                'author' => 'Milan',
                'text' => 'Hi I am Milan',
            ]
        );

        Comment::create(
            [
                'author' => 'Dhiraj',
                'text' => 'Hi I am Dhiraj',
            ]
        );

        Comment::create(
            [
                'author' => 'Anup',
                'text' => 'Hi I am Anup',
            ]
        );
        Comment::create(
            [
                'author' => 'Gasi',
                'text' => 'Hi I am Gasi',
            ]
        );

        Hero::create(
            [
                'name'=>'Dhiraj',
            ]
        );

        Hero::create(
            [
                'name'=>'Dhiraj',
            ]
        );
        Hero::create(
            [
                'name'=>'Milan',
            ]
        );
        Hero::create(
            [
                'name'=>'Gasi',
            ]
        );
        Hero::create(
            [
                'name'=>'Anup',
            ]
        );
        Hero::create(
            [
                'name'=>'Suraj',
            ]
        );
    }
}
