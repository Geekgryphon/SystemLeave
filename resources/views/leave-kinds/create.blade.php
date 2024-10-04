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
    <h3>新增假別種類</h3>
    <form action="{{ route('leave-kinds.store') }}" method="POST">
        @csrf
        <label for="name">假別名稱:</label>
        <input type="text" name="name">
        <br/><br/>
        <button type="submit" class="btn btn-primary">新增</button>
        <a href="{{ route('leave-kinds.index') }}" class="btn btn-secondary">取消</a>
    </form>
</body>
</html>