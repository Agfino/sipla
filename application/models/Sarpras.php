<?php 
	/**
	 * 
	 */
	class Sarpras extends CI_Model {
		
		var $table = 'sarpras';
		
		function __construct() {
			parent::__construct();
		}
		
		public function add(){
			
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
			return $this->db->get()->result;
		}
		
		public function edit(){
			
		}
		
		public function delete(){
			
		}
		
	}
	
?>