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

        function insert($datacount, $monthcount) {
            $param = [
                'date' => $datacount,
                'month' => $monthcount,
                'age' => '2020',
            ];
            DB::table('dates')->insert($param);
        }

        for($i = 0; $i < 12; $i++) {
            if($monthcount == 1 || $monthcount == 3 || $monthcount == 5 || $monthcount == 7 || $monthcount == 8 || $monthcount == 10 ||  $monthcount ==12) {
                for($n = 0; $n < 31; $n++){ 
                    insert($datacount, $monthcount);
                        if($datacount < 31){
                            $datacount++;
                        } else {
                            $datacount = 1;
                        }
                }          
            } elseif ($monthcount == 4 || $monthcount == 6 || $monthcount == 9 ||$monthcount ==  11) {
                for($n = 0; $n < 30; $n++){ 
                    insert($datacount, $monthcount);
                    if($datacount < 30){
                        $datacount++;
                    } else {
                        $datacount = 1;
                    }  
                }
            } elseif($monthcount == 2) {
                for($n = 0; $n < 29; $n++){
                    insert($datacount, $monthcount);
                    if($datacount < 29){
                        $datacount++;
                    } else {
                        $datacount = 1;
                    }  
                }
            }
            $monthcount++;
        }

        
    }
    
}