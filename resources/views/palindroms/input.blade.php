<!-- resources/views/input.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Palindrome Checker</h2>
        <form action="{{ route('palindrom.check') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="inputString">Masukkan string:</label>
                <input type="text" class="form-control" name="inputString" id="inputString" required>
            </div>
            <button type="submit" class="btn btn-primary">Cek</button>
        </form>

        @isset($result)
            <div class="mt-3">
                @if ($result === 1)
                    <p>Input merupakan string palindrome dengan total ASCII <= 4000</p>
                @else
                    <p>Input tidak merupakan string palindrome atau total ASCII > 4000</p>
                @endif
            </div>
        @endisset
    </div>
</body>
</html>
