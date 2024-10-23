<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create User</title>
</head>
<body>

    <h5>新增縣市</h5>

    <form action="{{ route('cities.store') }}" method="POST">
        @csrf
        <label for="Name">縣市名稱:</label>
        <input type="text" id="Name" name="Name">
        <br>
        
        <label for="Seq">排列順序:</label>
        <input type="number" id="Seq" name="Seq">
        <br>
        
        <button type="submit" class="btn btn-primary">新增縣市</button>
        <a href="{{ route('cities.index') }}" class="btn btn-secondary">取消</a>
    </form>
</body>
</html>
