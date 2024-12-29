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
        $data['record'] = $this->model_pelanggan->tampilkan_data();
        $this->load->view('pelanggan/lihat_data', $data);
    }
    function tambah()
    {
        if (isset($_POST['submit'])) {
            $this->model_pelanggan->tambah();
            redirect('pelanggan');
        } else {
            $this->load->view('pelanggan/form_input');
        }
    }
    function edit()
    {
        if (isset($_POST['submit'])) {
            $this->model_pelanggan->edit();
            redirect('pelanggan');
        } else {
            $id = $this->uri->segment(3);
            $data['record'] = $this->model_pelanggan->get_one($id)->row_array();
            $this->load->view('pelanggan/form_edit', $data);
        }
    }
    function delete()
    {
        $id = $this->uri->segment(3);
        $this->model_pelanggan->delete($id);
        redirect('pelanggan');
    }
}
