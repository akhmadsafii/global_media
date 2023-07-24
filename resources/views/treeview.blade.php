<!-- resources/views/treeview.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Treeview Daerah</title>
    <style>
        /* CSS untuk treeview */
    </style>
</head>
<body>
    <h2>Treeview Daerah</h2>
    <ul>
        @foreach ($provinces as $province)
            <li>{{ $province->name }}
                <ul>
                    @foreach ($province->districts as $district)
                        <li>{{ $district->name }}
                            <ul>
                                @foreach ($district->subdistricts as $subdistrict)
                                    <li>{{ $subdistrict->name }}</li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
