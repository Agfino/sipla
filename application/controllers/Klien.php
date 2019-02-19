<?php  
	/**
	 * 
	 */
	class Klien extends CI_Controller {
		
		function __construct() {
			parent::__construct();
		}
		
		public function add(){
			$data['yield'] = $this->load->view('klien/add','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function all(){
			$data['yield'] = $this->load->view('klien/all','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function detail($id=''){
			$data['yield'] = $this->load->view('klien/detail', '', TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function edit($id=''){
			$data['yield'] = $this->load->view('klien/edit', '', TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function keteranganklien($offset=0){
			$this->load->model('keteranganklien');
			$per_page = 10;
			$total_rows = $this->keteranganklien->all($per_page,$offset, TRUE);
			
			$this->load->library('pagination');
			$config['base_url'] = site_url('karyawan/all/');
			$config['per_page'] = $per_page;
			$config['total_rows'] = $total_rows;
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] = "</ul>";
			$config['first_link'] = '&laquo;';
			$config['last_link'] = '&raquo;';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = "<li>";
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			
			$all['pagination'] = $this->pagination->create_links();
			$all['listketerangan'] = $this->keteranganklien->all($per_page,$offset, TRUE);
			$data['yield'] = $this->load->view('klien/keteranganklien',$all, FALSE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function tambahketklien(){
			$data['yield'] = $this->load->view('klien/tambahketklien', '', TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function editketklien($id=''){
			$data['yield'] = $this->load->view('klien/editketklien', '', TRUE);
			$this->load->view('layout/dashboard', $data);
		}
	}
	
?>