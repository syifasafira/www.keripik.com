<h3>Edit Data Modal</h3>
<?php
echo form_open('modal/edit');
?>
<input type="hidden" value="<?php echo $record['id_modal'] ?>"
    name="id_modal">
<table border="1">

    <td>Tanggal</td>
    <td>
        <input type="date" name="tanggal" placeholder="tanggal"
            value="<?php echo $record['tanggal'] ?>">
    </td>
    </tr>
    <td>Jumlah Modal</td>
    <td>
        <input type="text" name="jumlah_modal" placeholder="jumlah_modal"
            value="<?php echo $record['jumlah_modal'] ?>">
    </td>
    </tr>
    <td>keterangan</td>
    <td>
        <input type="text" name="keterangan" placeholder="keterangan"
            value="<?php echo $record['keterangan'] ?>">
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
            <?php echo anchor('modal', 'Kembali') ?>
        </td>
    </tr>
</table>
</form>