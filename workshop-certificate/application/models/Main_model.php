<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model  {
	public function select_data_where($tbl, $condition) {
		$this->db->select('*');
		$this->db->from($tbl);
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}
	public function select_data($tbl) {
        $this->db->order_by("register_name", "asc");
        $query = $this->db->get($tbl);
        if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
    public function where_query($query) {
		$query = $this->db->query($query);
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
}
?>