<?php
class modal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_logged_in();
        $this->load->model('model_modal');
    }
    function index()
    {
        $data['title'] = 'Data Modal';
        $data['record'] = $this->model_modal->tampilkan_data();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('modal/lihat_data', $data);
        $this->load->view('templates/footer');
    }
    function tambah()
    {
        if (isset($_POST['submit'])) {
            $this->model_modal->tambah();
            redirect('modal');
        } else {
            $data['title'] = 'Tambah Data Modal';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('modal/form_input', $data);
            $this->load->view('templates/footer');
        }
    }
    function edit()
    {
        if (isset($_POST['submit'])) {
            $this->model_modal->edit();
            redirect('modal');
        } else {
            $id = $this->uri->segment(3);
            $data['record'] = $this->model_modal->get_one($id)->row_array();
            $data['title'] = 'Edit Data Modal';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('modal/form_edit', $data);
            $this->load->view('templates/footer');
        }
    }
    function delete()
    {
        $id = $this->uri->segment(3);
        $this->model_modal->delete($id);
        redirect('modal');
    }
}
