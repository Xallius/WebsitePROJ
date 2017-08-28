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

    public function edit_service(){
        if ($this->input->post()){
        $data = array(
            'sService' => $this->input->post('servName'),
            'sCategory' => $this->input->post('servCategory'),
            'sPrice' => $this->input->post('servPrice')
            );
        
        $this->User_models->editService($data, $this->input->post('servID'));
        redirect('Main/adminEditServices');
    }
    }

    public function delete_service($id){
        $this->User_models->deleteService($id);
        redirect('Main/adminEditServices');
    }
 }
?> 