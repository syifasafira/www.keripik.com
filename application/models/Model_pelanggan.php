<?php
class model_pelanggan extends CI_Model
{
    function tampilkan_data()
    {
        return $this->db->get('tabel_pelanggan');
    }
    function tambah()
    {
        $data = array(
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'no_telepon' => $this->input->post('no_telepon'),
            'alamat' => $this->input->post('alamat')
        );
        $this->db->insert('tabel_pelanggan', $data);
    }
    function edit()
    {
        $id =  $this->input->post('id_pelanggan');
        $data = array(
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'no_telepon' => $this->input->post('no_telepon'),
            'alamat' => $this->input->post('alamat')
        );
        $this->db->where('id_pelanggan', $id);
        $this->db->update('tabel_pelanggan', $data);
    }
    function get_one($id)
    {
        $indeks =
            array('id_pelanggan' => $id);
        return $this->db->get_where('tabel_pelanggan', $indeks);
    }
    function delete($id)
    {
        $this->db->where('id_pelanggan', $id);
        $this->db->delete('tabel_pelanggan');
    }
}
