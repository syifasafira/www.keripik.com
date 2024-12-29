<?php
class Model_transaksi extends CI_Model
{
    public function get_all_transaksi()
    {
        $this->db->select('t.id_transaksi, t.id_pesanan, t.total_harga, t.tanggal_transaksi, t.metode_pembayaran, t.status_transaksi, p.nama_pelanggan');
        $this->db->from('tabel_transaksi t');
        $this->db->join('tabel_pesanan ps', 't.id_pesanan = ps.id_pesanan');
        $this->db->join('tabel_pelanggan p', 'ps.id_pelanggan = p.id_pelanggan');
        return $this->db->get()->result();
    }

    public function get_all_pesanan()
    {
        $this->db->select('ps.id_pesanan, pl.nama_pelanggan');
        $this->db->from('tabel_pesanan ps');
        $this->db->join('tabel_pelanggan pl', 'ps.id_pelanggan = pl.id_pelanggan');
        return $this->db->get()->result();
    }

    public function insert_transaksi($data)
    {
        $this->db->insert('tabel_transaksi', $data);
    }

    public function get_one($id)
    {
        return $this->db->get_where('tabel_transaksi', ['id_transaksi' => $id]);
    }

    public function update_transaksi($id, $data)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->update('tabel_transaksi', $data);
    }

    public function delete_transaksi($id)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->delete('tabel_transaksi');
    }
}
