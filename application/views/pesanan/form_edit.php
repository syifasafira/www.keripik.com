<h3>Edit Data Pelanggan</h3>
<?php
echo form_open('pelanggan/edit');
?>
<input type="hidden" value="<?php echo $record['id_pesanan'] ?>"
    name="id_pesanan">
<table border="1">

    <td>Nama Pelanggan</td>
    <td>
        <input type="date" name="nama_pelanggan" placeholder="nama pelanggan"
            value="<?php echo $record['nama_pelanggan'] ?>" readonly>
    </td>
    </tr>
    <tr>
        <td>Nama Produk</td>
        <td><select name="id_produk" class="form-control">
                <?php foreach ($rec_prodi->result() as $rp) {
                ?>
                    <option <?php if ($rec_mahasiswa['id_produk'] == $rp->id_produk) {
                                echo 'selected';
                            } ?>
                        value="<?php echo $rp->id_produk ?>"><?php echo $rp->nama_produk ?></option>;
                <?php
                }
                ?>
            </select>
        </td>
    </tr>
    <td>Jumlah</td>
    <td>
        <input type="text" name="jumlah" placeholder="jumlah"
            value="<?php echo $record['jumlah'] ?>">
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