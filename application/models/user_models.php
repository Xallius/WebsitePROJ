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

        $id =$this->db->select('id')
            ->order_by('id','desc')
            ->limit(1)
            ->get('account')
            ->row('id');

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('account', $data);
    }
    

    function get_user($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('account');
        return $query->result();
    }

    function insert_reservation($data)
    {
        $this->db->insert_batch('reservation', $data);
    }
    function getPendingReservation()
    {
        $this->db->select("rService, rStaff, date, time, id, rStatus")
                ->where("username", $this->session->userdata('username'));
        $query = $this->db->get('reservation');
        return $query->result();
    }

    function clearEmptyData()
    {
        $this->db->where('rService', '');
        $this->db->delete('reservation');
    }

    function clearEmptyData2()
    {
        $this->db->where('rService', '');
        $this->db->delete('creservation');
    }
    function getCancelledReservation()
    {
        $this->db->select("rService, rStaff, date, time, id")
                ->where("username", $this->session->userdata('username'));
        $query = $this->db->get('creservation');
        return $query->result();
    }

    function getSpecificRow(){
        $this->db->select("id")
                ->where("username", $this->session->userdata('username'));
        $query = $this->db->get('reservation');
        return $query->result();
    }
    function deleteRow($id){
        
        $rService = $this->db->select('rService')
                    ->where('id', $id)
                    ->get('reservation')
                    ->row('rService');

        $rStaff = $this->db->select('rStaff')
                    ->where('id', $id)
                    ->get('reservation')
                    ->row('rStaff');

        $date = $this->db->select('date')
                    ->where('id', $id)
                    ->get('reservation')
                    ->row('date');

        $time = $this->db->select('time')
                    ->where('id', $id)
                    ->get('reservation')
                    ->row('time');
        $rowData = array(
                'rService' => $rService,
                'rStaff' => $rStaff,
                'date' => $date,
                'time' => $time,
                'username' => $this->session->userdata('username'));

        $this->db->insert('cReservation', $rowData);
        $this->db->where('id', $id);
        $this->db->delete('reservation');
        redirect('Main/profile');
    }

    function getPendingReservationAdmin()
    {
        $this->db->select("rService, rStaff, date, time, id, rStatus, username");
        $query = $this->db->get('reservation');
        return $query->result();
    }

    function getCancelledReservationAdmin()
    {
        $this->db->select("rService, rStaff, date, time, id, rStatus, username");
        $query = $this->db->get('creservation');
        return $query->result();
    }
    function acceptRow($id){
        $data = array(
                'rStatus' => 1);
        $this->db->set($data)->where('id', $id)->update('reservation', $data);
        redirect('Main/admin');
    }
}
?>