<!-- resources/views/post.blade.php -->

<html>
<head>
    <title>CRUD Post</title>
    <!-- Tambahkan referensi CSS dan JavaScript yang diperlukan -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</head>
<body>

<div class="container mt-5">

    <!-- Tampilan Daftar Posting -->
    <h2 class="mb-3">Daftar Posting</h2>
    <table id="postTable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <!-- Formulir Tambah Posting -->
    <div class="row mt-5">
        <div class="col-md-6">
            <h2>Tambah Posting</h2>
            <form id="addForm">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea class="form-control" name="content" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>

        <!-- Formulir Edit Posting -->
        <div class="col-md-6">
            <h2>Edit Posting</h2>
            <form id="editForm">
                @csrf
                <input type="hidden" name="post_id">
                <div class="form-group">
                    <label for="edit_title">Title:</label>
                    <input type="text" class="form-control" name="edit_title" required>
                </div>
                <div class="form-group">
                    <label for="edit_content">Content:</label>
                    <textarea class="form-control" name="edit_content" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript untuk mengatur operasi CRUD dengan Ajax -->
<script>
    $(document).ready(function() {
        // Inisialisasi DataTables
        var table = $('#postTable').DataTable({
            ajax: {
                url: "{{ route('post.get_data') }}",
                dataSrc: ""
            },
            columns: [
                { data: "id" },
                { data: "title" },
                { data: "content" },
                {
                    data: null,
                    render: function (data, type, row) {
                        return '<button class="btn-edit" data-id="' + row.id + '">Edit</button> ' +
                               '<button class="btn-delete" data-id="' + row.id + '">Delete</button>';
                    }
                }
            ]
        });

        // Tambah Posting dengan Ajax
        $('#addForm').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('post.store') }}",
                type: "POST",
                data: $('#addForm').serialize(),
                success: function (response) {
                    $('#addForm')[0].reset();
                    table.ajax.reload();
                }
            });
        });

        // Tampilkan Form Edit dan Mengisi Data Posting yang Akan Diedit
        $('#postTable').on('click', '.btn-edit', function () {
            var id = $(this).data('id');
            $.ajax({
                url: "{{ route('post.edit') }}",
                type: "GET",
                data: { id: id },
                success: function (response) {
                    $('#editForm input[name="post_id"]').val(response.id);
                    $('#editForm input[name="edit_title"]').val(response.title);
                    $('#editForm textarea[name="edit_content"]').val(response.content);
                }
            });
        });

        // Update Posting dengan Ajax
        $('#editForm').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('post.update') }}",
                type: "POST",
                data: $('#editForm').serialize(),
                success: function (response) {
                    $('#editForm')[0].reset();
                    table.ajax.reload();
                }
            });
        });

        // Delete Posting dengan Ajax
        $('#postTable').on('click', '.btn-delete', function () {
            var id = $(this).data('id');
            if (confirm('Apakah Anda yakin ingin menghapus posting ini?')) {
                $.ajax({
                    url: "{{ route('post.delete') }}",
                    type: "GET",
                    data: { id: id },
                    success: function (response) {
                        table.ajax.reload();
                    }
                });
            }
        });
    });
</script>

</body>
</html>
