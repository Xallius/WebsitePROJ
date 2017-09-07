<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_models extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        
    }
	
	
	// inserts new user data from signup
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
    
    //checks user validity
    function get_user($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('account');
        return $query->result();
    }

    //inserts reservation data to database
    function insert_reservation($data)
    {
        $this->db->insert_batch('reservation', $data);
    }

    //grabs pending reservation 
    function getPendingReservation()
    {
        $this->db->select("rService, rStaff, date, time, id, rStatus, datetime, rStartTime, rEndTime, duration, companion")
                ->where("username", $this->session->userdata('username'));
        $this->db->where("rStatus", "0");
        $query = $this->db->get('reservation');
        return $query->result();
    }

    function getBookedReservation()
    {
        $this->db->select("rService, rStaff, date, time, id, rStatus, datetime, rStartTime, rEndTime, duration, companion")
                ->where("username", $this->session->userdata('username'));
                $this->db->where("rStatus", "1");
        $query = $this->db->get('reservation');
        return $query->result();
    }
    //clears (NULL) data from reservation table
    function clearNullData()
    {
        $this->db->where('rService');
        $this->db->delete('reservation');
    }

    //clears whitespace from reservation table
    function clearEmptyData()
    {
        $this->db->where('rService', '');
        $this->db->delete('reservation');
    }

    //just to be sure...
    function clearEmptyData2()
    {
        $this->db->where('rService', '');
        $this->db->delete('creservation');
    }

    //grabs cancelled reservations
    function getCancelledReservation()
    {
        $this->db->select("rService, rStaff, date, time, id, rStatus, datetime, rStartTime, rEndTime, duration, companion")
                ->where("username", $this->session->userdata('username'));
        $query = $this->db->get('creservation');
        return $query->result();
    }

    //used to display to table
    function getSpecificRow(){
        $this->db->select("id")
                ->where("username", $this->session->userdata('username'));
        $query = $this->db->get('reservation');
        return $query->result();
    }

    //purges selected reservation row to 'reservation' and inserts into 'creservation (cancelled reservations)'
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

    //pending reservations for admin
    function getPendingReservationAdmin()
    {
        $this->db->select("rService, rStaff, date, time, id, rStatus, datetime, rStartTime, rEndTime, duration, companion")
                ->where("rStatus", "0");
        $query = $this->db->get('reservation');
        return $query->result();
    }

    //booked reservations for admin
    function getBookedReservationAdmin()
    {
        $this->db->select("rService, rStaff, date, time, id, rStatus, datetime, rStartTime, rEndTime, duration, companion")
                ->where("rStatus", "1");
        $query = $this->db->get('reservation');
        return $query->result();
    }
    //cancelled reservations for admin
    function getCancelledReservationAdmin()
    {
        $this->db->select("rService, rStaff, date, time, id, rStatus, datetime, rStartTime, rEndTime, duration, companion");
        $query = $this->db->get('creservation');
        return $query->result();
    }

    //makes 'pending' status to 'booked'
    function acceptRow($id){
        $data = array(
                'rStatus' => 1);
        $this->db->set($data)->where('id', $id)->update('reservation', $data);
        redirect('Main/admin');
    }
    //edit service items
   function editService($data, $id){
        $this->db->where('id', $id);
        $this->db->update('site_services', $data);
     }
    //get all available services
    function getAvailableServices(){
        $this->db->select("sService, sPrice, sCategory, id");
        $query = $this->db->get('site_services');
        return $query->result();
    }
    //inserts new service into 'site_services' db
    function addService($data){
        $this->db->insert('site_services', $data);
        redirect('Main/adminEditServices');
    }
    
    function deleteService($id){
        $this->db->where('id', $id)->delete('site_services');
    }

    function sendMessage(){
        $data = array(
            'custName' => $this->session->userdata('username'),
            'custMessage' => $this->input->post('textArea1')
        );
        $this->db->insert('custmessages', $data);
    }
}
?>