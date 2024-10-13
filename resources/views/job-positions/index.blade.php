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
    <h3>顯示工作職稱</h3>
    <div style="display:inline-flex;">
        <div></div>
        <div>工作職稱</div>
        <div>英文工作職稱</div>
        <div>使用狀態</div>
        <div>排列順序</div>
    </div>


    

    @if (count($jobpositions) == 0)
        <br/>
        <div style="display:inline-flex;">
            沒有資料喔
        </div>
    @else
        @foreach($jobpositions as $jobposition)
            <br/>
            <div style="display:inline-flex;">
                <div><a href="{{ route('job-positions.edit', $jobposition->id) }}" class="btn btn-warning btn-sm">編輯</a></div>
                <div>{{ $jobposition->title }}</div>
                <div>{{ $jobposition->eng_title }}</div>
                <div>{{ $jobposition->used ? '是' : '否' }}</div>
                <div>{{ $jobposition->seq }}</div>
            </div>
        @endforeach
    @endif

    <br/><br/>
    <a href="{{ route('job-positions.create') }}" class="btn btn-primary">新增</a>
    
</body>
</html>