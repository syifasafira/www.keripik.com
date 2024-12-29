<h3>Data Modal</h3>
 <?php echo anchor('modal/tambah','Tambah Data'); ?>
 <table border="1">
 <tr>
 <th>No</th>
 <th>Id Modal</th>
 <th>Tanggal </th>
 <th>Jumlah Modal</th>
 <th>Keterangan </th>
 <th colspan="2">Operasi</th>
 </tr>
 <?php
 $no=1;
 foreach ($record->result() as $r){
 echo "<tr>
 <td>$no</td>
 <td>$r->id_modal</td>
 <td>$r->tanggal</td>
 <td>$r->jumlah_modal</td>
 <td>$r->keterangan</td>
 <td>".anchor('modal/edit/'.$r->id_modal,'Edit')."</td>
 <td>".anchor('modal/delete/'.$r->id_modal,'Delete')."</td>
 <tr>";
 $no++;
 }?>
 </table>
 <a href="<?php echo base_url()?>">Back</a>