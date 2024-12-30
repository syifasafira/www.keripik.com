<h3>Edit Data Pelanggan</h3>
<?php
echo form_open('pelanggan/edit', ['class' => 'needs-validation', 'novalidate' => '']);
?>
<input type="hidden" name="id_pelanggan" value="<?php echo $record['id_pelanggan']; ?>">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="mb-3">
                <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan"
                    placeholder="Masukkan nama pelanggan" value="<?php echo $record['nama_pelanggan']; ?>" required>
                <div class="invalid-feedback">
                    Nama pelanggan harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="no_telepon" class="form-label">No Telepon</label>
                <input type="text" class="form-control" id="no_telepon" name="no_telepon"
                    placeholder="Masukkan no telepon" value="<?php echo $record['no_telepon']; ?>" required>
                <div class="invalid-feedback">
                    No telepon harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat"
                    placeholder="Masukkan alamat" value="<?php echo $record['alamat']; ?>">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo anchor('pelanggan', 'Kembali', ['class' => 'btn btn-secondary']); ?>
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