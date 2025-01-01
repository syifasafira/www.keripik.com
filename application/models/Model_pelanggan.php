<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pelanggan extends CI_Model
{

    public function get_all_pelanggan()
    {
        return $this->db->get('tabel_pelanggan')->result_array();
    }

    public function add_pelanggan($data)
    {
        return $this->db->insert('tabel_pelanggan', $data);
    }

    public function get_pelanggan_by_id($id)
    {
        return $this->db->get_where('tabel_pelanggan', ['id_pelanggan' => $id])->row_array();
    }

    public function update_pelanggan($id, $data)
    {
        $this->db->where('id_pelanggan', $id);
        return $this->db->update('tabel_pelanggan', $data);
    }

    public function delete_pelanggan($id)
    {
        $this->db->where('id_pelanggan', $id);
        return $this->db->delete('tabel_pelanggan');
    }
}
