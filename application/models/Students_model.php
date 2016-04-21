<?php
class Students_model extends CI_Model{

	

	public function selectAll($tbl_name){
		$this->db->select('*');
		$this->db->where('status', 1);
		$this->db->from($tbl_name);

		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
}
?>