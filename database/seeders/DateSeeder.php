<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datacount = 1; //日付カウントの変数
        $monthcount = 1; //月カウントの変数

        for($i = 0; $i < 12; $i++) {
            for($n = 0; $n < 30; $n++){ 
                $param = [
                    'date' => $datacount,
                    'month' => $monthcount,
                    'age' => '2020',
                ];
                DB::table('dates')->insert($param);
                if($datacount < 30){
                    $datacount++;
                } else {
                    $datacount = 1;
                }  
            }
            $monthcount++;
        }
    }
}
