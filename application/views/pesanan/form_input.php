<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Pesanan</title>
    <!-- Tambahkan ini ke head proyek Anda -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h3 class="mb-4">Tambah Data Pesanan</h3>
        <?php echo form_open('pesanan/tambah'); ?>
        <div class="mb-3">
            <label for="id_pelanggan" class="form-label">Nama Pelanggan</label>
            <select class="form-select" id="id_pelanggan" name="id_pelanggan" required>
                <option value="" disabled selected>Pilih Pelanggan</option>
                <?php foreach ($pelanggan as $p) : ?>
                    <option value="<?php echo $p->id_pelanggan; ?>">
                        <?php echo $p->nama_pelanggan; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="id_produk" class="form-label">Nama Produk</label>
            <select class="form-select" id="id_produk" name="id_produk" required>
                <option value="" disabled selected>Pilih Produk</option>
                <?php foreach ($produk as $pr) : ?>
                    <option value="<?php echo $pr->id_produk; ?>">
                        <?php echo $pr->nama_produk; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <a href="<?php echo base_url('pesanan'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
        <?php echo form_close(); ?>
    </div>
</body>

</html>