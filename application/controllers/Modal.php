<?php
 class modal extends CI_Controller{
 function __construct() {
 parent::__construct();
 $this->load->model('model_modal');
 }
 function index(){
 $data['record'] = $this->model_modal->tampilkan_data();
 $this->load->view('modal/lihat_data',$data);
 }
 function tambah() {
 if(isset($_POST['submit'])){
 $this->model_modal->tambah();
 redirect('modal');
 }
 else {
 $this->load->view('modal/form_input');
 }
 }
 function edit() {
 if(isset($_POST['submit'])){
 $this->model_modal->edit();
 redirect('modal');
 }
 else{
 $id = $this->uri->segment(3);
 $data['record']= $this->model_modal->get_one($id)->row_array();
 $this->load->view('modal/form_edit',$data);
 }
 }
 function delete() {
 $id = $this->uri->segment(3);
 $this->model_modal->delete($id);
 redirect('modal');
 }
 }