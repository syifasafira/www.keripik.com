<h3>Data Pesanan</h3>
<?php echo anchor('pesanan/tambah', 'Tambah Data'); ?>
<hr>
<table border="1">
    <tr>
        <th>No</th>
        <th>Id Pesanan</th>
        <th>Nama pelanggan </th>
        <th>Nama Produk</th>
        <th>Jumlah </th>
        <th colspan="2">Operasi</th>
    </tr> <?php $no = 1;
            foreach ($record->result() as $r) { ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $r->id_pesanan; ?></td>
            <td><?php echo $r->nama_pelanggan; ?></td>
            <td><?php echo $r->nama_produk; ?></td>
            <td><?php echo $r->jumlah; ?></td>
            <td><a href="<?php echo base_url() . 'pesanan/edit/' . $r->id_pesanan ?>">Edit</a></td>
            <td><a href="<?php echo base_url() . 'pesanan/delete/' . $r->id_pesanan ?>">Delete</a></td>
        </tr>
    <?php $no++;
            } ?>
</table>
<a href="<?php echo base_url() ?>">Back</a>