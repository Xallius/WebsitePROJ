<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_models extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        
    }
	
	
	// insert
	function insert_user($data)
    {
        $data=array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'contact' => $this->input->post('contact'),
            'bday' => $this->input->post('bday'),
            'address' => $this->input->post('address'),
            'gender' => $this->input->post('gender')
        );
        $this->db->insert('account', $data);
	}
    
    //check and insert username and password with recent sign-up.
    function insert_cred()
    {
        $data=array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        $id = $this->db->count_all('account');
        
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('account', $data);
        print_r($id);
        
    }
    
    function get_user($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('account');
        return $query->result();
        
    }
}?>