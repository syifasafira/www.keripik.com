<?php
class model_modal extends CI_Model
{
   function tampilkan_data()
   {
      return $this->db->get('tb_modal');
   }
   function tambah()
   {
      $data = array(
         'tanggal' => $this->input->post('tanggal'),
         'jumlah_modal' => $this->input->post('jumlah_modal'),
         'keterangan' => $this->input->post('keterangan')
      );
      $this->db->insert('tb_modal', $data);
   }
   function edit()
   {
      $id =  $this->input->post('id_modal');
      $data = array(
         'tanggal' => $this->input->post('tanggal'),
         'jumlah_modal' => $this->input->post('jumlah_modal'),
         'keterangan' => $this->input->post('keterangan')
      );
      $this->db->where('id_modal', $id);
      $this->db->update('tb_modal', $data);
   }
   function get_one($id)
   {
      $indeks =
         array('id_modal' => $id);
      return $this->db->get_where('tb_modal', $indeks);
   }
   function delete($id)
   {
      $this->db->where('id_modal', $id);
      $this->db->delete('tb_modal');
   }
}
