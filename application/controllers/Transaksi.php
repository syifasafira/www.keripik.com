<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_logged_in();
        $this->load->model('Model_transaksi');
    }
    public function cetak_pdf()
    {
        $data['record'] = $this->Model_transaksi->get_all_transaksi(); // Ambil data transaksi dari database

        // Load view khusus PDF
        $html = $this->load->view('transaksi/pdf_data_transaksi', $data, true);

        // Generate PDF menggunakan helper
        generate_pdf($html, 'Data_Transaksi.pdf', true);
    }


    public function index()
    {
        $data['title'] = 'Data Transaksi';
        $data['record'] = $this->Model_transaksi->get_all_transaksi();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('transaksi/lihat_data', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['pesanan'] = $this->Model_transaksi->get_all_pesanan();

        if ($this->input->method() === 'post') {
            $input = [
                'id_pesanan'       => $this->input->post('id_pesanan'),
                'total_harga'      => $this->input->post('total_harga'),
                'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
                'metode_pembayaran' => $this->input->post('metode_pembayaran'),
                'status_transaksi' => $this->input->post('status_transaksi'),
            ];
            $this->Model_transaksi->insert_transaksi($input);
            redirect('transaksi');
        } else {
            $data['title'] = 'Tambah Data Transaksi';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('transaksi/form_input', $data);
            $this->load->view('templates/footer');
        }
    }

    public function edit($id)
    {
        $data['record'] = $this->Model_transaksi->get_one($id)->row_array();
        $data['pesanan'] = $this->Model_transaksi->get_all_pesanan();

        if ($this->input->method() === 'post') {
            $input = [
                'id_pesanan'       => $this->input->post('id_pesanan'),
                'total_harga'      => $this->input->post('total_harga'),
                'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
                'metode_pembayaran' => $this->input->post('metode_pembayaran'),
                'status_transaksi' => $this->input->post('status_transaksi'),
            ];
            $this->Model_transaksi->update_transaksi($id, $input);
            redirect('transaksi');
        }
        $data['title'] = 'Edit Data Transaksi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('transaksi/form_edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->Model_transaksi->delete_transaksi($id);
        redirect('transaksi');
    }
}
