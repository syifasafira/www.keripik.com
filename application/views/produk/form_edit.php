<h3>Edit Data Produk</h3>
<?php
echo form_open('produk/edit/' . $record['id_produk'], ['class' => 'needs-validation', 'novalidate' => '']);
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                    value="<?php echo $record['nama_produk']; ?>" required>
                <div class="invalid-feedback">
                    Nama produk harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok"
                    value="<?php echo $record['stok']; ?>" required>
                <div class="invalid-feedback">
                    Stok harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="harga_jual" class="form-label">Harga Jual</label>
                <input type="number" class="form-control" id="harga_jual" name="harga_jual"
                    value="<?php echo $record['harga_jual']; ?>" required>
                <div class="invalid-feedback">
                    Harga jual harus diisi.
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo anchor('produk', 'Kembali', ['class' => 'btn btn-secondary']); ?>
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