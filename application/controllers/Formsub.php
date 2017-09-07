<?php 
class Formsub extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_models');
    }
    public function addTime (string $rOptionNum, string $serviceName, string $hourAdd){
    	
    	$optionValue = $this->input->post($rOptionNum);
    	if ($optionValue === $serviceName){
    		$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));

    		$addedTime = date('Y-m-d H:i:s',strtotime($hourAdd,strtotime($startTime)));
    	}
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
	    				$duration = strtotime('00:00:00');
			    		$userDate = strtotime($this->input->post('appTime'));
			    		$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
			            if ($userDate > strtotime('09:00') && $userDate < strtotime('17:00')){
			            	if ($this->input->post('rOptions1') === "Rebond"){
				    		$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));

				    		$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
				    		$newDuration = date('H:i:s', strtotime('-1 hour +30 minutes',strtotime($duration)));
				    		}
				    		addTime($this->input->post('rOptions2'), 'Rebond');
					$data=array(
			            	array(
			            		'rService' => $this->input->post('rOptions1'),
			            		'rStaff' => $this->input->post('rStaff1'),
			            		'date' => $this->input->post('date'),
			            		'time' => $this->input->post('appTime'),
			            		'username' => $this->session->userdata('username'),
			            		'datetime' => $addedTime,
			            		'duration' => $newDuration
			            		),
			            	array(
			            		'rService' => $this->input->post('rOptions2'),
			            		'rStaff' => $this->input->post('rStaff2'),
			            		'date' => $this->input->post('date'),
			            		'time' => $this->input->post('appTime'),
			            		'username' => $this->session->userdata('username'),
			            		'datetime' => $addedTime2,
			            		'duration' => $newDuration
			            		),
			            	array(
			            		'rService' => $this->input->post('rOptions3'),
			            		'rStaff' => $this->input->post('rStaff3'),
			            		'date' => $this->input->post('date'),
			            		'time' => $this->input->post('appTime'),
			            		'username' => $this->session->userdata('username'),
			            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime'))),
			            		'duration' => $newDuration
			            		),
			            	array(
			            		'rService' => $this->input->post('rOptions4'),
			            		'rStaff' => $this->input->post('rStaff4'),
			            		'date' => $this->input->post('date'),
			            		'time' => $this->input->post('appTime'),
			            		'username' => $this->session->userdata('username'),
			            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime'))),
			            		'duration' => $newDuration
			            		),
			            	array(
			            		'rService' => $this->input->post('rOptions5'),
			            		'rStaff' => $this->input->post('rStaff5'),
			            		'date' => $this->input->post('date'),
			            		'time' => $this->input->post('appTime'),
			            		'username' => $this->session->userdata('username'),
			            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime'))),
			            		'duration' => $newDuration
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
    		redirect("Main/pendingReservationCustomer");
    }
    public function delete_row($id){
    		$this->User_models->deleteRow($id);
    }

    public function accept_row($id){
    		$this->User_models->acceptRow($id);
	}
	
	public function send_message(){
			$this->User_models->sendMessage();
	}
}