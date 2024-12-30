<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('view_dashboard', $data);
		$this->load->view('templates/footer');
	}
}
