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

			$data['title'] = "JO n Jud8 Salon";
		}

		/**
		 *	Index Method
		 * 
		 * @subpackage		index -- Login Screen
		 * @param    		$page = view file name
		 * 
		 */

		public function index($page = 'index'){
			$data['content'] = 'payslip/content/'.$page;
			$this->load->view($data['content'],$data);
		}

		public function about($page = 'about'){
			$data['content'] = 'payslip/content/'.$page;
			$this->load->view($data['content'],$data);
		}

		public function reservation($page = 'reservation'){
			$data['content'] = 'payslip/content/'.$page;
			$this->load->view($data['content'],$data);
		}

		public function services($page = 'services'){
			$data['content'] = 'payslip/content/'.$page;
			$this->load->view($data['content'],$data);
		}

		public function signup($page = 'signup'){
			$data['content'] = 'payslip/content/'.$page;
			$this->load->view($data['content'],$data);
		}

		public function test($page = 'test'){
			$data['content'] = 'payslip/content/'.$page;
			$this->load->view($data['content'],$data);
		}
	}