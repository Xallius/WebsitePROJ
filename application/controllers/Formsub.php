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
	    		if ($this->input->post()){
			    	$userDate = strtotime($this->input->post('appTime'));
			        if ($userDate > strtotime('09:00') && $userDate < strtotime('17:00')){
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
			            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')))
			            		),
			            	array(
			            		'rService' => $this->input->post('rOptions3'),
			            		'rStaff' => $this->input->post('rStaff3'),
			            		'date' => $this->input->post('date'),
			            		'time' => $this->input->post('appTime'),
			            		'username' => $this->session->userdata('username'),
			            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')))
			            		),
			            	array(
			            		'rService' => $this->input->post('rOptions4'),
			            		'rStaff' => $this->input->post('rStaff4'),
			            		'date' => $this->input->post('date'),
			            		'time' => $this->input->post('appTime'),
			            		'username' => $this->session->userdata('username'),
			            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')))
			            		),
			            	array(
			            		'rService' => $this->input->post('rOptions5'),
			            		'rStaff' => $this->input->post('rStaff5'),
			            		'date' => $this->input->post('date'),
			            		'time' => $this->input->post('appTime'),
			            		'username' => $this->session->userdata('username'),
			            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')))
			            		)
			            );
			    			//pass to model User_models
			            	$this->User_models->insert_reservation($data);
			            }
	    				else
	    				{
	    					$this->session->set_flashdata('timeError', 'Please enter time between 9AM and 5PM!');
			            	redirect('Main/reservation');
			            	exit;
	    				}
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