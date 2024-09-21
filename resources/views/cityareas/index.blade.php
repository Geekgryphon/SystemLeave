<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .pagination img {
            max-width: 100%; /* 確保圖片不會超過按鈕的大小 */
            height: auto;    /* 保持圖片的比例 */
            display: block;  /* 使圖片在按鈕內部居中 */
        }
    </style>
</head>
<body>
    <h3>街區檢視畫面</h3>

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

    {{ $cityareas->links() }}

</body>
</html>