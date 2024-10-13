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
    <h3>新增工作職位</h3>
    <form action="{{ route('job-positions.store') }}" method="POST">
        @csrf
        <label for="title">工作職稱名稱:</label>
        <input type="text" name="title">
        <br/><br/>
        <label for="eng_title">英文工作職稱名稱:</label>
        <input type="text" name="eng_title">
        <br/><br/>
        <button type="submit" class="btn btn-primary">新增</button>
        <a href="{{ route('job-positions.index') }}" class="btn btn-secondary">取消</a>
    </form>
</body>
</html>