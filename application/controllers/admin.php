<?php 
class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_models');
    }


    public function add_service(){
    	if ($this->input->post()){
    		$data = array(
    			'sService' => $this->input->post('servName'),
    			'sPrice' => $this->input->post('servPrice'),
    			'sCategory' => $this->input->post('servCategory')
    			);
    		$this->User_models->addService($data);
    	}
    }
 }
?>