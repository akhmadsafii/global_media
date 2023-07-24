<!-- resources/views/soal.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Soal</title>
</head>

<body>
    <h1>Daftar Soal</h1>

    <ul>
        <li style="color: danger">
            Soal No. 3: Membuat tampilan X O X X O
            <a href="{{route('diagram.index')}}" target="_blank">Lihat Jawaban</a>
        </li>
        <li>
            Soal No. 4: Memerika Sting Palindrom
            <a href="{{ route('palindrom.index') }}" target="_blank">Lihat Jawaban</a>
        </li>
        <li>
            Soal No. 5: Menghitung luas lingkaran dan volume bola
            <a href="{{ route('shape.index') }}" target="_blank">Lihat Jawaban</a>
        </li>
        <li>
            Soal No. 6: Treeview Daerah
            <a href="{{ route('treeview.index') }}" target="_blank">Lihat Jawaban</a>
        </li>
        <li style="color: danger">
            Soal No. 7: Membuat Output Codingan
            <a href="{{ route('treeview.index') }}" target="_blank">Lihat Jawaban</a>
        </li>
        <li>
            Soal No. 8: Mencari nilai array dan menentukan bilangan ganjil atau genap
            <a href="{{ route('number.index') }}" target="_blank">Lihat Jawaban</a>
        </li>
        <li>
            Soal No. 9: Membuat Crud dengan ajax
            <a href="{{ route('post.index') }}" target="_blank">Lihat Jawaban</a>
        </li>
    </ul>
</body>

</html>
