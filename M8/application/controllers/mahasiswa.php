<?php
defined('BASEPATH') or exit('No direct script access allowed');
class mahasiswa extends CI_Controller{
  function __construct(){
      parent::__construct();
      $this->load->model('mahasiswa_mod');
  }
  public function index(){
      $data['mahasiswa'] = $this->mahasiswa_mod->get_data();
      $this->load->view('view_mahasiswa',$data);
  }
  public function profil(){
      echo "ini adalah method profil pada controller Mahasiswa";
  }
}