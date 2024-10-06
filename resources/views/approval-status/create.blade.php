<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h3>新增審核狀態</h3>
    <form action="{{ route('approval-status.store') }}" method="POST">
        @csrf
        <label for="name">審核名稱:</label>
        <input type="text" name="name">
        <br/><br/>
        <label for="approval_code">審核代碼:</label>
        <input type="text" name="approval_code">
        <br/><br/>
        <button type="submit" class="btn btn-primary">新增</button>
        <a href="{{ route('approval-status.index') }}" class="btn btn-secondary">取消</a>
    </form>
</body>
</html>