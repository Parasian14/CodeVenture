<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Materi | Admin</title>

    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.2-dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons-1.10.5/font/bootstrap-icons.css') }}">
</head>

<body class="bg-body-tertiary">

    <section class="container-md">
        <h2 class="text-center">Edit Materi</h2>
        <form method = 'post' action="{{ route('Materi.update',['Materi'=>$materi]) }}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Nama</label>
                <input type="text" class="form-control border-black" name = "judul" value = "{{ $materi->judul }}" id="judul" aria-describedby="judulHelp">
                <div id="judulHelp" class="form-text">Nama Learning Path.</div>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Deskripsi</label>
                <input type="text" class="form-control border-black" name = "deskripsi" value = "{{ $materi->deskripsi }}" id="judul" aria-describedby="deskHelp">
                <div id="deskHelp" class="form-text">Deskripsi Learning Path.</div>
            </div>
            <div class="mb-3">
                <label for="uploadFoto" class="form-label">Upload Foto</label>
                <input class="form-control form-control-sm border-black" type="file" accept="image/*" name = "image" id="uploadFoto" multiple>
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <textarea class="form-control border-black" id="isi" name = "isi"rows="3">{{ $materi->isi }}</textarea>
            </div>
            <div class="text-center">
                <a href="{{ route('Materi.index') }}" class="btn btn-danger">Kembali</a>
                <form>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </form>
    </section>

    <script src="https://cdn.tiny.cloud/1/njhlhnj2vwtga9wxc522vpphifulk0a8fe5bp1m9r8ert7ux/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('assets/JS/rte.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-5.3.2-dist/js/bootstrap.bundle.js') }}"></script>
</body>

</html>