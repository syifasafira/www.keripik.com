<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Pesanan</title>
</head>

<body>
    <h3>Tambah Data Pesanan</h3>
    <?php echo form_open('pesanan/tambah'); ?>
    <table>
        <tr>
            <td>Nama Pelanggan</td>
            <td>
                <select name="id_pelanggan" required>
                    <option value="" disabled selected>Pilih Pelanggan</option>
                    <?php foreach ($pelanggan as $p) : ?>
                        <option value="<?php echo $p->id_pelanggan; ?>">
                            <?php echo $p->nama_pelanggan; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>
                <select name="id_produk" required>
                    <option value="" disabled selected>Pilih Produk</option>
                    <?php foreach ($produk as $pr) : ?>
                        <option value="<?php echo $pr->id_produk; ?>">
                            <?php echo $pr->nama_produk; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="number" name="jumlah" required></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Simpan">
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>
    <a href="<?php echo base_url('pesanan'); ?>">Back</a>
</body>

</html>