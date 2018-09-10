<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller 
{
   
	public function login()
	{
		
		$this->form_validation->set_rules('uname','User Name','required|alpha');
		$this->form_validation->set_rules('pass','Password','required|max_length[12]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run())
		{
			
            $uname=$this->input->post('uname');
            $password=$this->input->post('pass');

     // echo "Username Is : ".$uname."</br>"."Password Is : ".$password; // for printing the uname and password

            $this->load->model('loginmodel');
            $id=$this->loginmodel->isvalidate($uname,$password);
             if($id)
             {
                  
                    $this->session->set_userdata('id',$id);
                    return redirect('admin/welcome');
             }
             else
             {
                    echo "Details not matched";
             }


		}
		else
		{
			$this->load->view('Admin/Login');
		}
	}
     
	public function welcome()
	{   
		$this->load->model('loginmodel','ar');
		$articles=$this->ar->articlelist();
		$this->load->view('Admin/dashboard',['articles'=>$articles]);

	}

	public function adduser()
	{

	}

	public function edituser()
	{

	}

	public function deluser()
	{

	}

	public function register()
	{
		$this->load->view('admin/register');
	}
    public function sendemail()
    {
        $this->form_validation->set_rules('uname','User Name','required|alpha');
		$this->form_validation->set_rules('pass','Password','required|max_length[12]');
		$this->form_validation->set_rules('fname','First Name','required|alpha');
		$this->form_validation->set_rules('lname','Last Name','required|alpha');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        
        if($this->form_validation->run())
        {
        	$this->load->library('email');
        	$this->email->from(set_value('email'),set_value('fname'));
        	$this->email->to("ahteshamaziz@gmail.com");
        	$this->email->subject("Registration Greeting");
        	$this->email->message("Thank You For Registration");
        	$this->email->set_newline("\r\n");
        	$this->email->send();

        	if(!$this->email->send())
        	{
        		show_error($this->email->print_debugger()); 
        	}
        	else{
        		echo "Your e-mail has been sent!";
        	}
        }
        else{
        	$this->load->view('Admin/register');
        }
    }

}
?>