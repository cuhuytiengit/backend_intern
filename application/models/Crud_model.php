<?php
class Crud_model extends CI_Model 
{

	
	function saverecords($data)
	{
        $this->db->insert('products',$data);
        return true;
	}



	    /*Display*/
		function display_records()
		{
		  $query=$this->db->get("products");
		  return $query->result();
		}
		function deleterecords($id)
		{
		  $this->db->where("id", $id);
		  $this->db->delete("products");
		  return true;
		}
	
}