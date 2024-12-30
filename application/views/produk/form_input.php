<h3 class="mb-4">Tambah Data Produk</h3>
<?php echo form_open('produk/tambah'); ?>
<div class="mb-3">
    <label for="nama_produk" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
</div>
<div class="mb-3">
    <label for="stok" class="form-label">Stok</label>
    <input type="number" class="form-control" id="stok" name="stok" required>
</div>
<div class="mb-3">
    <label for="harga_jual" class="form-label">Harga Jual</label>
    <input type="number" class="form-control" id="harga_jual" name="harga_jual" required>
</div>
<div class="d-flex justify-content-between">
    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
    <a href="<?php echo base_url('produk'); ?>" class="btn btn-secondary">Kembali</a>
</div>
<?php echo form_close(); ?>

<!-- Tambahkan ini ke head atau footer proyek Anda -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>