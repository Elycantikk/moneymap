<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Pengguna</h1>
        <a href="/users/create" class="btn btn-primary mb-3">Tambah Pengguna</a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data, bisa di-loop melalui Blade -->
                <tr>
                    <td>1</td>
                    <td>Nama Pengguna</td>
                    <td>user@example.com</td>
                    <td>
                        <a href="/users/1" class="btn btn-info btn-sm">Lihat</a>
                        <a href="/users/1/edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/users/1" method="POST" style="display:inline;">
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
