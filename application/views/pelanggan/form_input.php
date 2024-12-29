<h3>Tambah Pelanggan</h3>
<?php
echo form_open('pelanggan/tambah');
?>
<table border="1">
    <tr>
        <td>
            Nama Pelanggan
        </td>
        <td>
            <input type="text" name="nama_pelanggan" placeholder="nama pelanggan">
        </td>
    </tr>
    <tr>
        <td>
            No Telepon
        </td>
        <td>
            <input type="text" name="no_telepon" placeholder="no telepon">
        </td>
    </tr>
    <tr>
        <td>
            Alamat
        </td>
        <td>
            <input type="text" name="alamat" placeholder="alamat">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="submit" name="submit">
                Simpan
            </button>
        </td>
    </tr>
</table>