<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
            ✔️ 員工帳號 Employees - Account, Name, Password, Email, BirthDay,  CityID, CityAreaID, StreetID, Address, StartDate, EndDate
            ✔️ 工作歷程 JobHistory - Account, JobPositionID, BeginDate, EndDate
            ✔️ 職位 JobPosition - Title, EngTitle, Used, Seq
        
            ✔️ 縣市 Cities -  PostalCode, Name, Used, Seq 
            ✔️ 鄉鎮 CityArea -  PostalCode, CityID, Name, Used, Seq
            ✔️ 街道 CityStreet -  CityAreaID, Name, Used, Seq
            
            ✔️ 請假單 LeaveForm - LeaveFormNo, LeaveKindID, LeaveFormReason, Applicant, Proxy, BeginTime, EndTime, AttatchmentName1, AttatchmentName2
            ✔️ 假單類別 LeaveKind -  Name, Seq, Used
            ✔️ 假單簽核流程關卡 LeaveApprovalStages - LeaveFormNo, Step,  SignTime, Status, Memo
            ✔️ 簽核狀態 SignState -  Name,  SignCode, Used, Seq
            ✔️ 假單審核狀態 ApprovalStatus -  Name,  ApprovalCode, Used, Seq
        
            簽到退
            計算該月的上班時數
        
            1. 新增，檢視，編輯，刪除 如何實作
            2. 縣市資料繼續補
            3. 
        
            
            <!-- 開發筆記 -->
        
            1. 如果是單純單一參數用 - 單一張表儲存就好，如果會有關連或其他相依性就開各自的表來儲存
            2. 同一個流程的資料表名稱最好取相似的名字
            3. 產生專案密鑰 php artisan key:generate
            4. php artisan db:seed --class=citiesSeeder
            5. php artisan migrate:refresh
            6. page的參數可以透過用hidden 或 get一直丟參數， 使用Session儲存或資料庫儲存都會造成伺服器負擔
            7. 非藏有使用者個資的資料表主key可以使用 數字遞增或比較簡單的方式來產生，反之會建議用GUID
            8. FP和OOP會偏向使用FP
            9. 新增或刪除都不用保留搜尋項，編輯要

            1. 資料表名稱一般都為複數且為小寫，多個單字用底線分開 如: leave_kinds
            2. Model的class會命名為 如: LeaveKind
            3. Controller 命名範例 LeaveKindController
            4. Route 命名範例 leave-kinds/
            5. 資料表的外來鍵 如:leave_kind_id
            6. Model 命名範例 LeaveKind 
            7. views的資料夾命名範例 leave-kinds
            8. 資料表欄位名稱皆為小寫，且如果多個單字用_連接
            

            縣市的檢視頁面, 一頁顯示10筆資料 可丟入 文字進行搜尋和頁數

            檢視頁面
            1. 建立blade.php
            2. 寫入route路徑

            $request->input('')  // 取得參數的內容
            $request->has('')
            $request->filled('') // 參數不為空才會進入

    </body>
</html>
