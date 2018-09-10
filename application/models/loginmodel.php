<?php 
class loginmodel extends CI_model
{
	public function isvalidate($username,$password)
	{
       /*$q=$this->db->query("select * from users where username=$username and password=$password"); 
       if(count($q=>rows()))
       {
       	 return true;
       }

       else
       	{
       		return false;
       	} */

       	// Another method

       	$q=$this->db->where(['username'=>$username,'password'=>$password])
       	            ->get('users');
       	    

                        if($q->num_rows())
                       {
                       	return $q->row()->id;
                       }
                       else
                       {
                       	return false;
                       }

	}

    public function articlelist()
    {
           
          $id=$this->session->userdata('id');
          $q=$this->db->select('article_title')
                  ->from('articles')
                  ->where(['user_id'=>$id])
                  ->get();
                  return $q->result();
                  

    }

}

?>