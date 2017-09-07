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
			//to avoid having duplicate stylists.
			if ($this->input->post('rOptions1') == $this->input->post('rOptions2') || $this->input->post('rOptions1') == $this->input->post('rOptions3') || $this->input->post('rOptions1') == $this->input->post('rOptions4') || $this->input->post('rOptions1') == $this->input->post('rOptions5')){
				$this->session->set_flashdata('trymsg', "Please pick another stylist for this service.");
				redirect('Main/reservation');
			}
			if ($this->input->post('rOptions2') == $this->input->post('rOptions1') || $this->input->post('rOptions2') == $this->input->post('rOptions3') || $this->input->post('rOptions2') == $this->input->post('rOptions4') || $this->input->post('rOptions2') == $this->input->post('rOptions5')){
				$this->session->set_flashdata('trymsg', "Please pick another stylist for this service.");
				redirect('Main/reservation');
			}
			if ($this->input->post('rOptions3') == $this->input->post('rOptions1') || $this->input->post('rOptions3') == $this->input->post('rOptions2') || $this->input->post('rOptions3') == $this->input->post('rOptions4') || $this->input->post('rOptions3') == $this->input->post('rOptions5')){
				$this->session->set_flashdata('trymsg', "Please pick another stylist for this service.");
				redirect('Main/reservation');
			}
			if ($this->input->post('rOptions4') == $this->input->post('rOptions1') || $this->input->post('rOptions4') == $this->input->post('rOptions2') || $this->input->post('rOptions4') == $this->input->post('rOptions3') || $this->input->post('rOptions4') == $this->input->post('rOptions5')){
				$this->session->set_flashdata('trymsg', "Please pick another stylist for this service.");
				redirect('Main/reservation');
			}
			if ($this->input->post('rOptions5') == $this->input->post('rOptions1') || $this->input->post('rOptions5') == $this->input->post('rOptions2') || $this->input->post('rOptions5') == $this->input->post('rOptions3') || $this->input->post('rOptions5') == $this->input->post('rOptions4')){
				$this->session->set_flashdata('trymsg', "Please pick another stylist for this service.");
				redirect('Main/reservation');
			}
    		 if ($this->form_validation->run() == FALSE)
	            {
	                $this->session->set_flashdata('trymsg', 'Please fillup at least 1 option!');
	                redirect('Main/reservation');
	            }
            else
	            {
	    		if ($this->input->post()){
	    				$duration = strtotime('00:00:00');
			    		$userDate = strtotime($this->input->post('appTime'));
			    		$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
			            if ($userDate > strtotime('09:00') && $userDate < strtotime('17:00')){
							//function to add "duration" and "end time"
							if($this->input->post('rOptions1') === "Women's Haircut"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions1') === "Blow Dry and Styling"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions1') === "Men's Haircut"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions1') === "Hair Color"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+3 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+2 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions1') === "Rebond"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+6 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+5 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions1') === "Relax"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+3 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+2 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions1') === "Brazilian"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+6 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+5 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions1') === "Hair and Make-up"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+2 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+1 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions1') === "Manicure"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}	
							if($this->input->post('rOptions1') === "Pedicure"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions1') === "Nail Art"){
				    		$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
				    		$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
				    		$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions2') === "Women's Haircut"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions2') === "Blow Dry and Styling"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions2') === "Men's Haircut"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions2') === "Hair Color"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+3 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+2 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions2') === "Rebond"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+6 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+5 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions2') === "Relax"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+3 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+2 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions2') === "Brazilian"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+6 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+5 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions2') === "Hair and Make-up"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+2 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+1 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions2') === "Manicure"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}	
							if($this->input->post('rOptions2') === "Pedicure"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions2') === "Nail Art"){
				    		$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
				    		$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
				    		$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions3') === "Women's Haircut"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions3') === "Blow Dry and Styling"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions3') === "Men's Haircut"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions3') === "Hair Color"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+3 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+2 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions3') === "Rebond"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+6 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+5 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions3') === "Relax"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+3 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+2 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions3') === "Brazilian"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+6 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+5 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions3') === "Hair and Make-up"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+2 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+1 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions3') === "Manicure"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}	
							if($this->input->post('rOptions3') === "Pedicure"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions3') === "Nail Art"){
				    		$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
				    		$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
				    		$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions4') === "Women's Haircut"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions4') === "Blow Dry and Styling"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions4') === "Men's Haircut"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions4') === "Hair Color"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+3 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+2 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions4') === "Rebond"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+6 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+5 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions4') === "Relax"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+3 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+2 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions4') === "Brazilian"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+6 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+5 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions4') === "Hair and Make-up"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+2 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+1 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions4') === "Manicure"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}	
							if($this->input->post('rOptions4') === "Pedicure"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions4') === "Nail Art"){
				    		$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
				    		$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
				    		$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions5') === "Women's Haircut"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions5') === "Blow Dry and Styling"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions5') === "Men's Haircut"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions5') === "Hair Color"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+3 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+2 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions5') === "Rebond"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+6 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+5 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions5') === "Relax"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+3 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+2 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions5') === "Brazilian"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+6 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+5 hours',strtotime($duration)));
							}
							if($this->input->post('rOptions5') === "Hair and Make-up"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+2 hours',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+1 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions5') === "Manicure"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}	
							if($this->input->post('rOptions5') === "Pedicure"){
								$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
								$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
								$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
							if($this->input->post('rOptions5') === "Nail Art"){
				    		$starttime = date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime')));
				    		$addedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($starttime)));
				    		$newDuration = date('H:i:s', strtotime('+0 hour',strtotime($duration)));
							}
					$data=array(
			            	array(
			            		'rService' => $this->input->post('rOptions1'),
			            		'rStaff' => $this->input->post('rStaff1'),
			            		'date' => $this->input->post('date'),
			            		'time' => $this->input->post('appTime'),
								'username' => $this->session->userdata('username'),
								'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime'))),
								'rStartTime' => $starttime,
								'rEndTime' => $addedTime,
								'duration' => $newDuration,
								'companion' => $this->input->post('companion')
			            		),
			            	array(
			            		'rService' => $this->input->post('rOptions2'),
			            		'rStaff' => $this->input->post('rStaff2'),
			            		'date' => $this->input->post('date'),
			            		'time' => $this->input->post('appTime'),
								'username' => $this->session->userdata('username'),
								'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime'))),
								'rStartTime' => $starttime,
								'rEndTime' => $addedTime,
								'duration' => $newDuration,
								'companion' => $this->input->post('companion')
			            		),
			            	array(
			            		'rService' => $this->input->post('rOptions3'),
			            		'rStaff' => $this->input->post('rStaff3'),
			            		'date' => $this->input->post('date'),
			            		'time' => $this->input->post('appTime'),
			            		'username' => $this->session->userdata('username'),
			            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime'))),
								'rStartTime' => $starttime,
								'rEndTime' => $addedTime,
								'duration' => $newDuration,
								'companion' => $this->input->post('companion')
			            		),
			            	array(
			            		'rService' => $this->input->post('rOptions4'),
			            		'rStaff' => $this->input->post('rStaff4'),
			            		'date' => $this->input->post('date'),
			            		'time' => $this->input->post('appTime'),
			            		'username' => $this->session->userdata('username'),
			            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime'))),
								'rStartTime' => $starttime,
								'rEndTime' => $addedTime,
								'duration' => $newDuration,
								'companion' => $this->input->post('companion')
			            		),
			            	array(
			            		'rService' => $this->input->post('rOptions5'),
			            		'rStaff' => $this->input->post('rStaff5'),
			            		'date' => $this->input->post('date'),
			            		'time' => $this->input->post('appTime'),
			            		'username' => $this->session->userdata('username'),
			            		'datetime' => date('Y-m-d H:i:s',strtotime($this->input->post('date').' '.$this->input->post('appTime'))),
								'rStartTime' => $starttime,
								'rEndTime' => $addedTime,
								'duration' => $newDuration,
								'companion' => $this->input->post('companion')
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