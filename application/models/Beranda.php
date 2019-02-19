<?php  
	/**
	 * 
	 */
	class Beranda extends CI_Model {
		
		var $table = 'dashboard';
		
		function __construct() {
			parent::__construct();
		}
		
		public function all(){
			$this->db->from($this->table);
			return $this->db->get()->result();			
		}
		
		// if($sql -> num_rows ==1){
				// foreach($sql->result() as $row){
					// $data[]['id'] = $row->id;
					// $data[]['nama_lembaga'] = $row->nama_lembaga;
					// $data[]['alamat'] = $row->alamat;
					// $data[]['kepala'] = $row->kepala;
					// $data[]['nip'] = $row->nip;
					// $data[]['nosk'] = $row->nosk;
				// }
			// }
			// return $data;
		
		public function edit($id='', $data=array()){
			$data = $this->db->set('created_at', date('Y-m-d H:i:s'));
			$data = $this->db->where('id', $id);
			return $this->db->update($this->table, $data);
		}
	}
	
?>