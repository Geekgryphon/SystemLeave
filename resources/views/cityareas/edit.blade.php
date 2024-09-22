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
        <input type="text" id="PostalCode" name="PostalCode" value="{{ old('PostalCode', $cityarea->PostalCode) }}" required>
        <br>

        <label for="Name">區域名稱:</label>
        <input type="text" id="Name" name="Name" value="{{ old('Name', $cityarea->Name) }}" required>
        <br>

        <label for="Used">使用中:</label>
        <input type="checkbox" id="Used" name="Used" value="1" {{ $cityarea->Used ? 'checked' : '' }}>
        <br>

        <label for="Seq">排序:</label>
        <input type="number" id="Seq" name="Seq" value="{{ old('Seq', $cityarea->Seq) }}">
        <br>

        <input type="hidden" name="page" value="{{ $currentPage }}">

        <button type="submit">更新資料</button>
        
    </form>

    <a href="{{ route('cityareas.index', ['page' => $currentPage]) }}">Back to list</a>
</body>
</html>

