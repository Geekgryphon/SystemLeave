<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class citiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('cities')->truncate();

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

        DB::table('cities')->insert($cities);

        DB::table('cityareas')->truncate();

        $cityarea = [
            // 基隆市
            ['PostalCode' => '200', 'CityID' => '1', 'Name' => '仁愛區', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '201', 'CityID' => '1', 'Name' => '信義區', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '202', 'CityID' => '1', 'Name' => '中正區', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '203', 'CityID' => '1', 'Name' => '中山區', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '204', 'CityID' => '1', 'Name' => '安樂區', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '205', 'CityID' => '1', 'Name' => '暖暖區', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '206', 'CityID' => '1', 'Name' => '七堵區', 'Seq' => 7, 'Used' => 1],
            // 台北市
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
            // 新北市
            ['PostalCode' => '207', 'CityID' => '3', 'Name' => '萬里區', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '208', 'CityID' => '3', 'Name' => '金山區', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '220', 'CityID' => '3', 'Name' => '板橋區', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '221', 'CityID' => '3', 'Name' => '汐止區', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '222', 'CityID' => '3', 'Name' => '深坑區', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '223', 'CityID' => '3', 'Name' => '石碇區', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '224', 'CityID' => '3', 'Name' => '瑞芳區', 'Seq' => 7, 'Used' => 1],
            ['PostalCode' => '226', 'CityID' => '3', 'Name' => '平溪區', 'Seq' => 8, 'Used' => 1],
            ['PostalCode' => '227', 'CityID' => '3', 'Name' => '雙溪區', 'Seq' => 9, 'Used' => 1],
            ['PostalCode' => '228', 'CityID' => '3', 'Name' => '貢寮區', 'Seq' => 10, 'Used' => 1],
            ['PostalCode' => '231', 'CityID' => '3', 'Name' => '新店區', 'Seq' => 11, 'Used' => 1],
            ['PostalCode' => '232', 'CityID' => '3', 'Name' => '坪林區', 'Seq' => 12, 'Used' => 1],
            ['PostalCode' => '233', 'CityID' => '3', 'Name' => '烏來區', 'Seq' => 13, 'Used' => 1],
            ['PostalCode' => '234', 'CityID' => '3', 'Name' => '永和區', 'Seq' => 14, 'Used' => 1],
            ['PostalCode' => '235', 'CityID' => '3', 'Name' => '中和區', 'Seq' => 15, 'Used' => 1],
            ['PostalCode' => '236', 'CityID' => '3', 'Name' => '土城區', 'Seq' => 16, 'Used' => 1],
            ['PostalCode' => '237', 'CityID' => '3', 'Name' => '三峽區', 'Seq' => 17, 'Used' => 1],
            ['PostalCode' => '238', 'CityID' => '3', 'Name' => '樹林區', 'Seq' => 18, 'Used' => 1],
            ['PostalCode' => '239', 'CityID' => '3', 'Name' => '鶯歌區', 'Seq' => 19, 'Used' => 1],
            ['PostalCode' => '241', 'CityID' => '3', 'Name' => '三重區', 'Seq' => 20, 'Used' => 1],
            ['PostalCode' => '242', 'CityID' => '3', 'Name' => '新莊區', 'Seq' => 21, 'Used' => 1],
            ['PostalCode' => '243', 'CityID' => '3', 'Name' => '泰山區', 'Seq' => 22, 'Used' => 1],
            ['PostalCode' => '244', 'CityID' => '3', 'Name' => '林口區', 'Seq' => 23, 'Used' => 1],
            ['PostalCode' => '247', 'CityID' => '3', 'Name' => '蘆洲區', 'Seq' => 24, 'Used' => 1],
            ['PostalCode' => '248', 'CityID' => '3', 'Name' => '五股區', 'Seq' => 25, 'Used' => 1],
            ['PostalCode' => '249', 'CityID' => '3', 'Name' => '八里區', 'Seq' => 26, 'Used' => 1],
            ['PostalCode' => '251', 'CityID' => '3', 'Name' => '淡水區', 'Seq' => 27, 'Used' => 1],
            ['PostalCode' => '252', 'CityID' => '3', 'Name' => '三芝區', 'Seq' => 28, 'Used' => 1],
            ['PostalCode' => '253', 'CityID' => '3', 'Name' => '石門區', 'Seq' => 29, 'Used' => 1],
            //桃園市
            ['PostalCode' => '320', 'CityID' => '4', 'Name' => '中壢區', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '324', 'CityID' => '4', 'Name' => '平鎮區', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '325', 'CityID' => '4', 'Name' => '龍潭區', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '326', 'CityID' => '4', 'Name' => '楊梅區', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '327', 'CityID' => '4', 'Name' => '新屋區', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '328', 'CityID' => '4', 'Name' => '觀音區', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '330', 'CityID' => '4', 'Name' => '桃園區', 'Seq' => 7, 'Used' => 1],
            ['PostalCode' => '333', 'CityID' => '4', 'Name' => '龜山區', 'Seq' => 8, 'Used' => 1],
            ['PostalCode' => '334', 'CityID' => '4', 'Name' => '八德區', 'Seq' => 9, 'Used' => 1],
            ['PostalCode' => '335', 'CityID' => '4', 'Name' => '大溪區', 'Seq' => 10, 'Used' => 1],
            ['PostalCode' => '336', 'CityID' => '4', 'Name' => '復興區', 'Seq' => 11, 'Used' => 1],
            ['PostalCode' => '337', 'CityID' => '4', 'Name' => '大園區', 'Seq' => 12, 'Used' => 1],
            ['PostalCode' => '338', 'CityID' => '4', 'Name' => '蘆竹區', 'Seq' => 13, 'Used' => 1],
            //新竹市
            ['PostalCode' => '300', 'CityID' => '5', 'Name' => '東區', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '300', 'CityID' => '5', 'Name' => '北區', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '300', 'CityID' => '5', 'Name' => '香山區', 'Seq' => 3, 'Used' => 1],
            //新竹縣
            ['PostalCode' => '302', 'CityID' => '6', 'Name' => '竹北市', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '303', 'CityID' => '6', 'Name' => '湖口鄉', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '304', 'CityID' => '6', 'Name' => '新豐鄉', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '305', 'CityID' => '6', 'Name' => '新埔鎮', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '306', 'CityID' => '6', 'Name' => '關西鎮', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '307', 'CityID' => '6', 'Name' => '芎林鄉', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '308', 'CityID' => '6', 'Name' => '寶山鄉', 'Seq' => 7, 'Used' => 1],
            ['PostalCode' => '310', 'CityID' => '6', 'Name' => '竹東鎮', 'Seq' => 8, 'Used' => 1],
            ['PostalCode' => '311', 'CityID' => '6', 'Name' => '五峰鄉', 'Seq' => 9, 'Used' => 1],
            ['PostalCode' => '312', 'CityID' => '6', 'Name' => '橫山鄉', 'Seq' => 10, 'Used' => 1],
            ['PostalCode' => '313', 'CityID' => '6', 'Name' => '尖石鄉', 'Seq' => 11, 'Used' => 1],
            ['PostalCode' => '314', 'CityID' => '6', 'Name' => '北埔鄉', 'Seq' => 12, 'Used' => 1],
            ['PostalCode' => '315', 'CityID' => '6', 'Name' => '峨眉鄉', 'Seq' => 13, 'Used' => 1],
            //苗栗縣
            ['PostalCode' => '350', 'CityID' => '7', 'Name' => '竹南鎮', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '351', 'CityID' => '7', 'Name' => '頭份市', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '352', 'CityID' => '7', 'Name' => '三灣鄉', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '353', 'CityID' => '7', 'Name' => '南庄鄉', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '354', 'CityID' => '7', 'Name' => '獅潭鄉', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '356', 'CityID' => '7', 'Name' => '後龍鎮', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '357', 'CityID' => '7', 'Name' => '通霄鎮', 'Seq' => 7, 'Used' => 1],
            ['PostalCode' => '358', 'CityID' => '7', 'Name' => '苑裡鎮', 'Seq' => 8, 'Used' => 1],
            ['PostalCode' => '360', 'CityID' => '7', 'Name' => '苗栗市', 'Seq' => 9, 'Used' => 1],
            ['PostalCode' => '361', 'CityID' => '7', 'Name' => '造橋鄉', 'Seq' => 10, 'Used' => 1],
            ['PostalCode' => '362', 'CityID' => '7', 'Name' => '頭屋鄉', 'Seq' => 11, 'Used' => 1],
            ['PostalCode' => '363', 'CityID' => '7', 'Name' => '公館鄉', 'Seq' => 12, 'Used' => 1],
            ['PostalCode' => '364', 'CityID' => '7', 'Name' => '大湖鄉', 'Seq' => 13, 'Used' => 1],
            ['PostalCode' => '365', 'CityID' => '7', 'Name' => '泰安鄉', 'Seq' => 14, 'Used' => 1],
            ['PostalCode' => '366', 'CityID' => '7', 'Name' => '銅鑼鄉', 'Seq' => 15, 'Used' => 1],
            ['PostalCode' => '367', 'CityID' => '7', 'Name' => '三義鄉', 'Seq' => 16, 'Used' => 1],
            ['PostalCode' => '368', 'CityID' => '7', 'Name' => '西湖鄉', 'Seq' => 17, 'Used' => 1],
            ['PostalCode' => '369', 'CityID' => '7', 'Name' => '卓蘭鎮', 'Seq' => 18, 'Used' => 1],
            //台中市
            ['PostalCode' => '400', 'CityID' => '8', 'Name' => '中區', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '401', 'CityID' => '8', 'Name' => '東區', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '402', 'CityID' => '8', 'Name' => '南區', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '403', 'CityID' => '8', 'Name' => '西區', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '404', 'CityID' => '8', 'Name' => '北區', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '406', 'CityID' => '8', 'Name' => '北屯區', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '407', 'CityID' => '8', 'Name' => '西屯區', 'Seq' => 7, 'Used' => 1],
            ['PostalCode' => '408', 'CityID' => '8', 'Name' => '南屯區', 'Seq' => 8, 'Used' => 1],
            ['PostalCode' => '411', 'CityID' => '8', 'Name' => '太平區', 'Seq' => 9, 'Used' => 1],
            ['PostalCode' => '412', 'CityID' => '8', 'Name' => '大里區', 'Seq' => 10, 'Used' => 1],
            ['PostalCode' => '413', 'CityID' => '8', 'Name' => '霧峰區', 'Seq' => 11, 'Used' => 1],
            ['PostalCode' => '414', 'CityID' => '8', 'Name' => '烏日區', 'Seq' => 12, 'Used' => 1],
            ['PostalCode' => '420', 'CityID' => '8', 'Name' => '豐原區', 'Seq' => 13, 'Used' => 1],
            ['PostalCode' => '421', 'CityID' => '8', 'Name' => '后里區', 'Seq' => 14, 'Used' => 1],
            ['PostalCode' => '422', 'CityID' => '8', 'Name' => '石岡區', 'Seq' => 15, 'Used' => 1],
            ['PostalCode' => '423', 'CityID' => '8', 'Name' => '東勢區', 'Seq' => 16, 'Used' => 1],
            ['PostalCode' => '424', 'CityID' => '8', 'Name' => '和平區', 'Seq' => 17, 'Used' => 1],
            ['PostalCode' => '426', 'CityID' => '8', 'Name' => '新社區', 'Seq' => 18, 'Used' => 1],
            ['PostalCode' => '427', 'CityID' => '8', 'Name' => '潭子區', 'Seq' => 19, 'Used' => 1],
            ['PostalCode' => '428', 'CityID' => '8', 'Name' => '大雅區', 'Seq' => 20, 'Used' => 1],
            ['PostalCode' => '429', 'CityID' => '8', 'Name' => '神岡區', 'Seq' => 21, 'Used' => 1],
            ['PostalCode' => '432', 'CityID' => '8', 'Name' => '大肚區', 'Seq' => 22, 'Used' => 1],
            ['PostalCode' => '433', 'CityID' => '8', 'Name' => '沙鹿區', 'Seq' => 23, 'Used' => 1],
            ['PostalCode' => '434', 'CityID' => '8', 'Name' => '龍井區', 'Seq' => 24, 'Used' => 1],
            ['PostalCode' => '435', 'CityID' => '8', 'Name' => '梧棲區', 'Seq' => 25, 'Used' => 1],
            ['PostalCode' => '436', 'CityID' => '8', 'Name' => '清水區', 'Seq' => 26, 'Used' => 1],
            ['PostalCode' => '437', 'CityID' => '8', 'Name' => '大甲區', 'Seq' => 27, 'Used' => 1],
            ['PostalCode' => '438', 'CityID' => '8', 'Name' => '外埔區', 'Seq' => 28, 'Used' => 1],
            ['PostalCode' => '439', 'CityID' => '8', 'Name' => '大安區', 'Seq' => 29, 'Used' => 1],
            //彰化縣
            ['PostalCode' => '500', 'CityID' => '9', 'Name' => '彰化市', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '502', 'CityID' => '9', 'Name' => '芬園鄉', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '503', 'CityID' => '9', 'Name' => '花壇鄉', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '504', 'CityID' => '9', 'Name' => '秀水鄉', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '505', 'CityID' => '9', 'Name' => '鹿港鎮', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '506', 'CityID' => '9', 'Name' => '福興鄉', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '507', 'CityID' => '9', 'Name' => '線西鄉', 'Seq' => 7, 'Used' => 1],
            ['PostalCode' => '508', 'CityID' => '9', 'Name' => '和美鎮', 'Seq' => 8, 'Used' => 1],
            ['PostalCode' => '509', 'CityID' => '9', 'Name' => '伸港鄉', 'Seq' => 9, 'Used' => 1],
            ['PostalCode' => '510', 'CityID' => '9', 'Name' => '員林鎮', 'Seq' => 10, 'Used' => 1],
            ['PostalCode' => '511', 'CityID' => '9', 'Name' => '社頭鄉', 'Seq' => 11, 'Used' => 1],
            ['PostalCode' => '512', 'CityID' => '9', 'Name' => '永靖鄉', 'Seq' => 12, 'Used' => 1],
            ['PostalCode' => '513', 'CityID' => '9', 'Name' => '埔心鄉', 'Seq' => 13, 'Used' => 1],
            ['PostalCode' => '514', 'CityID' => '9', 'Name' => '溪湖鎮', 'Seq' => 14, 'Used' => 1],
            ['PostalCode' => '515', 'CityID' => '9', 'Name' => '大村鄉', 'Seq' => 15, 'Used' => 1],
            ['PostalCode' => '516', 'CityID' => '9', 'Name' => '埔鹽鄉', 'Seq' => 16, 'Used' => 1],
            ['PostalCode' => '520', 'CityID' => '9', 'Name' => '田中鎮', 'Seq' => 17, 'Used' => 1],
            ['PostalCode' => '521', 'CityID' => '9', 'Name' => '北斗鎮', 'Seq' => 18, 'Used' => 1],
            ['PostalCode' => '522', 'CityID' => '9', 'Name' => '田尾鄉', 'Seq' => 19, 'Used' => 1],
            ['PostalCode' => '523', 'CityID' => '9', 'Name' => '埤頭鄉', 'Seq' => 20, 'Used' => 1],
            ['PostalCode' => '524', 'CityID' => '9', 'Name' => '溪州鄉', 'Seq' => 21, 'Used' => 1],
            ['PostalCode' => '525', 'CityID' => '9', 'Name' => '竹塘鄉', 'Seq' => 22, 'Used' => 1],
            ['PostalCode' => '526', 'CityID' => '9', 'Name' => '二林鎮', 'Seq' => 23, 'Used' => 1],
            ['PostalCode' => '527', 'CityID' => '9', 'Name' => '大城鄉', 'Seq' => 24, 'Used' => 1],
            ['PostalCode' => '528', 'CityID' => '9', 'Name' => '芳苑鄉', 'Seq' => 25, 'Used' => 1],
            ['PostalCode' => '530', 'CityID' => '9', 'Name' => '二水鄉', 'Seq' => 26, 'Used' => 1],
            //南投縣
            ['PostalCode' => '540', 'CityID' => '10', 'Name' => '南投市', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '541', 'CityID' => '10', 'Name' => '中寮鄉', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '542', 'CityID' => '10', 'Name' => '草屯鎮', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '544', 'CityID' => '10', 'Name' => '國姓鄉', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '545', 'CityID' => '10', 'Name' => '埔里鎮', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '546', 'CityID' => '10', 'Name' => '仁愛鄉', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '551', 'CityID' => '10', 'Name' => '名間鄉', 'Seq' => 7, 'Used' => 1],
            ['PostalCode' => '552', 'CityID' => '10', 'Name' => '集集鎮', 'Seq' => 8, 'Used' => 1],
            ['PostalCode' => '553', 'CityID' => '10', 'Name' => '水里鄉', 'Seq' => 9, 'Used' => 1],
            ['PostalCode' => '555', 'CityID' => '10', 'Name' => '魚池鄉', 'Seq' => 10, 'Used' => 1],
            ['PostalCode' => '556', 'CityID' => '10', 'Name' => '信義鄉', 'Seq' => 11, 'Used' => 1],
            ['PostalCode' => '557', 'CityID' => '10', 'Name' => '竹山鎮', 'Seq' => 12, 'Used' => 1],
            ['PostalCode' => '558', 'CityID' => '10', 'Name' => '鹿谷鄉', 'Seq' => 13, 'Used' => 1],
            //雲林縣
            ['PostalCode' => '630', 'CityID' => '11', 'Name' => '斗南鎮', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '631', 'CityID' => '11', 'Name' => '大埤鄉', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '632', 'CityID' => '11', 'Name' => '虎尾鎮', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '633', 'CityID' => '11', 'Name' => '土庫鎮', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '634', 'CityID' => '11', 'Name' => '褒忠鄉', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '635', 'CityID' => '11', 'Name' => '東勢鄉', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '636', 'CityID' => '11', 'Name' => '臺西鄉', 'Seq' => 7, 'Used' => 1],
            ['PostalCode' => '637', 'CityID' => '11', 'Name' => '崙背鄉', 'Seq' => 8, 'Used' => 1],
            ['PostalCode' => '638', 'CityID' => '11', 'Name' => '麥寮鄉', 'Seq' => 9, 'Used' => 1],
            ['PostalCode' => '640', 'CityID' => '11', 'Name' => '斗六市', 'Seq' => 10, 'Used' => 1],
            ['PostalCode' => '643', 'CityID' => '11', 'Name' => '林內鄉', 'Seq' => 11, 'Used' => 1],
            ['PostalCode' => '646', 'CityID' => '11', 'Name' => '古坑鄉', 'Seq' => 12, 'Used' => 1],
            ['PostalCode' => '647', 'CityID' => '11', 'Name' => '莿桐鄉', 'Seq' => 13, 'Used' => 1],
            ['PostalCode' => '648', 'CityID' => '11', 'Name' => '西螺鎮', 'Seq' => 14, 'Used' => 1],
            ['PostalCode' => '649', 'CityID' => '11', 'Name' => '二崙鄉', 'Seq' => 15, 'Used' => 1],
            ['PostalCode' => '651', 'CityID' => '11', 'Name' => '北港鎮', 'Seq' => 16, 'Used' => 1],
            ['PostalCode' => '652', 'CityID' => '11', 'Name' => '水林鄉', 'Seq' => 17, 'Used' => 1],
            ['PostalCode' => '653', 'CityID' => '11', 'Name' => '口湖鄉', 'Seq' => 18, 'Used' => 1],
            ['PostalCode' => '654', 'CityID' => '11', 'Name' => '四湖鄉', 'Seq' => 19, 'Used' => 1],
            ['PostalCode' => '655', 'CityID' => '11', 'Name' => '元長鄉', 'Seq' => 20, 'Used' => 1],
            //嘉義市
            ['PostalCode' => '600', 'CityID' => '12', 'Name' => '東區', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '600', 'CityID' => '12', 'Name' => '西區', 'Seq' => 2, 'Used' => 1],
            //嘉義縣
            ['PostalCode' => '602', 'CityID' => '13', 'Name' => '番路鄉', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '603', 'CityID' => '13', 'Name' => '梅山鄉', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '604', 'CityID' => '13', 'Name' => '竹崎鄉', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '605', 'CityID' => '13', 'Name' => '阿里山', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '606', 'CityID' => '13', 'Name' => '中埔鄉', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '607', 'CityID' => '13', 'Name' => '大埔鄉', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '608', 'CityID' => '13', 'Name' => '水上鄉', 'Seq' => 7, 'Used' => 1],
            ['PostalCode' => '611', 'CityID' => '13', 'Name' => '鹿草鄉', 'Seq' => 8, 'Used' => 1],
            ['PostalCode' => '612', 'CityID' => '13', 'Name' => '太保市', 'Seq' => 9, 'Used' => 1],
            ['PostalCode' => '613', 'CityID' => '13', 'Name' => '朴子市', 'Seq' => 10, 'Used' => 1],
            ['PostalCode' => '614', 'CityID' => '13', 'Name' => '東石鄉', 'Seq' => 11, 'Used' => 1],
            ['PostalCode' => '615', 'CityID' => '13', 'Name' => '六腳鄉', 'Seq' => 12, 'Used' => 1],
            ['PostalCode' => '616', 'CityID' => '13', 'Name' => '新港鄉', 'Seq' => 13, 'Used' => 1],
            ['PostalCode' => '621', 'CityID' => '13', 'Name' => '民雄鄉', 'Seq' => 14, 'Used' => 1],
            ['PostalCode' => '622', 'CityID' => '13', 'Name' => '大林鎮', 'Seq' => 15, 'Used' => 1],
            ['PostalCode' => '623', 'CityID' => '13', 'Name' => '溪口鄉', 'Seq' => 16, 'Used' => 1],
            ['PostalCode' => '624', 'CityID' => '13', 'Name' => '義竹鄉', 'Seq' => 17, 'Used' => 1],
            ['PostalCode' => '625', 'CityID' => '13', 'Name' => '布袋鎮', 'Seq' => 18, 'Used' => 1],
            //台南市
            ['PostalCode' => '700', 'CityID' => '14', 'Name' => '中區', 'Seq' => 1, 'Used' => 1],
            ['PostalCode' => '701', 'CityID' => '14', 'Name' => '東區', 'Seq' => 2, 'Used' => 1],
            ['PostalCode' => '702', 'CityID' => '14', 'Name' => '南區', 'Seq' => 3, 'Used' => 1],
            ['PostalCode' => '704', 'CityID' => '14', 'Name' => '北區', 'Seq' => 4, 'Used' => 1],
            ['PostalCode' => '708', 'CityID' => '14', 'Name' => '安平區', 'Seq' => 5, 'Used' => 1],
            ['PostalCode' => '709', 'CityID' => '14', 'Name' => '安南區', 'Seq' => 6, 'Used' => 1],
            ['PostalCode' => '710', 'CityID' => '14', 'Name' => '永康區', 'Seq' => 7, 'Used' => 1],
            ['PostalCode' => '711', 'CityID' => '14', 'Name' => '歸仁區', 'Seq' => 8, 'Used' => 1],
            ['PostalCode' => '712', 'CityID' => '14', 'Name' => '新化區', 'Seq' => 9, 'Used' => 1],
            ['PostalCode' => '713', 'CityID' => '14', 'Name' => '左鎮區', 'Seq' => 10, 'Used' => 1],
            ['PostalCode' => '714', 'CityID' => '14', 'Name' => '玉井區', 'Seq' => 11, 'Used' => 1],
            ['PostalCode' => '715', 'CityID' => '14', 'Name' => '楠西區', 'Seq' => 12, 'Used' => 1],
            ['PostalCode' => '716', 'CityID' => '14', 'Name' => '南化區', 'Seq' => 13, 'Used' => 1],
            ['PostalCode' => '717', 'CityID' => '14', 'Name' => '仁德區', 'Seq' => 14, 'Used' => 1],
            ['PostalCode' => '718', 'CityID' => '14', 'Name' => '關廟區', 'Seq' => 15, 'Used' => 1],
            ['PostalCode' => '719', 'CityID' => '14', 'Name' => '龍崎區', 'Seq' => 16, 'Used' => 1],
            ['PostalCode' => '720', 'CityID' => '14', 'Name' => '官田區', 'Seq' => 17, 'Used' => 1],
            ['PostalCode' => '721', 'CityID' => '14', 'Name' => '麻豆區', 'Seq' => 18, 'Used' => 1],
            ['PostalCode' => '722', 'CityID' => '14', 'Name' => '佳里區', 'Seq' => 19, 'Used' => 1],
            ['PostalCode' => '723', 'CityID' => '14', 'Name' => '西港區', 'Seq' => 20, 'Used' => 1],
            ['PostalCode' => '724', 'CityID' => '14', 'Name' => '七股區', 'Seq' => 21, 'Used' => 1],
            ['PostalCode' => '725', 'CityID' => '14', 'Name' => '將軍區', 'Seq' => 22, 'Used' => 1],
            ['PostalCode' => '726', 'CityID' => '14', 'Name' => '學甲區', 'Seq' => 23, 'Used' => 1],
            ['PostalCode' => '727', 'CityID' => '14', 'Name' => '北門區', 'Seq' => 24, 'Used' => 1],
            ['PostalCode' => '730', 'CityID' => '14', 'Name' => '新營區', 'Seq' => 25, 'Used' => 1],
            ['PostalCode' => '731', 'CityID' => '14', 'Name' => '後壁區', 'Seq' => 26, 'Used' => 1],
            ['PostalCode' => '732', 'CityID' => '14', 'Name' => '白河區', 'Seq' => 27, 'Used' => 1],
            ['PostalCode' => '733', 'CityID' => '14', 'Name' => '東山區', 'Seq' => 28, 'Used' => 1],
            ['PostalCode' => '734', 'CityID' => '14', 'Name' => '六甲區', 'Seq' => 29, 'Used' => 1],
            ['PostalCode' => '735', 'CityID' => '14', 'Name' => '下營區', 'Seq' => 30, 'Used' => 1],
            ['PostalCode' => '736', 'CityID' => '14', 'Name' => '柳營區', 'Seq' => 31, 'Used' => 1],
            ['PostalCode' => '737', 'CityID' => '14', 'Name' => '鹽水區', 'Seq' => 32, 'Used' => 1],
            ['PostalCode' => '741', 'CityID' => '14', 'Name' => '善化區', 'Seq' => 33, 'Used' => 1],
            ['PostalCode' => '742', 'CityID' => '14', 'Name' => '大內區', 'Seq' => 34, 'Used' => 1],
            ['PostalCode' => '743', 'CityID' => '14', 'Name' => '山上區', 'Seq' => 35, 'Used' => 1],
            ['PostalCode' => '744', 'CityID' => '14', 'Name' => '新市區', 'Seq' => 36, 'Used' => 1],
            ['PostalCode' => '745', 'CityID' => '14', 'Name' => '安定區', 'Seq' => 37, 'Used' => 1],
        ];

        DB::table('cityareas')->insert($cityarea);

        
    }
}
