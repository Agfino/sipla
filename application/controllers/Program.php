<?php  
	/**
	 * 
	 */
	class Program extends CI_Controller {
		
		function __construct() {
			parent::__construct();
		}
		
		public function all(){
			$data['yield'] = $this->load->view('program/all','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function detail($id=''){
			$data['yield'] = $this->load->view('program/detail_program','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function edit($id=''){
			$data['yield'] = $this->load->view('program/e_detail_program','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function delete($id=''){
			// $data['yield'] = $this->load->view('program/all','',TRUE);
			// $this->load->view('layout/dashboard', $data);
		}
	}
	
?>