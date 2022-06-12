<?php
class Admin_model extends CI_Model 
{

	
	function saverecords($data)
	{
        $this->db->insert('products',$data);
        return true;
	}


//    DELETE
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
	     
// UPDATE

     function display_records2()
         {
	$query=$this->db->query("select * from products");
	return $query->result();
	}
        function displayrecordsById($id)
	{
	$query=$this->db->query("select * from products where id='".$id.”’”);
	return $query->result();
	}
	/*Update*/
	 function update_records($name_product,$price_product,$img_product,$id_category,$id)
	 {
	
	$query=$this->db->query("update form SET name_product='$name_product',price_product='$price_product',img_product='$img_product', id_category= '$id_category' where id='$id’");
	 }

}