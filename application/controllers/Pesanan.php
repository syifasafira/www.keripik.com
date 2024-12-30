<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_logged_in();
        $this->load->model('Model_pesanan');
    }

    public function index()
    {
        $data['title'] = 'Data Pesanan';
        $data['record'] = $this->Model_pesanan->get_all_pesanan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pesanan/lihat_data', $data);
        $this->load->view('templates/footer');
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
            $data['title'] = 'Tambah Data Pesanan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('pesanan/form_input', $data);
            $this->load->view('templates/footer');
        }
    }

    public function edit()
    {
        $id_pesanan = $this->uri->segment(3);
        $data['record'] = $this->Model_pesanan->get_one($id_pesanan)->row_array(); // Data sebagai array
        $data['produk'] = $this->Model_pesanan->get_all_produk(); // Semua produk untuk dropdown

        // Jika form disubmit
        if ($this->input->method() === 'post') {
            $input = [
                'id_produk' => $this->input->post('id_produk'),
                'jumlah'    => $this->input->post('jumlah'),
            ];

            // Update data pesanan
            $this->Model_pesanan->update_pesanan($id_pesanan, $input);
            redirect('pesanan'); // Redirect ke halaman utama
        }

        // Load view form edit
        $data['title'] = 'Edit Data Pesanan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pesanan/form_edit', $data);
        $this->load->view('templates/footer');
    }
}
