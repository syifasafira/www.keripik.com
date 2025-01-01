<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h3 class="mb-4">Data Pelanggan</h3>
        <div class="mb-3">
            <a href="<?= base_url('pelanggan/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
            <a class="btn btn-danger" href="<?= base_url('pelanggan/cetak_pdf'); ?>">
                <i class="bi bi-file-earmark-pdf"></i> PDF
            </a>
        </div>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>ID Pelanggan</th>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th colspan="2">Operasi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($pelanggan as $p) {
                    echo "<tr>
                <td>{$no}</td>
                <td>{$p['id_pelanggan']}</td>
                <td>{$p['nama_pelanggan']}</td>
                <td>{$p['no_telepon']}</td>
                <td>{$p['alamat']}</td>
                <td><a href='" . base_url('pelanggan/edit/' . $p['id_pelanggan']) . "' class='btn btn-warning btn-sm'>Edit</a></td>
                <td><a href='" . base_url('pelanggan/delete/' . $p['id_pelanggan']) . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Delete</a></td>
                </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <a href="<?= base_url(); ?>" class="btn btn-secondary">Back</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>