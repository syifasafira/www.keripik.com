<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pesanan');
    }

    public function index()
    {
        $data['record'] = $this->Model_pesanan->get_all_pesanan();
        $this->load->view('pesanan/lihat_data', $data);
    }
    public function tambah()
    {
        $data['pelanggan'] = $this->Model_pesanan->get_all_pelanggan();
        $data['produk'] = $this->Model_pesanan->get_all_produk();

        if ($this->input->method() === 'post') {
            $input = [
                'id_pelanggan' => $this->input->post('id_pelanggan'),
                'id_produk'    => $this->input->post('id_produk'),
                'jumlah'       => $this->input->post('jumlah'),
            ];
            $this->Model_pesanan->insert_pesanan($input);
            redirect('pesanan');
        } else {
            $this->load->view('pesanan/form_input', $data);
        }
    }

    public function edit($id_pesanan = null)
    {
        // Validasi jika ID pesanan tidak ada
        if (!$id_pesanan) {
            redirect('pelanggan'); // Redirect ke halaman utama pelanggan jika ID tidak valid
        }

        // Ambil data pesanan berdasarkan ID
        $data['record'] = $this->Model_pesanan->get_pesanan_by_id($id_pesanan);
        if (!$data['record']) {
            show_404(); // Tampilkan 404 jika data tidak ditemukan
        }

        // Ambil data produk untuk dropdown
        $data['produk'] = $this->Model_pesanan->get_all_produk();

        // Jika form di-submit
        if ($this->input->method() === 'post') {
            $input = [
                'id_produk' => $this->input->post('id_produk'),
                'jumlah'    => $this->input->post('jumlah'),
            ];

            // Update data di database
            $this->Model_pesanan->update_pesanan($id_pesanan, $input);
            redirect('pesanan'); // Redirect ke halaman utama pelanggan
        }

        // Load view form edit
        $this->load->view('pesanan/form_edit', $data);
    }
}
