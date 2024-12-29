<h3>Tambah Modal</h3>
 <?php
 echo form_open('modal/tambah');
 ?>
 <table border="1">
 <tr>
 <td>
 Tanggal
 </td>
 <td>
 <input type="date" name="tanggal" placeholder="tanggal">
 </td>
 </tr>
 <tr>
 <td>
Jumlah Modal
 </td>
 <td>
 <input type="text" name="jumlah_modal" placeholder="jumlah modal">
 </td>
 </tr>
 <tr>
 <td>
Keterangan
 </td>
 <td>
 <input type="text" name="keterangan" placeholder="keterangan">
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