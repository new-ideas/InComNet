<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \DB::table('users')->where('isAdmin','1')->value('id');

        \DB::table('categories')->insert([
            'user_id' => $user,
            'name' => 'Music',
            'alias' => 'music',
        ]);
        \DB::table('categories')->insert([
            'user_id' => $user,
            'name' => 'Photo',
            'alias' => 'photo',
        ]);
        \DB::table('categories')->insert([
            'user_id' => $user,
            'name' => 'Video',
            'alias' => 'video',
        ]);
        \DB::table('categories')->insert([
            'user_id' => $user,
            'name' => 'Books',
            'alias' => 'books',
        ]);
        \DB::table('categories')->insert([
            'user_id' => $user,
            'name' => 'Events',
            'alias' => 'events',
        ]);
        \DB::table('categories')->insert([
            'user_id' => $user,
            'name' => 'Merchandise',
            'alias' => 'merchandise',
        ]);

    }
}
