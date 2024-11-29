<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="{{ route('berita.update', $data->id) }}" method="POST">
            @csrf
            @method ('PUT')
           <div class="mb-3">
            <label for="judul" class="form-label">Judul Berita</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{$data->judul_berita}}" placeholder="Ketik Judul">
           </div>
           <div class="mb-3">
            <label for="isi_berita" class="form-label">Isi Berita</label>
            <textarea name="isi_berita" id="isi_berita" cols="30" rows="10" class="form-control" placeholder="Isi berita" {{$data->isi_berita}}></textarea>
           </div>
           <div class="mb-3">
            <button type="submit" value="simpan" class="btn btn-primary">Simpan</button>
           </div>
        </form>
    </div>
</body>
</html>
