<?php

use App\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Zizaco\Entrust\Traits\EntrustUserTrait;
class UserTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('roles')->delete();

        DB::table('roles')->insert([
            'name' => 'super_admin',
            'display_name' => 'Supper Admin',
            'description' => 'Supper admin account',
        ]);

        DB::table('roles')->insert([
            'name' => 'moderator',
            'display_name' => 'System Moderator',
            'description' => 'Moderator account',
        ]);

        DB::table('roles')->insert([
            'name' => 'expert',
            'display_name' => 'Expert',
            'description' => 'Expert account',
        ]);

        DB::table('roles')->insert([
            'name' => 'buyer',
            'display_name' => 'Buyer',
            'description' => 'Buyer account',
        ]);


        DB::table('users')->insert([
            'name' => 'Supper Adamin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'status' => 1
        ]);

        $user = DB::table('users')->where('username', 'admin')->value('id');
        $role = DB::table('roles')->where('name', 'super_admin')->value('id');

        DB::table('role_user')->insert([
            'user_id' => $user,
            'role_id' => $role,
        ]);
    }
}
