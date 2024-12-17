<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Daftar Kendaraan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation') <!-- Optional, jika ada navigation -->

        <div class="container mt-4">
            <h1>Daftar Kendaraan</h1>
            <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah Kendaraan</a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Kendaraan</th>
                        <th>Jenis Kendaraan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kendaraans as $kendaraan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kendaraan->nomor_kendaraan }}</td>
                            <td>{{ $kendaraan->jenis_kendaraan }}</td>
                            <td>
                                <a href="{{ route('kendaraan.edit', $kendaraan) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('kendaraan.destroy', $kendaraan) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus kendaraan ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
