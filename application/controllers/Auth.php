<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('auth');
        $this->load->library('session');
        $this->load->database();
    }

    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            redirect('menu'); // Ganti 'dashboard' dengan controller/menu utama Anda
        }
        $this->load->view('auth/form_login');
    }

    public function login()
    {
        $this->load->helper('security');
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        $user = $this->db->get_where('users', ['username' => $username])->row();
        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata([
                'username' => $user->username,
                'logged_in' => TRUE,
            ]);
            redirect('menu');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(['username', 'logged_in']);
        $this->session->sess_destroy();
        redirect('auth');
    }

    public function register()
    {
        $this->load->view('auth/form_regis');
    }

    public function process_register()
    {
        $this->load->helper('security');
        $username = $this->input->post('username', TRUE);
        $password = password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT);

        $this->db->insert('users', ['username' => $username, 'password' => $password]);
        $this->session->set_flashdata('success', 'Registrasi berhasil, silakan login!');
        redirect('auth');
    }

    public function blocked()
    {
        echo "Access Blocked. Please login.";
    }
}
