<?php 
	/**
	 * 
	 */
	class Sarpras extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			
		}
		
		public function index(){
			$data['yield'] = $this->load->view('sarpras/index','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function add(){
			// if(!$this->session->userdata('is_logged_in')){
				// redirect('karyawan/login');
			// }
			if(empty($type)){
				$type = 'post';
			}
			//$this->load->model('sarpras');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('','', 'trim|required');
			$this->form_validation->set_rules('','', 'trim');
			
			$data['yield'] = $this->load->view('sarpras/add','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function edit(){
			$data['yield'] = $this->load->view('sarpras/edit','', TRUE);
			$this->load->view('layout/dashboard',$data);
		}
		
		public function kondisi(){
			$data['yield'] = $this->load->view('sarpras/d_kondisi_sarpras','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function add_detail_kondisi(){
			$data['yield'] = $this->load->view('sarpras/a_d_kondisi','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function isi(){
			$data['yield'] = $this->load->view('sarpras/d_isi_sarpras','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function add_detail_isi(){
			$data['yield'] = $this->load->view('sarpras/a_d_isi','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function kondisi_edit(){
			$data['yield'] = $this->load->view('sarpras/e_d_kondisi','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function isi_edit(){
			$data['yield'] = $this->load->view('sarpras/e_d_isi','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		
		// public function all(){
			// $data['yield'] = $this->load->view('sarpras/all','',TRUE);
			// $this->load->view('layout/dashboard', $data);
		// }
// 		
		
// 		
		// public function find($id=''){
			// $data['yield'] = $this->load->view('sarpras/find','', TRUE);
			// $this->load->view('layout/dashboard');
		// }
	}
	
?>