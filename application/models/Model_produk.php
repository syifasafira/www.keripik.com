<?php
class Model_produk extends CI_Model
{
    public function get_all_produk()
    {
        $this->db->select('*');
        $this->db->from('tabel_produk');
        return $this->db->get()->result();
    }

    public function insert_produk($data)
    {
        $this->db->insert('tabel_produk', $data);
    }

    public function get_one($id)
    {
        return $this->db->get_where('tabel_produk', ['id_produk' => $id]);
    }

    public function update_produk($id, $data)
    {
        $this->db->where('id_produk', $id);
        $this->db->update('tabel_produk', $data);
    }

    public function delete_produk($id)
    {
        $this->db->where('id_produk', $id);
        $this->db->delete('tabel_produk');
    }
}
