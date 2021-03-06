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
        DB::table('users')->insert([
        	[
            'username' => 'admin1',
            'password' => bcrypt('12345'),
            'level'=>1,
            'created_at'=>new DateTime(),
        	],
        	[
            'username' => 'admin2',
            'password' => bcrypt('12345'),
            'level'=>2,
            'created_at'=>new DateTime(),
        	],
        	[
            'username' => 'admin3',
            'password' => bcrypt('12345'),
            'level'=>1,
            'created_at'=>new DateTime(),
        	],
        	[
            'username' => 'admin4',
            'password' => bcrypt('12345'),
            'level'=>2,
            'created_at'=>new DateTime(),
        	],
        	[
            'username' => 'admin5',
            'password' => bcrypt('12345'),
            'level'=>1,
            'created_at'=>new DateTime(),
        	]
        	
        ]);
    }
}
