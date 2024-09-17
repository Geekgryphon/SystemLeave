<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit City</title>
</head>
<body>
    <h1>Edit City</h1>

    <form action="{{ route('cities.update', ['id' => $city->id]) }}" method="POST">
        @csrf
        @method('POST')

        <label for="PostalCode">Postal Code:</label>
        <input type="text" id="PostalCode" name="PostalCode" value="{{ old('PostalCode', $city->PostalCode) }}" required>
        <br>

        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" value="{{ old('Name', $city->Name) }}" required>
        <br>

        <label for="Used">Used:</label>
        <input type="checkbox" id="Used" name="Used" value="1" {{ $city->Used ? 'checked' : '' }}>
        <br>

        <label for="Seq">Sequence:</label>
        <input type="number" id="Seq" name="Seq" value="{{ old('Seq', $city->Seq) }}">
        <br>

        <input type="hidden" name="page" value="{{ $currentPage }}">

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('cities.index', ['page' => $currentPage]) }}">Back to list</a>
</body>
</html>
