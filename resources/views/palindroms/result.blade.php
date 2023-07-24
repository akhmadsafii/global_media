<!-- resources/views/result.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Cek Palindrome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Hasil Cek Palindrome</h2>
        @if ($result === 1)
            <p>Input merupakan string palindrome dengan total ASCII <= 4000</p>
            RESULT = <b>{{$result}}</b>
        @else
            <p>Input tidak merupakan string palindrome atau total ASCII > 4000</p>
            RESULT =  <b>{{$result}}</b>
        @endif
        <br>
        <a href="{{ route('palindrom.index') }}" class="btn btn-primary">Kembali</a>
    </div>
</body>
</html>
