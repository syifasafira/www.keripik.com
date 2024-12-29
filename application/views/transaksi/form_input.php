<h3>Tambah Data Transaksi</h3>
<?php echo form_open('transaksi/tambah'); ?>
<table border="1">
    <tr>
        <td>ID Pesanan</td>
        <td>
            <select name="id_pesanan" required>
                <option value="">Pilih Pesanan</option>
                <?php foreach ($pesanan as $p): ?>
                    <option value="<?php echo $p->id_pesanan; ?>">
                        <?php echo $p->nama_pelanggan . " (" . $p->id_pesanan . ")"; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Total Harga</td>
        <td><input type="number" name="total_harga" required></td>
    </tr>
    <tr>
        <td>Tanggal Transaksi</td>
        <td><input type="date" name="tanggal_transaksi" required></td>
    </tr>
    <tr>
        <td>Metode Pembayaran</td>
        <td>
            <select name="metode_pembayaran" required>
                <option value="transfer">Transfer</option>
                <option value="cod">COD</option>
                <option value="case">Case</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Status Transaksi</td>
        <td>
            <select name="status_transaksi" required>
                <option value="sudah">Sudah</option>
                <option value="belum">Belum</option>
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