<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City List</title>
</head>
<body>
    <h1>City List</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Postal Code</th>
                <th>Name</th>
                <th>Used</th>
                <th>Seq</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
                <tr>
                    <td>{{ $city->PostalCode }}</td>
                    <td>{{ $city->Name }}</td>
                    <td>{{ $city->Used ? 'Yes' : 'No' }}</td>
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

    {{ $cities->links() }}
</body>
</html>
