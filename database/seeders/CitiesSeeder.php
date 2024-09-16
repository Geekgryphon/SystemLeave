<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('Cities')->truncate();

        $cities = [
            ['PostalCode' => '','Name' => '基隆市', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '','Name' => '台北市', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '','Name' => '新北市', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '','Name' => '桃園市', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '','Name' => '新竹市', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '','Name' => '新竹縣', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '','Name' => '苗栗縣', 'Seq' => 7, 'Used' => 1],
            ['PostalCode' => '','Name' => '台中市', 'Seq' => 8, 'Used' => 1],
            ['PostalCode' => '','Name' => '彰化縣', 'Seq' => 9, 'Used' => 1],
            ['PostalCode' => '','Name' => '南投縣', 'Seq' => 10, 'Used' => 1],
            ['PostalCode' => '','Name' => '雲林縣', 'Seq' => 11, 'Used' => 1],
            ['PostalCode' => '','Name' => '嘉義市', 'Seq' => 12, 'Used' => 1],
            ['PostalCode' => '','Name' => '嘉義縣', 'Seq' => 13, 'Used' => 1],
            ['PostalCode' => '','Name' => '台南市', 'Seq' => 14, 'Used' => 1],
            ['PostalCode' => '','Name' => '高雄市', 'Seq' => 15, 'Used' => 1],
            ['PostalCode' => '','Name' => '屏東縣', 'Seq' => 16, 'Used' => 1],
            ['PostalCode' => '','Name' => '宜蘭縣', 'Seq' => 17, 'Used' => 1],
            ['PostalCode' => '','Name' => '花蓮縣', 'Seq' => 18, 'Used' => 1],
            ['PostalCode' => '','Name' => '台東縣', 'Seq' => 19, 'Used' => 1],
            ['PostalCode' => '','Name' => '澎湖縣', 'Seq' => 20, 'Used' => 1],
            ['PostalCode' => '','Name' => '金門縣', 'Seq' => 21, 'Used' => 1],
            ['PostalCode' => '','Name' => '連江縣', 'Seq' => 22, 'Used' => 1]
        ];

        DB::table('Cities')->insert($cities);

        DB::table('CityArea')->truncate();

        $cityarea = [
            ['PostalCode' => '200', 'CityID' => '1', 'Name' => '仁愛區', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '201', 'CityID' => '1', 'Name' => '信義區', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '202', 'CityID' => '1', 'Name' => '中正區', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '203', 'CityID' => '1', 'Name' => '中山區', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '204', 'CityID' => '1', 'Name' => '安樂區', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '205', 'CityID' => '1', 'Name' => '暖暖區', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '206', 'CityID' => '1', 'Name' => '七堵區', 'Seq' => 7, 'Used' => 1],
            ['PostalCode' => '100', 'CityID' => '2', 'Name' => '中正區', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '103', 'CityID' => '2', 'Name' => '大同區', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '104', 'CityID' => '2', 'Name' => '中山區', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '105', 'CityID' => '2', 'Name' => '松山區', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '106', 'CityID' => '2', 'Name' => '大安區', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '108', 'CityID' => '2', 'Name' => '萬華區', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '110', 'CityID' => '2', 'Name' => '信義區', 'Seq' => 7, 'Used' => 1],
            ['PostalCode' => '111', 'CityID' => '2', 'Name' => '士林區', 'Seq' => 8, 'Used' => 1],
            ['PostalCode' => '112', 'CityID' => '2', 'Name' => '北投區', 'Seq' => 9, 'Used' => 1],
            ['PostalCode' => '114', 'CityID' => '2', 'Name' => '內湖區', 'Seq' => 10, 'Used' => 1],
            ['PostalCode' => '115', 'CityID' => '2', 'Name' => '南港區', 'Seq' => 11, 'Used' => 1],
            ['PostalCode' => '116', 'CityID' => '2', 'Name' => '文山區', 'Seq' => 12, 'Used' => 1],
        ];

        DB::table('CityArea')->insert($cityarea);

        
    }
}
