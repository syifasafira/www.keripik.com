<?php
class Model_pesanan extends CI_Model
{
   public function get_all_pesanan()
   {
      $this->db->select('tabel_pesanan.id_pesanan, tabel_pelanggan.nama_pelanggan, tabel_produk.nama_produk, tabel_pesanan.jumlah');
      $this->db->from('tabel_pesanan');
      $this->db->join('tabel_pelanggan', 'tabel_pesanan.id_pelanggan = tabel_pelanggan.id_pelanggan');
      $this->db->join('tabel_produk', 'tabel_pesanan.id_produk = tabel_produk.id_produk');
      $query = $this->db->get();
      return $query; // Jika menggunakan foreach, harus return sebagai objek query
   }

   public function insert_pesanan($data)
   {
      $this->db->insert('tabel_pesanan', $data);
   }

   public function get_pesanan_by_id($id_pesanan)
   {
      $this->db->where('id_pesanan', $id_pesanan);
      $query = $this->db->get('tabel_pesanan');
      return $query->row();
   }

   public function update_pesanan($id_pesanan, $data)
   {
      $this->db->where('id_pesanan', $id_pesanan);
      $this->db->update('tabel_pesanan', $data);
   }

   public function delete_pesanan($id_pesanan)
   {
      $this->db->where('id_pesanan', $id_pesanan);
      $this->db->delete('tabel_pesanan');
   }

   public function get_all_pelanggan()
   {
      $this->db->select('id_pelanggan, nama_pelanggan');
      return $this->db->get('tabel_pelanggan')->result();
   }

   public function get_all_produk()
   {
      $this->db->select('id_produk, nama_produk');
      return $this->db->get('tabel_produk')->result();
   }
}
