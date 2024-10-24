<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增縣市街區</title>
</head>
<body>
    <h3>街區新增畫面</h3>

    <form action="{{ route('cityareas.store') }}" method="POST">
        @csrf

        <label for="postalCode">郵政區碼: </label>
        <input type="text" id="postalCode" name="postalCode">
        <br>

        <label for="cityID">縣市: </label>
        <select name="cityID" id="CityID">
            <option value="">請選擇一個縣市</option>
            @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->Name }}</option>
            @endforeach
        </select>
        <br/>

        <label for="name">街區名稱: </label>
        <input type="text" id="name" name="Name">
        <br/>

        <label for="seq">排列順序:</label>
        <input type="number" id="seq" name="seq">
        <br>

        <button type="submit">新增街區</button>

    </form>
</body>
</html>