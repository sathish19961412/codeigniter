<?php

class Crud_model extends CI_Model
{
	public function saverecords($data)
	{
		$this->db->insert('crud',$data);
		return true;
	}

	public function  display_records(){
		$query =$this->db->get('crud');
		return $query->result();
	}

	public function displayrecordsById($id)
	{
		$query=$this->db->query("select * from crud where id='".$id."'");
		return $query->result();
	}

	public function update_records($first_name,$last_name,$email,$id)
	{
		$this->db->query("update crud SET first_name='$first_name',last_name='$last_name',email='$email' where id='".$id."'");
	}

	public function deleteRecordById($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('crud');
		return true;
	}
}

?>
