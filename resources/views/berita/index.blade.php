<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <h2>Berita</h2>
    <a href="{{ route('berita.create') }}" class="btn btn-success">Tambah Data</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Aksi</th>
                <th>Judul Berita</th>
                <th>Isi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td></td>
                <td>{{$item->judul_berita}}</td>
                <td>{{$item->isi_berita}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
