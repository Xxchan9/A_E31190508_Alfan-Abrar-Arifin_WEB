<?php 

class Demo1 extends CI_controller{
    public function index(){
        $this->load->view("LPview/header");
        $this->load->view("LPview/content");
        $this->load->view("LPview/footer");
    }

}
?>