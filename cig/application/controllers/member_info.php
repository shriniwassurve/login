<?php
class Member extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('membership_model');
  }


  function index()
  {

  $this->data['results'] = $this->membership_model->get_all();
  $this->load->view("members_area", $data);
  }
}


 ?>
