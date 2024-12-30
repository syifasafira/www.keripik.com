<h3 class="mb-4">Tambah Data Transaksi</h3>
<?php echo form_open('transaksi/tambah'); ?>
<div class="mb-3">
    <label for="id_pesanan" class="form-label">ID Pesanan</label>
    <select class="form-select" id="id_pesanan" name="id_pesanan" required>
        <option value="">Pilih Pesanan</option>
        <?php foreach ($pesanan as $p): ?>
            <option value="<?php echo $p->id_pesanan; ?>">
                <?php echo $p->nama_pelanggan . " (" . $p->id_pesanan . ")"; ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>
<div class="mb-3">
    <label for="total_harga" class="form-label">Total Harga</label>
    <input type="number" class="form-control" id="total_harga" name="total_harga" required>
</div>
<div class="mb-3">
    <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
    <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" required>
</div>
<div class="mb-3">
    <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
    <select class="form-select" id="metode_pembayaran" name="metode_pembayaran" required>
        <option value="transfer">Transfer</option>
        <option value="cod">COD</option>
        <option value="case">Case</option>
    </select>
</div>
<div class="mb-3">
    <label for="status_transaksi" class="form-label">Status Transaksi</label>
    <select class="form-select" id="status_transaksi" name="status_transaksi" required>
        <option value="sudah">Sudah</option>
        <option value="belum">Belum</option>
    </select>
</div>
<div class="d-flex justify-content-between">
    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
    <a href="<?php echo base_url('transaksi'); ?>" class="btn btn-secondary">Kembali</a>
</div>
<?php echo form_close(); ?>

<!-- Tambahkan ini ke head atau footer proyek Anda -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>