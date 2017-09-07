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

		//page for customer reservations
		public function reservation($page = 'reservation'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/'.$page;
			$this->load->view('master/layout',$data);
			//$query = $this->user_models->getStaffAvailability();
			//$data['staffData'] = $query;
		}

		//list of services
		public function services($page = 'services'){
			$query = $this->user_models->getAvailableServices();
			$data['servicesRow'] = $query;
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/'.$page;
			$this->load->view('master/layout',$data);
		}

		//customer signup
		public function signup($page = 'signup'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/'.$page;
			$this->load->view('master/layout',$data);
		}

		//filler for gallery
		public function test($page = 'test'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/'.$page;
			$this->load->view('master/layout',$data);
		}

		//customer signup step 2: username and password
		public function signup2($page ='signup2'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout',$data);
		}

		//login..
		public function login($page = 'login'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout',$data);
		}

		//logout
		public function logout($page = 'logout'){
			$data = array('login' => '', 'uname' => '', 'uid' => '');
        	$this->session->unset_userdata($data);
        	$this->session->sess_destroy();
        	redirect('Main/index');
		}


		//viewing customers reservation status
		public function pendingReservationCustomer($page = 'pendingReservationCustomer'){
			$this->user_models->clearEmptyData();
			$this->user_models->clearNullData();
			//grabs pending reservation to be viewed by customer
			$query = $this->user_models->getPendingReservation();
			$data['resRow'] = $query;
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout',$data);
		}

		public function bookedReservationCustomer($page = 'bookedReservationCustomer'){
			$this->user_models->clearEmptyData();
			//grabs pending reservation to be viewed by customer
			$query = $this->user_models->getBookedReservation();
			$data['resRow'] = $query;
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout',$data);
		}

		//customers cancelled reservation
		public function cancelledReservationCustomer($page ='cancelledReservationCustomer'){
			$this->user_models->clearEmptyData2();
			$query = $this->user_models->getCancelledReservation();
			$data['resRow'] = $query;
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout',$data);			
		}

		//admin view to check pending/booked reservations
		public function admin($page = 'admin'){
			//clears generated whitespace by reservation
			$this->user_models->clearEmptyData();
			//clears null data
			$this->user_models->clearNullData();
			//grabs pending reservations
			$query = $this->user_models->getPendingReservationAdmin();
			$data['resRow'] = $query;
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout', $data);
		}

		public function pendingReservation($page = 'pendingReservation'){
			//grabs pending reservations
			$query = $this->user_models->getPendingReservationAdmin();
			$data['resRow'] = $query;
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout', $data);
		}

		public function bookedReservation($page = 'bookedReservation'){
			//grab booked reservations
			$query = $this->user_models->getBookedReservationAdmin();
			$data['resRow'] = $query;
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout', $data);
		}
		//admin view to check cancelled reservations
		public function cancelledReservation($page ='cancelledReservation'){
			//just to be sure...
			$this->user_models->clearEmptyData2();
			//grabs cancelled reservations
			$query = $this->user_models->getCancelledReservationAdmin();
			$data['resRow'] = $query;
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout',$data);			
		}

			public function adminEditServices($page ='adminEditServices'){
			$query = $this->user_models->getAvailableServices();
			$data['servicesData'] = $query;
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout', $data);
		}

		public function custMessage($page = 'custMessage'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout',$data);	
		}

		public function dashboard($page = 'dashboard'){
			$data['title'] = "JO n Jud8 Salon";
			$data['content'] = 'content/' .$page;
			$this->load->view('master/layout',$data);	
		}
	}		
?>