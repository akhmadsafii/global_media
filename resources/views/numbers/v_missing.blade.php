<!DOCTYPE html>
<html>

<head>
    <title>Find Missing Numbers</title>
</head>

<body>
    <form method="post" action="{{ route('number.find_missing') }}">
        @csrf
        <label for="numbers">Masukkan angka (pisahkan dengan koma):</label>
        <input type="text" name="numbers" id="numbers">
        <button type="submit">Cari</button>
    </form>
</body>

</html>
