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
    <form action="{{ route('leave-kinds.update', $leavekind->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="id">假別代碼: </label>
        <span>{{ old('id', $leavekind->id) }}</span>
        <br/><br/>
        <label for="name">假別名稱:</label>
        <input type="text" name="name" value={{ old('name', $leavekind->name)}}>
        <br/><br/>
        <label for="used">使用狀態:</label>
        <input type="checkbox" name="used" {{ old('used', $leavekind->used) ? "checked": "" }} >
        <br/><br/>
        <label for="seq">排列順序:</label>
        <input type="number" name="seq" value={{ old('seq', $leavekind->seq)}}>
        <br/><br/>
        <button type="submit" class="btn btn-primary">編輯</button>
        <a href="{{ route('leave-kinds.index') }}" class="btn btn-secondary">取消</a>
    </form>
</body>
</html>