<?php
class mahasiswa_mod extends CI_Model {
  public function get_data(){
    $data_mahasiswa = [
        ['nama'=>'Elyas','prodi'=>'MIF'],
        ['nama'=>'Ahmad','prodi'=>'TKK'],
        ['nama'=>'Budi','prodi'=>'TIF']
      ];
    return $data_mahasiswa;
  }
}