<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              $param = [
            'id' => '4',
            'name' =>'nara',
            'email'=>'tamosan@gmail.com',
            'password'=>'aa1234',
            
            ];

         DB::table('users')->insert($param);
         $param = [
            'id' => '6',
            'name' =>'osaka',
            'email'=>'rakusan@gmail.com',
            'password'=>'aa0987',
            
         ];
        DB::table('users')->insert($param);
        

    }
}
