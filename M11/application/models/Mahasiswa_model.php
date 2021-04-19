<?php
class Mahasiswa_model extends CI_Model{
	function getAll(){//function getAll
		$this->db->select('*');//select semua data
		$this->db->from('tm_user');//dari table user
		$this->db->join('tm_grup', 'tm_user.grup = tm_grup.id_grup');//gabungkan table grup dan user menggunakan id_grup
		$query = $this->db->get();
		return $query;//lakukan query db
	}

	function input_data($data, $table) {
		$this->db->insert($table,$data);
	}
}
?>