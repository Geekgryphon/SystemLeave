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
        <div style="display:inline-flex;">
            <div>假別代碼</div>
            <div>假別名稱</div>
            <div>使用狀態</div>
            <div>排列順序</div>
        </div>

        @if (count($leavekinds) == 0)
            <br/>
            <div style="display:inline-flex;">
                沒有資料喔
            </div>
        @else
            @foreach($leavekinds as $leavekind)
                <br/>
                <div style="display:inline-flex;">
                    <div><a href="{{ route('leave-kinds.edit', $leavekind->id) }}" class="btn btn-warning btn-sm">編輯</a></div>
                    <div>{{ $leavekind->id }}</div>
                    <div>{{ $leavekind->name }}</div>
                    <div>{{ $leavekind->used ? '是' : '否' }}</div>
                    <div>{{ $leavekind->seq }}</div>
                </div>
            @endforeach
        @endif
        <br/><br/>
        <div><a href="{{ route('leave-kinds.create') }}" class="btn btn-primary btn-sm">新增</a></div>
</body>
</html>