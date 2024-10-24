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
    <h3>顯示審核狀態</h3>
    <div style="display:inline-flex;">
        <div>審核代碼</div>
        <div>審核名稱</div>
        <div>使用狀態</div>
        <div>排列順序</div>
    </div>

    @if (count($signstates) == 0)
        <br/>
        <div style="display:inline-flex;">
            沒有資料喔
        </div>
    @else
        @foreach($signstates as $signstate)
            <br/>
            <div style="display:inline-flex;">
                <div><a href="{{ route('sign-states.edit', $signstate->id) }}" class="btn btn-warning btn-sm">編輯</a></div>
                <div>{{ $signstate->signcode }}</div>
                <div>{{ $signstate->name }}</div>
                <div>{{ $signstate->used ? '是' : '否' }}</div>
                <div>{{ $signstate->seq }}</div>
            </div>
        @endforeach
    @endif

    <br/><br/>
    <a href="{{ route('sign-states.create') }}" class="btn btn-primary">新增</a>
    
</body>
</html>