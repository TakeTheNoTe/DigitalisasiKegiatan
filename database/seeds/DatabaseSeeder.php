<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')
        ->insert([
        	'username' => 'admin',
        	'name' => 'admin',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('admin'),
        ]);
	}