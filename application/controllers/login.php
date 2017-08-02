<?php 

class Login extends CI_Controller
{
  public function index()
  {
    $this->load->view('public/admin_login');
  }

  public function admin_login()
  {

  	$this->form_validation->set_rules('username','Username','required|alpha|trim');
  	$this->form_validation->set_rules('password','Password', 'required');

  	 if ($this->form_validation->run())
                {
                    // If validation Passes // Success
                }
                else
                {
                    // FAiled.
                    $this->load->view('public/admin_login');

                    // echo validation_errors();
                }
  }
}