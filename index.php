<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>


<body>
    <div class="container">
    <h1> Mahasiswa </h1>
    <small class="text-muted">Halaman Pengelolaan Data Mahasiswa</small>

    <div class="row">
    <div class="col-6 mt-5">
    <form action="" method="post">
        <div class="input group sb-3">
        <input class="form-control" type="text">
        <button class="btn btn-info" type="submit">Cari</button>
    </div>
    </form>
    </div>


    <div class="col-6">
    <a class="float-right btn btn-success" href="tambah.php">Tambah</a>
    </div>
    </div>

    <table class="table table-striped">
    <tr>
        <th>#</th>
        <th>NIM</th>
        <th>Nama mahasiswa</th>
        <th>Program Studi</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <tr>
        <td>1</td>
        <td>081711633001</td>
        <td>Nuril Maftuchah</td>
        <td>S1 - Sistem Informasi</td>
        <td>nurilmaft@gmail.com</td>
        <td>
            <a class="btn btn-warning" href="ubah.php">Ubah</a>
            <a class="btn btn-danger" href="hapus.php">Hapus</a>
        </td>
    </tr>

    </table>
    </div>
</body>
</html>