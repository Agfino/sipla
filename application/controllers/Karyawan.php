<?php  
	/**
	 * 
	 */
	class Karyawan extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			
		}
		
		public function index(){
			$data['yield'] = $this->load->view('users/list','',TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function login(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('authenticate', 'Authenticate', 'callback_authenticate', array('authenticate' => '%s failed'));
			// return var_dump($status);
			if($this->form_validation->run()==true){
				redirect('dashboard');
			}
			$data['yield'] = $this->load->view('karyawan/login','',TRUE);
			$this->load->view('layout/login',$data);
		}
		
		public function authenticate(){
			$username = $this->input->post('username',TRUE);
			$password = $this->input->post('password', TRUE);
			$status = $this->input->post('status',TRUE);
			$this->load->model('user');
				$auth = $this->user->authenticate($username,$password,$status); 
				// var_dump($auth);
				// exit();
				// if($status != 1){
					// return FALSE;
				// }
				if(!$auth){
					return FALSE;
				}
			$session = array();
			$session['is_logged_in'] = TRUE;
			$session['id'] = $auth;
			// var_dump($session);
				// exit();
			$this->session->set_userdata($session);
			// echo var_dump($status);
			return TRUE;
		}
		
		public function all($offset=0){
			// if(!$this->session->userdata('is_logged_in')){
				// redirect('karyawan/login');
			// }
			$this->load->model('user');
			
			$per_page = 10;
			$total_rows = $this->user->all($per_page,$offset, TRUE);
			
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
			$all['users'] = $this->user->all($per_page,$offset, FALSE);
			$data['yield'] = $this->load->view('karyawan/all',$all,TRUE);
			$this->load->view('layout/dashboard', $data);
		}
		
		public function add(){
			if(!$this->session->userdata('is_logged_in')){
				redirect('karyawan/login');
			}
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[users.username]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('password_confirmation', 'Password', 'trim|required|matches[password]');
			if($this->form_validation->run() == TRUE){
				$this->load->model('user');
				$user = array();
				$user['name'] = $this->input->post('name', TRUE);
				$user['ttl'] = $this->input->post('ttl',TRUE);
				$user['agama'] = $this->input->post('agama',TRUE);
				$user['alamat'] = $this->input->post('alamat',TRUE);
				$user['tgl_msk'] = $this->input->post('tgl_msk',TRUE);
				$user['jabatan'] = $this->input->post('jabatan',TRUE);
				$user['username'] = $this->input->post('username');
				$user['password'] = md5($this->input->post('password',TRUE));
				$user['status'] = 1;
				$id = $this->user->add($user);
				
				if($id){
					$this->session->set_flashdata("notif"," <div class='col-md-offset-4 col-md-4 alert alert-success' role='alert' style='text-align:center;'> Data successfully added !</div> ");
					redirect('karyawan/all');
				}
			}
			$data['yield'] = $this->load->view('karyawan/add','',TRUE);
			$this->load->view('layout/dashboard',$data);
		}
		
		public function edit($id='',$post=array()){
			if(!$this->session->userdata('is_logged_in')){
				redirect('karyawan/login');
			}
			$this->load->model('user');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$password = $this->input->post('password');
			if($password){
				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				$this->form_validation->set_rules('password_confirmation', 'Password', 'trim|required|matches[password]');
			}
			if($this->form_validation->run() == TRUE){
				$post = array();
				$post['name'] = $this->input->post('name', TRUE);
				$post['ttl'] = $this->input->post('ttl', TRUE);
				$post['agama'] = $this->input->post('agama', TRUE);
				$post['alamat'] = $this->input->post('alamat', TRUE);
				$post['tgl_msk'] = $this->input->post('tgl_msk', TRUE);
				$post['jabatan'] = $this->input->post('jabatan', TRUE);
				$post['username'] = $this->input->post('username');
				$post['status'] = 1;
				if($password){
					$post['password'] = md5($this->input->post('password', TRUE));
				}
				
				$updated = $this->user->edit($id,$post);
				
				// if($updated){
					// $this->session->set_flashdata('notif','success update');
				// }else{
					// $this->session->set_flashdata('notif','failed');
				// }
				if($updated){
					$this->session->set_flashdata("notif"," <div class='col-md-offset-4 col-md-4 alert alert-success' role='alert' style='text-align:center;'> Data successfully changed !</div> ");
					redirect('karyawan/all');
				}
				
				redirect('karyawan/all');
			}
			$content['message_success'] = $this->session->flashdata('message_success');
			$content['message_error'] = $this->session->flashdata('message_error');
			$content['user'] = $this->user->find($id);
			$data['yield'] = $this->load->view('karyawan/edit',$content, TRUE);
			$this->load->view('layout/dashboard',$data);
		}

		public function updateakun($id=''){
			$this->load->model('user');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$password = $this->input->post('password');
			if($password){
				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				$this->form_validation->set_rules('password_confirmation', 'Password', 'trim|required|matches[password]');
			}
			if($this->form_validation->run() == TRUE){
				$post = array();
				$post['name'] = $this->input->post('name', TRUE);
				$post['ttl'] = $this->input->post('ttl', TRUE);
				$post['agama'] = $this->input->post('agama', TRUE);
				$post['alamat'] = $this->input->post('alamat', TRUE);
				$post['tgl_msk'] = $this->input->post('tgl_msk', TRUE);
				$post['jabatan'] = $this->input->post('jabatan', TRUE);
				$post['username'] = $this->input->post('username');
				$post['status'] = 1;
				if($password){
					$post['password'] = md5($this->input->post('password', TRUE));
				}
				
				$updated = $this->user->edit($id,$post);
				
				// if($updated){
					// $this->session->set_flashdata('notif','success update');
				// }else{
					// $this->session->set_flashdata('notif','failed');
				// }
				if($updated){
					$this->session->set_flashdata("notif"," <div class='col-md-offset-4 col-md-4 alert alert-success' role='alert' style='text-align:center;'> Data successfully changed !</div> ");
					redirect('karyawan/all');
				}
				
				redirect('karyawan/all');
			}
			$content['message_success'] = $this->session->flashdata('message_success');
			$content['message_error'] = $this->session->flashdata('message_error');
			$content['user'] = $this->user->find($id);
			$data['yield'] = $this->load->view('karyawan/update_akun','',TRUE);
			$this->load->view('layout/dashboard',$data);
		}

		public function remove($id=''){
			 if(!$this->session->userdata('is_logged_in')){
				 redirect('karyawan/login');
			 }
			$this->load->model('user');
			$this->user->remove($id);
			redirect('karyawan/all');
		}
		
		public function logout(){
			$this->session->unset_userdata('is_logged_in');
			$this->session->unset_userdata('password');
			$this->session->sess_destroy();
			redirect('karyawan/login');
		}
	}
	
?>