<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'age' => '2018',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'age' => '2019',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'age' => '2020',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'age' => '2021',
        ];
        DB::table('ages')->insert($param);
    }
}
