<?php
class Membership_model extends CI_Model {
  function validate()
  {
    $this->db->where('username',$this->input->post('username'));
    $this->db->where('password',md5($this->input->post('password')));
    $query = $this->db->get('members');

    if($query->num_rows() > 0)
    {
      return true;
    }
  }

  function create_member()
	{

		$new_member_insert_data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'email' => $this->input->post('email_address'),
			'address' => $this->input->post('address'),
    	'gender'=>$this->input->post('gender'));

		$insert = $this->db->insert('members', $new_member_insert_data);
		return $insert;
	}


  function get_all(){
    $this->db->select('email','username','address','gender');
    $query = $this->db->get('members');
    return $query->result_array();
  }


}
 ?>
