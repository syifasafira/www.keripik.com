<h3>Edit Data Produk</h3>
<?php echo form_open('produk/edit/' . $record['id_produk']); ?>
<table border="1">
    <tr>
        <td>Nama Produk</td>
        <td><input type="text" name="nama_produk" value="<?php echo $record['nama_produk']; ?>" required></td>
    </tr>
    <tr>
        <td>Stok</td>
        <td><input type="number" name="stok" value="<?php echo $record['stok']; ?>" required></td>
    </tr>
    <tr>
        <td>Harga Jual</td>
        <td><input type="number" name="harga_jual" value="<?php echo $record['harga_jual']; ?>" required></td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="submit" name="submit">Simpan</button>
            <?php echo anchor('produk', 'Kembali'); ?>
        </td>
    </tr>
</table>
<?php echo form_close(); ?>