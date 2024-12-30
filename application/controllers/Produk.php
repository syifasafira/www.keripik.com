<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_logged_in();
        $this->load->model('Model_produk');
    }


    public function index()
    {
        $data['title'] = 'Data Produk';
        $data['record'] = $this->Model_produk->get_all_produk();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('produk/lihat_data', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->input->method() === 'post') {
            $input = [
                'nama_produk' => $this->input->post('nama_produk'),
                'stok'        => $this->input->post('stok'),
                'harga_jual'  => $this->input->post('harga_jual'),
            ];
            $this->Model_produk->insert_produk($input);
            redirect('produk');
        } else {
            $data['title'] = 'Tambah Data Produk';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('produk/form_input', $data);
            $this->load->view('templates/footer');
        }
    }

    public function edit($id)
    {
        $data['record'] = $this->Model_produk->get_one($id)->row_array();

        if ($this->input->method() === 'post') {
            $input = [
                'nama_produk' => $this->input->post('nama_produk'),
                'stok'        => $this->input->post('stok'),
                'harga_jual'  => $this->input->post('harga_jual'),
            ];
            $this->Model_produk->update_produk($id, $input);
            redirect('produk');
        }
        $data['title'] = 'Edit Data Produk';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('produk/form_edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->Model_produk->delete_produk($id);
        redirect('produk');
    }
}
