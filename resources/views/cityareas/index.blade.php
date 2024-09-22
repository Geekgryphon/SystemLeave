<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h3>街區檢視畫面</h3>

    <form action="{{ route('cityareas.index') }}" method="GET">
        <input type="text" name="Name" id="Name" value="{{ request('Name') }}">
        <button type="submit">搜尋</button>
    </form>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>郵政區號</th>
                <th>街區名稱</th>
                <th>使用中</th>
                <th>排序</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cityareas as $cityarea)
                <tr>
                    <td>{{ $cityarea->PostalCode }}</td>
                    <td>{{ $cityarea->Name }}</td>
                    <td>{{ $cityarea->Used ? 'Yes' : 'No' }}</td>
                    <td>{{ $cityarea->Seq }}</td>
                    <td>
                        <a href="{{ route('cityareas.edit', ['id' => $cityarea->id, 'page' => $cityareas->currentPage()]) }}">Edit</a>
                        <form action="{{ route('cityareas.destroy', ['id' => $cityarea->id, 'page' => $cityareas->currentPage()]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this city?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('cityareas.create') }}" class="btn btn-primary">新增</a>
    <br/>

    {{ $cityareas->links() }}

</body>
</html>