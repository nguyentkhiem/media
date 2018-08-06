<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        		'user_name'=>'admin',
        		'email'=>'admin@gmail.com',
        		'password'=>bcrypt('123456'),
        	],
        	[
        		'user_name'=>'nguyentkhiem96',
        		'email'=>'nguyentkhiem96@gmail.com',
        		'password'=>bcrypt('123456'),
        	],
        	[
        		'user_name'=>'nguyenvana',
        		'email'=>'nguyenvana@gmail.com',
        		'password'=>bcrypt('123456'),
        	],
        ];

        DB::table('vp_users')->insert($data);
    }
}
