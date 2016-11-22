<?php

class Login extends CI_Controller {

  function index()
  {
    $this->load->view('includes/header');
    $this->load->view('login_form');
    $this->load->view('includes/footer');
  }

  function validate_credentials()
  {
    $this->load->model('membership_model');
    $query =$this->membership_model->validate();

    if ($query) //if validated
    {
      $data = array('username' =>$this->input->post('username'),
       'is_logged_in'=>true );
      $this->session->set_userdata($data);
      redirect('site/members_area');
    }
    else
    {
      $this->index();
      echo "Invalid username or password";
    }
  }

  function signup()
	{
		$data['main_content'] = 'signup_form';
		$this->load->view('includes/template', $data);
	}

  function create_member()
  {
  $this->load->library('form_validation');

  // field name, error message, validation rules
  $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
  $this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[10]|max_length[80]');
  $this->form_validation->set_rules('gender', 'Gender', 'required|alpha');
  $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');


  if($this->form_validation->run() == FALSE)
  {
    $this->load->view('signup_form');
  }

  else
  {
    $this->load->model('membership_model');

    if($query = $this->membership_model->create_member())
    {
      $data['main_content'] = 'signup_successful';
      $this->load->view('includes/template', $data);
    }
    else
    {
      $this->load->view('signup_form');
    }
  }
  }

  function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}




}
 ?>
