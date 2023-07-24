<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>
    <h2>Hasil Pencarian:</h2>
    <p>Nomor: {{ $number }}</p>
    <p>
        @if ($isEven)
            {{ $number }} adalah bilangan genap.
        @else
            {{ $number }} adalah bilangan ganjil.
        @endif
    </p>
</body>
</html>
