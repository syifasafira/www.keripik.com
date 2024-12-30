<h3 class="mb-4">Tambah Modal</h3>
<?php echo form_open('modal/tambah'); ?>
<div class="mb-3">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
</div>
<div class="mb-3">
    <label for="jumlah_modal" class="form-label">Jumlah Modal</label>
    <input type="text" class="form-control" id="jumlah_modal" name="jumlah_modal" placeholder="Jumlah Modal">
</div>
<div class="mb-3">
    <label for="keterangan" class="form-label">Keterangan</label>
    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
</div>
<div>
    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
</div>
<?php echo form_close(); ?>

<!-- Tambahkan ini ke head atau footer proyek Anda -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>