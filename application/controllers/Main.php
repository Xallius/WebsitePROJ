<?php
	/**
	* Main Controller Class
	*
	* @package     WebsitePROJ
	* @category    DOST-X_Project
	* @link        https://github.com/Xallius/WebsitePROJ
		* @copyright	2017
	**/
	class Main extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('user_models');
		}
		/**
			*	Index Method
		*
				* @subpackage		index -- Login Screen
				* @param    		$page = view file name
		*
		*/
		public function index($page = 'index'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/'.$page;
			$this->load->view('master/layout',$data);
		}

		public function about($page = 'about'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/'.$page;
			$this->load->view('master/layout',$data);
		}

		public function reservation($page = 'reservation'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/'.$page;
			$this->load->view('master/layout',$data);
		}

		public function services($page = 'services'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/'.$page;
			$this->load->view('master/layout',$data);
		}

		public function signup($page = 'signup'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/'.$page;
			$this->load->view('master/layout',$data);
		}

		public function test($page = 'test'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/'.$page;
			$this->load->view('master/layout',$data);
		}

		public function signup2($page ='signup2'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout',$data);
		}

		public function login($page = 'login'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout',$data);
		}

		public function logout($page = 'logout'){
			$data = array('login' => '', 'uname' => '', 'uid' => '');
        	$this->session->unset_userdata($data);
        	$this->session->sess_destroy();
        	redirect('Main/index');
		}

		public function profile($page = 'profile'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout',$data);
		}

		
	}		
?>