<h3>Edit Data Pelanggan</h3>
<?php
echo form_open('pelanggan/edit');
?>
<input type="hidden" value="<?php echo $record['id_pelanggan'] ?>"
    name="id_pelanggan">
<table border="1">

    <td>Nama Pelanggan</td>
    <td>
        <input type=text name="nama_pelanggan" placeholder="nama pelanggan"
            value="<?php echo $record['nama_pelanggan'] ?>">
    </td>
    </tr>
    <td>No Telepon</td>
    <td>
        <input type="text" name="no_telepon" placeholder="no telepon"
            value="<?php echo $record['no_telepon'] ?>">
    </td>
    </tr>
    <td>Alamat</td>
    <td>
        <input type="text" name="alamat" placeholder="alamat"
            value="<?php echo $record['alamat'] ?>">
    </td>
    </tr>
    <tr>
        <td colspan="2"><br></td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="submit" name="submit">
                Simpan
            </button>
            <?php echo anchor('pelanggan', 'Kembali') ?>
        </td>
    </tr>
</table>
</form>