<?php 
class Signup extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_models');
    }
    
    public function index(){
    
    }
    
    public function test2()
    {
            
            $this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
            $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
            $this->form_validation->set_rules('contact', 'Contact #', 'trim|required|min_length[3]|max_length[30]|xss_clean');
            $this->form_validation->set_rules('bday', 'Birthday', 'trim|required|min_length[3]|max_length[30]|xss_clean');
            $this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[3]|max_length[30]|xss_clean');
            $this->form_validation->set_rules('gender', 'Gender', 'trim|required|min_length[3]|max_length[30]|xss_clean');
            
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('content/signup');
            }
            else
            {
                $wholepost=$this->input->post();
                $this->User_models->insert_user($wholepost);
                redirect("Main/signup2", 'refresh');   
            }    
    }

    public function signup2(){
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[30]|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[30]|xss_clean');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|min_length[3]|max_length[30]|matches[password]|xss_clean');
            
            
            if ($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata('message', 'Passwords does not match!');
                redirect("Main/signup2");
            }
            else
            {
                $this->user_models->insert_cred();
                redirect("Main/login");
            }
    }
    
    public function login(){
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[30]|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[30]|xss_clean');
        
            if ($this->form_validation->run() == FALSE)
            {
                // validation fail
                redirect("Main/login");
            }
            else   
            {
                    $uresult = $this->user_models->get_user($this->input->post('username'), $this->input->post('password'));
                    if (count($uresult) > 0)
                    {
                        // set session
                        $sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
                        $this->session->set_userdata($sess_data);
                        redirect("Main/index");
                    }
                    else
                    {
                         $this->session->set_flashdata('message', 'Username or password is incorrect!');
                        redirect("Main/login");
                    }
            }
    }
}
?>