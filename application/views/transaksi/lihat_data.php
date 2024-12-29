<h3>Data Transaksi</h3>
<?php echo anchor('transaksi/tambah', 'Tambah Data'); ?>
<hr>
<table border="1">
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
            <td><a href="<?php echo base_url('transaksi/edit/' . $r->id_transaksi); ?>">Edit</a></td>
            <td><a href="<?php echo base_url('transaksi/delete/' . $r->id_transaksi); ?>" onclick="return confirm('Hapus data?')">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="<?php echo base_url(); ?>">Kembali</a>