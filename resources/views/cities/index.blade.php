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

    <table>
        <thead>
            <tr>
                <th>縣市郵遞區號</th>
                <th>縣市名稱</th>
                <th>使用中</th>
                <th>排列順序</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
                <tr>
                    <td>{{ $city->PostalCode }}</td>
                    <td>{{ $city->Name }}</td>
                    <td>{{ $city->Used ? '是' : '否' }}</td>
                    <td>{{ $city->Seq }}</td>
                    <td>
                        <a href="{{ route('cities.edit', ['id' => $city->id, 'page' => $cities->currentPage()]) }}">Edit</a>
                        <form action="{{ route('cities.destroy', ['id' => $city->id, 'page' => $cities->currentPage()]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this city?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('cities.create') }}" class="btn btn-primary">新增</a>
    <br/>

    {{ $cities->links() }}
</body>
</html>
