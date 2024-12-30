<h3>Edit Data Transaksi</h3>
<?php
echo form_open('transaksi/edit/' . $record['id_transaksi'], ['class' => 'needs-validation', 'novalidate' => '']);
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="mb-3">
                <label for="id_pesanan" class="form-label">ID Pesanan</label>
                <select class="form-select" id="id_pesanan" name="id_pesanan" required>
                    <?php foreach ($pesanan as $p): ?>
                        <option value="<?php echo $p->id_pesanan; ?>"
                            <?php echo ($p->id_pesanan == $record['id_pesanan']) ? 'selected' : ''; ?>>
                            <?php echo $p->nama_pelanggan . " (" . $p->id_pesanan . ")"; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    Harap pilih ID Pesanan.
                </div>
            </div>
            <div class="mb-3">
                <label for="total_harga" class="form-label">Total Harga</label>
                <input type="number" class="form-control" id="total_harga" name="total_harga"
                    value="<?php echo $record['total_harga']; ?>" required>
                <div class="invalid-feedback">
                    Total harga harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
                <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi"
                    value="<?php echo $record['tanggal_transaksi']; ?>" required>
                <div class="invalid-feedback">
                    Tanggal transaksi harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                <select class="form-select" id="metode_pembayaran" name="metode_pembayaran" required>
                    <option value="transfer" <?php echo ($record['metode_pembayaran'] == 'transfer') ? 'selected' : ''; ?>>Transfer</option>
                    <option value="cod" <?php echo ($record['metode_pembayaran'] == 'cod') ? 'selected' : ''; ?>>COD</option>
                    <option value="case" <?php echo ($record['metode_pembayaran'] == 'case') ? 'selected' : ''; ?>>Case</option>
                </select>
                <div class="invalid-feedback">
                    Harap pilih metode pembayaran.
                </div>
            </div>
            <div class="mb-3">
                <label for="status_transaksi" class="form-label">Status Transaksi</label>
                <select class="form-select" id="status_transaksi" name="status_transaksi" required>
                    <option value="sudah" <?php echo ($record['status_transaksi'] == 'sudah') ? 'selected' : ''; ?>>Sudah</option>
                    <option value="belum" <?php echo ($record['status_transaksi'] == 'belum') ? 'selected' : ''; ?>>Belum</option>
                </select>
                <div class="invalid-feedback">
                    Harap pilih status transaksi.
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo anchor('transaksi', 'Kembali', ['class' => 'btn btn-secondary']); ?>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

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