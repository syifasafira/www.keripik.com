<h3>Edit Data Modal</h3>
<?php
echo form_open('modal/edit', ['class' => 'needs-validation', 'novalidate' => '']);
?>
<input type="hidden" name="id_modal" value="<?php echo isset($record['id_modal']) ? $record['id_modal'] : ''; ?>">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal"
                    value="<?php echo isset($record['tanggal']) ? $record['tanggal'] : ''; ?>" required>
                <div class="invalid-feedback">
                    Tanggal harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="jumlah_modal" class="form-label">Jumlah Modal</label>
                <input type="text" class="form-control" id="jumlah_modal" name="jumlah_modal"
                    placeholder="Masukkan jumlah modal" value="<?php echo isset($record['jumlah_modal']) ? $record['jumlah_modal'] : ''; ?>" required>
                <div class="invalid-feedback">
                    Jumlah modal harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan"
                    placeholder="Masukkan keterangan" value="<?php echo isset($record['keterangan']) ? $record['keterangan'] : ''; ?>">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <?php echo anchor('modal', 'Kembali', ['class' => 'btn btn-secondary']); ?>
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