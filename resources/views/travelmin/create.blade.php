<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Unit Jalan</title>
    <link href="assets/img/l_web.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Input Data Unit Jalan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('travelmin.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="ndp" class="form-label">NDP</label>
                                <input type="text" name="ndp" id="ndp" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="unit" class="form-label">Unit</label>
                                <select name="unit" id="unit" class="form-select" required>
                                    <option value="" disabled selected>Pilih Unit</option>
                                    <option value="Hiace Commuter">Hiace Commuter</option>
                                    <option value="Hiace Premio">Hiace Premio</option>
                                    <option value="All New Avanza">All New Avanza</option>
                                    <option value="Avanza">Avanza</option>
                                    <option value="Innova Reborn">Innova Reborn</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" rows="4" required></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
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
