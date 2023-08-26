<?php

class Crud_model extends CI_Model
{
	function saverecords($data)
	{
		$this->db->insert('crud',$data);
		return true;
	}
}

?>
