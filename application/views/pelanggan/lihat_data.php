<h3>Data Pelanggan</h3>
<?php echo anchor('pelanggan/tambah', 'Tambah Data'); ?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Id Pelanggan</th>
        <th>Nama_pelanggan </th>
        <th>No_telepon</th>
        <th>Alamat </th>
        <th colspan="2">Operasi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($record->result() as $r) {
        echo "<tr>
 <td>$no</td>
 <td>$r->id_pelanggan</td>
 <td>$r->nama_pelanggan</td>
 <td>$r->no_telepon</td>
 <td>$r->alamat</td>
 <td>" . anchor('pelanggan/edit/' . $r->id_pelanggan, 'Edit') . "</td>
 <td>" . anchor('pelanggan/delete/' . $r->id_pelanggan, 'Delete') . "</td>
 <tr>";
        $no++;
    } ?>
</table>
<a href="<?php echo base_url() ?>">Back</a>