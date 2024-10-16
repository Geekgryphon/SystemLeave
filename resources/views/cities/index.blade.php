<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>縣市新增</title>
    {{-- @vite('resources/css/app.css') --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <h1 class="bg-red-300 ">縣市新增</h1>

    <!-- @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif -->


    <form action="{{ route('cities.index') }}" method="GET">
        <input type="text" name="Name" value="{{ request('Name') }}">
        <button type="submit">Search</button>
    </form>
    <br/>

        <div>
            <div style="display:inline-flex;">
                <div>縣市郵遞區號</div>
                <div>縣市名稱</div>
                <div>使用中</div>
                <div>排列順序</div>
            </div>
            <br/>
        
            @foreach ($cities as $city)
                <div style="display:inline-flex;">
                    <div>{{ $city->postalcode }}</div>
                    <div>{{ $city->name }}</div>
                    <div>{{ $city->used ? '是' : '否' }}</div>
                    <div>{{ $city->seq }}</div>
                    <div>
                        <a href="{{ route('cities.edit', ['id' => $city->id, 'page' => $cities->currentPage()]) }}" class="btn btn-warning btn-sm">編輯</a>
                        <form action="{{ route('cities.destroy', ['id' => $city->id, 'page' => $cities->currentPage()]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">刪除</button>
                        </form>
                    </div>
                </div>
                <br/>
            @endforeach
            
        </div>

    <a href="{{ route('cities.create') }}" class="btn btn-primary">新增</a>
    <br/>

    {{  $cities->links() }}
</body>
</html>
