@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Kategori Berita</h1>

        <!-- Form Edit Kategori Berita -->
        <div class="card shadow-sm p-4">
            <form action="{{ route('kategori-berita.update', $kategoriBerita->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Input Nama Kategori -->
                <div class="form-group mb-3">
                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                    <input type="text" name="nama_kategori" id="nama_kategori"
                        class="form-control @error('nama_kategori') is-invalid @enderror"
                        value="{{ old('nama_kategori', $kategoriBerita->nama_kategori) }}" required>
                    @error('nama_kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Button Update -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg px-4 py-2">
                        <i class="fas fa-save"></i> Update Kategori
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Custom Script untuk Animasi dan UI -->
    <script>
        // Menambahkan animasi fokus pada input form
        document.getElementById('nama_kategori').addEventListener('focus', function() {
            this.style.boxShadow = '0 0 8px rgba(0, 123, 255, 0.5)';
        });

        document.getElementById('nama_kategori').addEventListener('blur', function() {
            this.style.boxShadow = 'none';
        });
    </script>
@endsection
