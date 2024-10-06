<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('approval-status.update', $approvalstatus->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">審核狀態名稱:</label>
        <input type="text" name="name" value={{ old('name', $approvalstatus->name)}}>
        <br/><br/>
        <label for="name">審核狀態代碼:</label>
        <input type="text" name="approval_code" value={{ old('approval_code', $approvalstatus->approval_code)}}>
        <br/><br/>
        <label for="used">使用狀態:</label>
        <input type="checkbox" name="used" {{ old('used', $approvalstatus->used) ? "checked": "" }} >
        <br/><br/>
        <label for="seq">排列順序:</label>
        <input type="number" name="seq" value={{ old('seq', $approvalstatus->seq)}}>
        <br/><br/>
        <button type="submit" class="btn btn-primary">編輯</button>
        <a href="{{ route('approval-status.index') }}" class="btn btn-secondary">取消</a>
    </form>
</body>
</html>