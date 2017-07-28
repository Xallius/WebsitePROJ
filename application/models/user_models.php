<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_models extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        
    }
	
	
	// insert
	function insert_user($data)
    {
        $this->load->database();
        $fname=$this->input->post('fname');
        $lname=$this->input->post('lname');
        $contact=$this->input->post('contact');
        $bday=$this->input->post('bday');
        $address=$this->input->post('address');
        $gender=$this->input->post('gender');
        $data=array('fname'=>$fname,
                    'lname'=>$lname,
                    'contact'=>$contact,
                    'bday'=>$bday,
                    'address'=>$address,
                    'gender'=>$gender);
        $this->db->insert('account', $data);
	}
    
    //check and insert username and password with recent sign-up.
    function insert_cred()
    {
        $this->load->database();
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $data=array('username'=>$username,
                    'password'=>$password);
        $id = $this->db->count_all('account');

        //$query = $this->db->get('account');
        //$result = $query->row();
        //return $result->id;
        
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