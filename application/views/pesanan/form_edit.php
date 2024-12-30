<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Pesanan</title>
    <!-- Tambahkan ini ke head proyek Anda -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h3 class="mb-4">Edit Data Pesanan</h3>
        <?php echo form_open('pesanan/edit/' . $record['id_pesanan'], ['class' => 'needs-validation', 'novalidate' => '']); ?>
        <input type="hidden" name="id_pesanan" value="<?php echo $record['id_pesanan']; ?>">

        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan"
                value="<?php echo $record['nama_pelanggan']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="id_produk" class="form-label">Nama Produk</label>
            <select class="form-select" id="id_produk" name="id_produk" required>
                <?php foreach ($produk as $p): ?>
                    <option value="<?php echo $p->id_produk; ?>"
                        <?php echo ($p->id_produk == $record['id_produk']) ? 'selected' : ''; ?>>
                        <?php echo $p->nama_produk; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback">
                Silakan pilih produk.
            </div>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah"
                value="<?php echo $record['jumlah']; ?>" required>
            <div class="invalid-feedback">
                Jumlah harus diisi.
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url('pesanan'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
        <?php echo form_close(); ?>
    </div>

    <script>
        // Script untuk validasi Bootstrap
        (function() {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
        })();
    </script>
</body>

</html>