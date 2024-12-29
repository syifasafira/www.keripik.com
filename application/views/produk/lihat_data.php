<h3>Data Produk</h3>
<?php echo anchor('produk/tambah', 'Tambah Data'); ?>
<hr>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID Produk</th>
        <th>Nama Produk</th>
        <th>Stok</th>
        <th>Harga Jual</th>
        <th colspan="2">Operasi</th>
    </tr>
    <?php $no = 1;
    foreach ($record as $r): ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $r->id_produk; ?></td>
            <td><?php echo $r->nama_produk; ?></td>
            <td><?php echo $r->stok; ?></td>
            <td><?php echo number_format($r->harga_jual, 0, ',', '.'); ?></td>
            <td><a href="<?php echo base_url('produk/edit/' . $r->id_produk); ?>">Edit</a></td>
            <td><a href="<?php echo base_url('produk/delete/' . $r->id_produk); ?>" onclick="return confirm('Hapus data?')">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="<?php echo base_url(); ?>">Kembali</a>