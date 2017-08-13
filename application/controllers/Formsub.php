<?php 
class Formsub extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_models');
    }

    public function check_reservation(){

    		//validate if one of the options has value
    		$this->form_validation->set_rules('rOptions1', 'Reservation Option 1', 'trim|required|min_length[3]|max_length[30]|xss_clean');
    		$this->form_validation->set_rules('rStaff1', 'Reservation Staff 1', 'trim|required|min_length[3]|max_length[30]|xss_clean');

    		 if ($this->form_validation->run() == FALSE)
	            {
	                $this->session->set_flashdata('rFailed', 'Please fillup at least 1 option!');
	                redirect('Main/reservation');
	            }
            else
	            {
	            //inserts options 1~5 within database
	    		if ($this->input->post()){
	    		
	    		$data=array(
	            	array(
	            		'rService' => $this->input->post('rOptions1'),
	            		'rStaff' => $this->input->post('rStaff1'),
	            		'date' => $this->input->post('date'),
	            		'time' => $this->input->post('appTime'),
	            		'username' => $this->session->userdata('username'),
	            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')))
	            		),
	            	array(
	            		'rService' => $this->input->post('rOptions2'),
	            		'rStaff' => $this->input->post('rStaff2'),
	            		'date' => $this->input->post('date'),
	            		'time' => $this->input->post('appTime'),
	            		'username' => $this->session->userdata('username'),
	            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date')))
	            		),
	            	array(
	            		'rService' => $this->input->post('rOptions3'),
	            		'rStaff' => $this->input->post('rStaff3'),
	            		'date' => $this->input->post('date'),
	            		'time' => $this->input->post('appTime'),
	            		'username' => $this->session->userdata('username'),
	            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date')))
	            		),
	            	array(
	            		'rService' => $this->input->post('rOptions4'),
	            		'rStaff' => $this->input->post('rStaff4'),
	            		'date' => $this->input->post('date'),
	            		'time' => $this->input->post('appTime'),
	            		'username' => $this->session->userdata('username'),
	            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date')))
	            		),
	            	array(
	            		'rService' => $this->input->post('rOptions5'),
	            		'rStaff' => $this->input->post('rStaff5'),
	            		'date' => $this->input->post('date'),
	            		'time' => $this->input->post('appTime'),
	            		'username' => $this->session->userdata('username'),
	            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date')))
	            		)
	            );
	    			//pass to model User_models
	            	$this->User_models->insert_reservation($data);
		            }    
    		}
    		$this->session->set_flashdata('rSuccess', 'You have successfully booked an appointment!');
    		redirect("Main/profile");
    }
    public function delete_row($id){
    		$this->User_models->deleteRow($id);
    }

    public function accept_row($id){
    		$this->User_models->acceptRow($id);
    }
}