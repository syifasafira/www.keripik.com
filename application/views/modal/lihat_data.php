<h3 class="mb-4">Data Modal</h3>
<div class="mb-3">
    <a href="<?php echo base_url('modal/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
    <a class="btn btn-danger" href="<?= base_url('modal/cetak_pdf');
                                    "" ?>">
        <i class="bi bi-file-earmark-pdf"></i> PDF
    </a>
</div>
<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Id Modal</th>
            <th>Tanggal</th>
            <th>Jumlah Modal</th>
            <th>Keterangan</th>
            <th colspan="2">Operasi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($record->result() as $r) {
            echo "<tr>
        <td>$no</td>
        <td>$r->id_modal</td>
        <td>$r->tanggal</td>
        <td>$r->jumlah_modal</td>
        <td>$r->keterangan</td>
        <td><a href='" . base_url('modal/edit/' . $r->id_modal) . "' class='btn btn-warning btn-sm'>Edit</a></td>
        <td><a href='" . base_url('modal/delete/' . $r->id_modal) . "' class='btn btn-danger btn-sm'>Delete</a></td>
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