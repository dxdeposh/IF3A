<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <h2>Berita</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

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
                    <td>
                        <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <a href="{{ route('berita.show', $item->id) }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i> Hapus</a>
                        {{-- <form action="{{ route('berita.destroy', $item->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form> --}}
                    </td>
                    <td>{{ $item->judul_berita }}</td>
                    <td>{{ $item->isi_berita }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
