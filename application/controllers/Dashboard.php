<?php  
	/**
	 * 
	 */
	class Dashboard extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			
		}
		
		public function index(){
			// if(!$this->session->userdata('is_logged_in')){
				// redirect('karyawan/login');
			// }
			$this->load->model('beranda');
			$data['dashboard']=$this->beranda->all();
			$data['yield'] = $this->load->view('dashboard/home',$data,TRUE);
			$this->load->view('layout/dashboard',$data);
		}
		
		public function edit($id='',$data=array()){
			$this->load->model('beranda');
		
			$data['edit']=$this->beranda->edit($id,$data);
				var_dump($data);
			$data['user'] = $this->load->view('dashboard/edit',$data,TRUE);
			$this->load->view('layout/dashboard',$data);
		}
		
	}
	
?>