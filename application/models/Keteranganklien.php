<?php  
	/**
	 * 
	 */
	class Keteranganklien extends CI_Model {
			
		var $table = 'keteranganklien';
		
		function __construct(){
			parent::__construct();
			
		}
		
		public function all($per_page='',$offset='',$count_all_result=FALSE,$search=array()){
				
			$this->db->from($this->table);
			$this->db->order_by('created_at','desc');
			if($count_all_result){
				return $this->db->count_all_results();
			}
			if(!empty($per_page)){
				$this->db->limit($per_page,$offset);
			}
			return $this->db->get()->result();	
		}
		
	}
	
?>