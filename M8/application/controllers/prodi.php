<?php
class prodi extends CI_Controller{
  function __construct(){
      parent::__construct();
      $this->load->model('prodi_mod');
  }
  public function index(){
      $data['prodi'] = $this->prodi_mod->get_data();
      $this->load->view('view_prodi',$data);
  }
}