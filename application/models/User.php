<?php  
	/**
	 * 
	 */
	class User extends CI_Model {
		
		var $table='users';
		
		function __construct() {
			parent::__construct();
			
		}
		
		public function all($per_page='',$offset='', $count_all_results=FALSE, $search=array()){
			if(!empty($search)){
				$this->db->where($search);
			}
			$this->db->from($this->table);
			$this->db->order_by('created_at', 'desc');
			if($count_all_results){
				return $this->db->count_all_results();
			}
			if(!empty($per_page)){
				$this->db->limit($per_page, $offset);
			}
			return $this->db->get()->result();
		}
		
		public function find($id=''){
			$this->db->from($this->table);
			$this->db->where('id',$id);
			$this->db->limit(1);
			$find = $this->db->get();
			return $find->row();
		}
		
		public function add($data=array()){
			$this->db->set('created_at', date('Y-m-d H:i:s'));
			$this->db->insert($this->table, $data);
			return $this->db->insert_id();
		}
		
		public function edit($id='', $data=array()){
			$this->db->set('created_at', date('Y-m-d H:i:s'));
			$this->db->where('id', $id);
			return $this->db->update($this->table, $data);
		}
		
		public function remove($id=''){
			$this->db->where('id',$id);
			return $this->db->delete($this->table);
		}
		
		public function authenticate($username,$password){
			$this->db->where('username',$username);
			$this->db->where('password',md5($password));
			$this->db->limit(1);
			$auth = $this->db->get($this->table);
			if($auth->num_rows() !=1){
				return FALSE;
			}
			return $auth->row()->id;
		}
	}
	
?>