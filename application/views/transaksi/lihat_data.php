<h3 class="mb-4">Data Transaksi</h3>
<div class="mb-3">
    <a href="<?php echo base_url('transaksi/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
    <button class="btn btn-danger">
        <i class="bi bi-file-earmark-pdf"></i> PDF
    </button>
    <button class="btn btn-success">
        <i class="bi bi-file-earmark-excel"></i> Excel
    </button>
</div>
<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>ID Transaksi</th>
            <th>Nama Pelanggan (ID Pesanan)</th>
            <th>Total Harga</th>
            <th>Tanggal Transaksi</th>
            <th>Metode Pembayaran</th>
            <th>Status Transaksi</th>
            <th colspan="2">Operasi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($record as $r): ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $r->id_transaksi; ?></td>
                <td><?php echo $r->nama_pelanggan . " (" . $r->id_pesanan . ")"; ?></td>
                <td><?php echo number_format($r->total_harga, 0, ',', '.'); ?></td>
                <td><?php echo $r->tanggal_transaksi; ?></td>
                <td><?php echo ucfirst($r->metode_pembayaran); ?></td>
                <td><?php echo ucfirst($r->status_transaksi); ?></td>
                <td><a href="<?php echo base_url('transaksi/edit/' . $r->id_transaksi); ?>" class="btn btn-warning btn-sm">Edit</a></td>
                <td><a href="<?php echo base_url('transaksi/delete/' . $r->id_transaksi); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Delete</a></td>
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