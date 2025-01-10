<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Unit Jalan</title>
    <link href="assets/img/l_web.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-warning text-white">
                        <h4 class="mb-0">Edit Data Unit Jalan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('travelmin.update', $travel->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="ndp" class="form-label">NDP</label>
                                <input type="text" name="ndp" id="ndp" class="form-control" value="{{ $travel->ndp }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{ $travel->nama_lengkap }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="unit" class="form-label">Unit</label>
                                <select name="unit" id="unit" class="form-select" required>
                                    <option value="" disabled>Pilih Unit</option>
                                    <option value="Hiace Commuter" {{ $travel->unit == 'Hiace Commuter' ? 'selected' : '' }}>Hiace Commuter</option>
                                    <option value="Hiace Premio" {{ $travel->unit == 'Hiace Premio' ? 'selected' : '' }}>Hiace Premio</option>
                                    <option value="All New Avanza" {{ $travel->unit == 'All New Avanza' ? 'selected' : '' }}>All New Avanza</option>
                                    <option value="Avanza" {{ $travel->unit == 'Avanza' ? 'selected' : '' }}>Avanza</option>
                                    <option value="Innova Reborn" {{ $travel->unit == 'Innova Reborn' ? 'selected' : '' }}>Innova Reborn</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" rows="4" required>{{ $travel->alamat }}</textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
