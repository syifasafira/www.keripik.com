<?php
class pelanggan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_pelanggan');
    }
    function index()
    {
        $data['title'] = 'Data Pelanggan';
        $data['record'] = $this->model_pelanggan->tampilkan_data();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pelanggan/lihat_data', $data);
        $this->load->view('templates/footer');
    }
    function tambah()
    {
        if (isset($_POST['submit'])) {
            $this->model_pelanggan->tambah();
            redirect('pelanggan');
        } else {
            $data['title'] = 'Tambah Data Pelanggan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('pelanggan/form_input', $data);
            $this->load->view('templates/footer');
        }
    }
    function edit()
    {
        if (isset($_POST['submit'])) {
            $this->model_pelanggan->edit();
            redirect('pelanggan');
        } else {
            $data['title'] = 'Edit Data Pelanggan';
            $id = $this->uri->segment(3);
            $data['record'] = $this->model_pelanggan->get_one($id)->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('pelanggan/form_edit', $data);
            $this->load->view('templates/footer');
        }
    }
    function delete()
    {
        $id = $this->uri->segment(3);
        $this->model_pelanggan->delete($id);
        redirect('pelanggan');
    }
}
