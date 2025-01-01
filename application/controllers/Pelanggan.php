<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_logged_in();
        $this->load->model('Model_pelanggan');
    }

    public function index()
    {
        $data['title'] = 'Data Pelanggan';
        $data['pelanggan'] = $this->Model_pelanggan->get_all_pelanggan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pelanggan/lihat_data', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Pelanggan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pelanggan/form_input', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data = [
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'no_telepon' => $this->input->post('no_telepon'),
            'alamat' => $this->input->post('alamat')
        ];
        $this->Model_pelanggan->add_pelanggan($data);
        redirect('pelanggan');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data Pelanggan';
        $data['pelanggan'] = $this->Model_pelanggan->get_pelanggan_by_id($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pelanggan/form_edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = [
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'no_telepon' => $this->input->post('no_telepon'),
            'alamat' => $this->input->post('alamat')
        ];
        $this->Model_pelanggan->update_pelanggan($id, $data);
        redirect('pelanggan');
    }

    public function delete($id)
    {
        $this->Model_pelanggan->delete_pelanggan($id);
        redirect('pelanggan');
    }
    public function cetak_pdf()
    {
        $data['pelanggan'] = $this->Model_pelanggan->get_all_pelanggan();
        $html = $this->load->view('pelanggan/pdf_data_pelanggan', $data, true);
        generate_pdf($html, 'Data_Pelanggan.pdf');
    }
}
