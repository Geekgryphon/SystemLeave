<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新增區域街道</title>
</head>
<body>
    <h3>新增區域街道</h3>

    <form action="{{ route('citystreets.store')}}" method="POST">
        @csrf
        <label for="PostalCode">郵政區碼: </label>
        <input type="text" id="PostalCode" name="PostalCode">
        <br>

        <label for="CityAreaID">縣市: </label>
        <select name="CityAreaID" id="CityAreaID">
            <option value="">請選擇一個縣市</option>
            @foreach ($cityareas as $cityarea)
                <option value="{{ $cityarea->id }}">{{ $cityarea->Name }}</option>
            @endforeach
        </select>
        <br/>

        <label for="Name">街區名稱: </label>
        <input type="text" id="Name" name="Name">
        <br/>

        <label for="Seq">排列順序:</label>
        <input type="number" id="Seq" name="Seq">
        <br>

        <button type="submit">新增街區</button>
    </form>
</body>
</html>