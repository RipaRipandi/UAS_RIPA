<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penggajihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
    <div class="container mt-4">
        <div class="text-center mb-4">
            <img src="logo.png" alt="Logo" class="img-fluid" style="max-width: 200px;">
            <h2 class="mt-3">PENGGAJIHAN<br>GURU/KARYAWAN YAYASAN ASSALAAM</h2>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="UAS2.php" method="POST">
                    <fieldset>
                        <legend class="text-center mb-4 h4">Data Penggajihan</legend>
                        <div class="row mb-3">
                            <div class="md-6">
                                <label for="no" class="form-label">No</label>
                                <input type="number" id="no" name="no" class="form-control" placeholder="No" required>
                            </div>
                            <div class="md-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="-md-6">
                                <label for="unit" class="form-label">Unit Pendidikan</label>
                                <select id="unit" name="unit" class="form-select" required>
                                    <option value="">Pilih Unit Pendidikan</option>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMK">SMK</option>
                                </select>
                            </div>
                            <div class="-md-6">
                                <label for="tanggal_gaji" class="form-label">Tanggal Gaji</label>
                                <input type="date" id="tanggal_gaji" name="gaji" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Kolom Gaji -->
                            <div class="col-md-6">
                                <fieldset class="border p-3">
                                    <legend class="w-auto px-2"><b>Gaji</b></legend>
                                    <div class="mb-3">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <select id="jabatan" name="jabatan" class="form-select" required>
                                            <option value="">Pilih Jabatan</option>
                                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                                            <option value="Wakasek">Wakasek</option>
                                            <option value="Guru">Guru</option>
                                            <option value="Ob">OB</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="lama_kerja" class="form-label">Lama Kerja</label>
                                        <input type="number" id="lama_kerja" name="lama_kerja" class="form-control" placeholder="Lama Kerja" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status_kerja" class="form-label">Status Kerja</label>
                                        <select id="status_kerja" name="status" class="form-select" required>
                                            <option value="">Pilih Status Kerja</option>
                                            <option value="Tetap">Tetap</option>
                                            <option value="Kontrak">Kontrak</option>
                                        </select>
                                    </div>
                                </fieldset>
                            </div>

                            <!-- Kolom Potongan -->
                            <div class="col-md-6">
                                <fieldset class="border p-3">
                                    <legend class="w-auto px-2">Potongan</legend>
                                    <div class="mb-3">
                                        <label for="bpjs" class="form-label">BPJS</label>
                                        <input type="number" id="" name="bpjs" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pinjaman" class="form-label">Pinjaman</label>
                                        <input type="number" id="pinjaman" name="pinjaman" class="form-control" placeholder="Pinjaman">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cicilan" class="form-label">Cicilan</label>
                                        <input type="number" id="cicilan" name="cicilan" class="form-control" placeholder="Cicilan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="infaq" class="form-label">Infaq</label>
                                        <input type="number" id="infaq" name="infaq" class="form-control" placeholder="Infaq">
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" name="proses" class="btn btn-primary">Proses</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <hr><br><br>
</body>
</html>

