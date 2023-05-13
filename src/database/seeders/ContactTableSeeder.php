<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'name' => "テスト太郎",
          'email' => "test@example.com",
          'tel' => "09012345678",
        ];
        DB::table('contacts')->insert($param);
    }
}
