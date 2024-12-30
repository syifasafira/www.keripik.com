<h3 class="mb-4">Tambah Pelanggan</h3>
<?php echo form_open('pelanggan/tambah'); ?>
<div class="mb-3">
    <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Pelanggan">
</div>
<div class="mb-3">
    <label for="no_telepon" class="form-label">No Telepon</label>
    <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="No Telepon">
</div>
<div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
</div>
<div class="d-flex justify-content-between">
    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
    <a href="<?php echo base_url('pelanggan'); ?>" class="btn btn-secondary">Kembali</a>
</div>
<?php echo form_close(); ?>

<!-- Tambahkan ini ke head atau footer proyek Anda -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>