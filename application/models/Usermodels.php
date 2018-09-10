<?php 
class Usermodels extends CI_model
{
	public function getUserdata()

	{
         $this->load->database();
          $this->db->select("Name");
         $this->db->where("id",1);
         $q=$this->db->get("test");
         $result=$q->result();
         return $q->result_array();
	}
}

?>