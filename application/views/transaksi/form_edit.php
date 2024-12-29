<h3>Edit Data Transaksi</h3>
<?php echo form_open('transaksi/edit/' . $record['id_transaksi']); ?>
<table border="1">
    <tr>
        <td>ID Pesanan</td>
        <td>
            <select name="id_pesanan" required>
                <?php foreach ($pesanan as $p): ?>
                    <option value="<?php echo $p->id_pesanan; ?>"
                        <?php echo ($p->id_pesanan == $record['id_pesanan']) ? 'selected' : ''; ?>>
                        <?php echo $p->nama_pelanggan . " (" . $p->id_pesanan . ")"; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Total Harga</td>
        <td><input type="number" name="total_harga" value="<?php echo $record['total_harga']; ?>" required></td>
    </tr>
    <tr>
        <td>Tanggal Transaksi</td>
        <td><input type="date" name="tanggal_transaksi" value="<?php echo $record['tanggal_transaksi']; ?>" required></td>
    </tr>
    <tr>
        <td>Metode Pembayaran</td>
        <td>
            <select name="metode_pembayaran" required>
                <option value="transfer" <?php echo ($record['metode_pembayaran'] == 'transfer') ? 'selected' : ''; ?>>Transfer</option>
                <option value="cod" <?php echo ($record['metode_pembayaran'] == 'cod') ? 'selected' : ''; ?>>COD</option>
                <option value="case" <?php echo ($record['metode_pembayaran'] == 'case') ? 'selected' : ''; ?>>Case</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Status Transaksi</td>
        <td>
            <select name="status_transaksi" required>
                <option value="sudah" <?php echo ($record['status_transaksi'] == 'sudah') ? 'selected' : ''; ?>>Sudah</option>
                <option value="belum" <?php echo ($record['status_transaksi'] == 'belum') ? 'selected' : ''; ?>>Belum</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="submit" name="submit">Simpan</button>
            <?php echo anchor('transaksi', 'Kembali'); ?>
        </td>
    </tr>
</table>
<?php echo form_close(); ?>