<h3>Edit Data Pesanan</h3>
<?php echo form_open('pesanan/edit/' . $record['id_pesanan']); ?>
<input type="hidden" name="id_pesanan" value="<?php echo $record['id_pesanan']; ?>">

<table border="1">
    <tr>
        <td>Nama Pelanggan</td>
        <td>
            <input type="text" name="nama_pelanggan"
                value="<?php echo $record['nama_pelanggan']; ?>" readonly>
        </td>
    </tr>
    <tr>
        <td>Nama Produk</td>
        <td>
            <select name="id_produk" required>
                <?php foreach ($produk as $p): ?>
                    <option value="<?php echo $p->id_produk; ?>"
                        <?php echo ($p->id_produk == $record['id_produk']) ? 'selected' : ''; ?>>
                        <?php echo $p->nama_produk; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td>
            <input type="number" name="jumlah" value="<?php echo $record['jumlah']; ?>" required>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="submit" name="submit">Simpan</button>
            <?php echo anchor('pesanan', 'Kembali'); ?>
        </td>
    </tr>
</table>
<?php echo form_close(); ?>