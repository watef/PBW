<?php if(! defined('BASEPATH'))exit('No direct script access allowed');
class modelkomen extends CI_Model
{
	public function getusers()
	{
		$query = $this->db->get('users');
		return $query->result_array();
	}
	public function get_data_id($id)
	{
			$query = $this->db->get_where('users',array('id'=>$id));
			return $query->row_array();
	}
	public function delete($id)
	{
		return $this->db->delete('users',array('id'=>$id));

	}
	
	public function edit($id)
	{
		return $this->db->get_where($table,$where);

	}
	public function add($id,$table)
	{
		$this->db->insert($table,$id);
	}
}