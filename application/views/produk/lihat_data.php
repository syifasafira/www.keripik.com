<h3 class="mb-4">Data Produk</h3>
<div class="mb-3">
    <a href="<?php echo base_url('produk/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
    <a class="btn btn-danger" href="<?= base_url('produk/cetak_pdf'); ?>">
        <i class="bi bi-file-earmark-pdf"></i> PDF
    </a>

</div>
<hr>
<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Stok</th>
            <th>Harga Jual</th>
            <th colspan="2">Operasi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($record as $r): ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $r->id_produk; ?></td>
                <td><?php echo $r->nama_produk; ?></td>
                <td><?php echo $r->stok; ?></td>
                <td><?php echo number_format($r->harga_jual, 0, ',', '.'); ?></td>
                <td><a href="<?php echo base_url('produk/edit/' . $r->id_produk); ?>" class="btn btn-warning btn-sm">Edit</a></td>
                <td><a href="<?php echo base_url('produk/delete/' . $r->id_produk); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo base_url(); ?>" class="btn btn-secondary">Kembali</a>

<!-- Tambahkan ini ke head atau footer proyek Anda -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Tambahkan library icon bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">