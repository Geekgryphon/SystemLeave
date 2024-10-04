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
    <h3>顯示假別種類</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>假別代碼</th>
                <th>假別名稱</th>
                <th>使用狀態</th>
                <th>排列順序</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leavekinds as $leavekind)
            <tr>
                <td>
                    <a href="{{ route('leave-kinds.edit', $leavekind->id) }}" class="btn btn-warning btn-sm">編輯</a>
                </td>
                <td>{{ $leavekind->id }}</td>
                <td>{{ $leavekind->name }}</td>
                <td>{{ $leavekind->used}}</td>
                <td>{{ $leavekind->seq}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>