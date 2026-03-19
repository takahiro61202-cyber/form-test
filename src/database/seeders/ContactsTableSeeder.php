<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              $param = [
                'id' => '001',
                'category_id' => '001',
                'first_name' => 'kani',
                'last_name' => 'buri',
                'gender' => '1',
                'email' => 'kaisen@gmail.com',
                'tel' => '000-000-000',
                'address' => 'sakanacho',
                'building' => 'uminotatemono',
                'detail' => 'kaninohuku'

        ];
         DB::table('contacts')->insert($param);
         $param = [
                'id' => '002',
                'category_id' => '002',
                'first_name' => 'ebi',
                'last_name' => 'sake',
                'gender' => '2',
                'email' => 'koukaku@gmail.com',
                'tel' => '000-000-002',
                'address' => 'sakanacho',
                'building' => 'ebinoie',
                'detail' => 'ebinohuku'
         ];
         DB::table('contacts')->insert($param);
    }
}
