<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Unit Jalan</title>
    <link href="assets/img/l_web.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0">Detail Unit Jalan</h4>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">NDP</dt>
                            <dd class="col-sm-9">{{ $travel->ndp }}</dd>

                            <dt class="col-sm-3">Nama Lengkap</dt>
                            <dd class="col-sm-9">{{ $travel->nama_lengkap }}</dd>

                            <dt class="col-sm-3">Unit</dt>
                            <dd class="col-sm-9">{{ $travel->unit }}</dd>

                            <dt class="col-sm-3">Alamat</dt>
                            <dd class="col-sm-9">{{ $travel->alamat }}</dd>
                        </dl>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('travelmin.edit', $travel->id) }}" class="btn btn-warning me-2">Edit</a>
                            <form action="{{ route('travelmin.destroy', $travel->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
