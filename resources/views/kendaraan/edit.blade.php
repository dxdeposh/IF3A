<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Edit Kendaraan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <h1>Edit Kendaraan</h1>
        <form action="{{ route('kendaraan.update', $kendaraan) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nomor_kendaraan">Nomor Kendaraan</label>
                <input type="text" name="nomor_kendaraan" class="form-control" id="nomor_kendaraan"
                    value="{{ $kendaraan->nomor_kendaraan }}" required>
            </div>
            <div class="form-group">
                <label for="jenis_kendaraan">Jenis Kendaraan</label>
                <input type="text" name="jenis_kendaraan" class="form-control" id="jenis_kendaraan"
                    value="{{ $kendaraan->jenis_kendaraan }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
        </form>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
