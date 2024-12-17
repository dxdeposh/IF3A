<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tambah Kendaraan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS (atau custom CSS jika Anda menggunakan) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="container mt-5">
        <h1>Tambah Kendaraan</h1>
        <form action="{{ route('kendaraan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomor_kendaraan">Nomor Kendaraan</label>
                <input type="text" name="nomor_kendaraan" class="form-control" id="nomor_kendaraan" required>
            </div>
            <div class="form-group">
                <label for="jenis_kendaraan">Jenis Kendaraan</label>
                <input type="text" name="jenis_kendaraan" class="form-control" id="jenis_kendaraan" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>

    <!-- Optional Bootstrap JS (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
