<?php  
	/**
	 * 
	 */
	class Rekomendasi extends CI_Controller {
		
		function __construct() {
			parent::__construct();
		}
		
		public function all(){
			$data['yield'] = $this->load->view('rekomendasi/all','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function detail($id=''){
			$data['yield'] = $this->load->view('rekomendasi/detail', '',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
	}
	
?>