<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>街區編輯畫面</h3>
    <form action="{{ route('cityareas.update', ['id' => $cityarea->id]) }}" method="POST">
        @csrf
        @method('POST')

        <label for="PostalCode">郵政區碼:</label>
        <input type="text" id="postalCode" name="postalCode" value="{{ old('postalcode', $cityarea->postalCode) }}" required>
        <br>

        <label for="name">區域名稱:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $cityarea->name) }}" required>
        <br>

        <label for="used">使用中:</label>
        <input type="checkbox" id="used" name="used" value="1" {{ $cityarea->used ? 'checked' : '' }}>
        <br>

        <label for="Seq">排序:</label>
        <input type="number" id="seq" name="seq" value="{{ old('seq', $cityarea->seq) }}">
        <br>

        <input type="hidden" name="page" value="{{ $currentPage }}">

        <button type="submit">更新資料</button>
        
    </form>

    <a href="{{ route('cityareas.index', ['page' => $currentPage]) }}">Back to list</a>
</body>
</html>

