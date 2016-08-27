<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class health_model extends CI_Model
{
	public function add_user($data)
	{
		return $this->db->insert('tbl_users', $data);
	}

	public function add_patient($data)
	{
		return $this->db->insert('tbl_patients', $data);
	}

	public function get_user_by_username_password($data)
	{
		$sql = "SELECT * FROM tbl_users WHERE username = ? AND password = ? LIMIT 1";
		$query = $this->db->query($sql, array($data['username'], $data['password']));
		//$query = $this->db->get();
		return $query;
	}
}
?>
