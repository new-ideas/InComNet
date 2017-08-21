<?php

use Illuminate\Database\Seeder;

class InsertUserDemoData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'expert',
            'email' => 'theasad@expert.com',
            'username' => 'theasad',
            'password' => bcrypt('123456'),
            'status' => 1
        ]);

        $user = DB::table('users')->where('username', 'theasad')->value('id');
        $role = DB::table('roles')->where('name', 'expert')->value('id');

        DB::table('role_user')->insert([
            'user_id' => $user,
            'role_id' => $role,
        ]);
    }
}
