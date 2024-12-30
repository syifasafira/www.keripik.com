<h3 class="mb-4">Data Pesanan</h3>
<div class="mb-3">
    <a href="<?php echo base_url('pesanan/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
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
            <th>Id Pesanan</th>
            <th>Nama Pelanggan</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th colspan="2">Operasi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($record->result() as $r) {
            echo "<tr>
        <td>$no</td>
        <td>$r->id_pesanan</td>
        <td>$r->nama_pelanggan</td>
        <td>$r->nama_produk</td>
        <td>$r->jumlah</td>
        <td><a href='" . base_url('pesanan/edit/' . $r->id_pesanan) . "' class='btn btn-warning btn-sm'>Edit</a></td>
        <td><a href='" . base_url('pesanan/delete/' . $r->id_pesanan) . "' class='btn btn-danger btn-sm'>Delete</a></td>
        </tr>";
            $no++;
        }
        ?>
    </tbody>
</table>
<a href="<?php echo base_url(); ?>" class="btn btn-secondary">Back</a>

<!-- Tambahkan ini ke head atau footer proyek Anda -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Tambahkan library icon bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">