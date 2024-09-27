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
    <form action="" method="POST">
        @csrf
        <label for="Name">假別名稱</label>
        <input type="text" name="Name">
        <br/>
        <label for="Seq">排序</label>
        <input type="number" name="Seq">
        <br/>
        <br/>
        <button type="submit" class="btn btn-primary">新增</button>
    </form>
</body>
</html>