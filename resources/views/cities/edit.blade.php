<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit City</title>
</head>
<body>
    <h1>編輯縣市</h1>

    <form action="{{ route('cities.update', ['id' => $city->id]) }}" method="POST">
        @csrf
        @method('POST')

        <label for="postalcode">郵政區號:</label>
        <input type="text" id="postalcode" name="postalcode" value="{{ old('postalcode', $city->postalcode) }}" required>
        <br>

        <label for="name">縣市名稱:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $city->name) }}" required>
        <br>

        <label for="used">使用中:</label>
        <input type="checkbox" id="used" name="used" value="1" {{ $city->used ? 'checked' : '' }}>
        <br>

        <label for="seq">排列順序:</label>
        <input type="number" id="seq" name="seq" value="{{ old('seq', $city->seq) }}">
        <br>

        <input type="hidden" name="page" value="{{ $currentPage }}">

        <button type="submit" class="btn btn-primary" >更新</button>

        <a href="{{ route('cities.index', ['page' => $currentPage]) }}" class="btn btn-secondary">取消</a>
    </form>

    
</body>
</html>
