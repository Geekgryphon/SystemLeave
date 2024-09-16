<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ✔️ 員工帳號 Employees - Account, Name, Password, Email, BirthDay,  CityID, CityAreaID, StreetID, Address, StartDate, EndDate
    ✔️ 工作歷程 JobHistory - Account, JobPositionID, BeginDate, EndDate
    ✔️ 職位 JobPosition - Title, EngTitle, Used, Seq

    ✔️ 縣市 City -  PostalCode, Name, Used, Seq 
    ✔️ 鄉鎮 CityArea -  PostalCode, CityID, Name, Used, Seq
    ✔️ 街道 CityStreet -  CityAreaID, Name, Used, Seq
    
    ✔️ 請假單 LeaveForm - LeaveFormNo, LeaveKindID, LeaveFormReason, Applicant, Proxy, BeginTime, EndTime, AttatchmentName1, AttatchmentName2
    ✔️ 假單類別 LeaveKind -  Name, Seq, Used
    ✔️ 假單簽核流程關卡 LeaveApprovalStages - LeaveFormNo, Step,  SignTime, Status, Memo
    ✔️ 簽核狀態 SignState -  Name,  SignCode, Used, Seq
    ✔️ 假單審核狀態 ApprovalStatus -  Name,  ApprovalCode, Used, Seq

    簽到退
    計算該月的上班時數
    
    <!-- 開發筆記 -->

    1. 如果是單純單一參數用 - 單一張表儲存就好，如果會有關連或其他相依性就開各自的表來儲存
    2. 同一個流程的資料表名稱最好取相似的名字


</body>
</html>