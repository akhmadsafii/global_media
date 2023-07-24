<!-- resources/views/shape_calculator.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Shape Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Shape Calculator</h2>

        <form action="{{ route('shape.calculate') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="radiusCircle">Jari-jari Lingkaran:</label>
                <input type="number" class="form-control" name="radiusCircle" id="radiusCircle" required>
            </div>

            <div class="form-group">
                <label for="radiusSphere">Jari-jari Bola:</label>
                <input type="number" class="form-control" name="radiusSphere" id="radiusSphere" required>
            </div>

            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>

        @isset($circleArea, $sphereVolume)
            <div class="mt-3">
                <p>Luas Lingkaran dengan jari-jari {{ $radiusCircle }} adalah: {{ $circleArea }}</p>
                <p>Volume Bola dengan jari-jari {{ $radiusSphere }} adalah: {{ $sphereVolume }}</p>
            </div>
        @endisset
    </div>
</body>
</html>
