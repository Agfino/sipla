<?php

if (!function_exists('get_option')){
	function get_option($option_name, $default = ''){
		$ci = &get_instance();
		$ci->db->select('value');
		$ci->db->from('dashboard');
		$ci->db->where('key', $option_name);
		$ci->db->limit(1);
		$get = $ci->db->get();
		$return = '';
		if($get->num_rows() == 1){
			$return = $get->row()->value;
			return !empty($return) ? $return : $default;
		}
		return false;
	}
}

if (!function_exists('update_option')){
	function update_option($option_name = '', $option_value = ''){
		$ci = &get_instance();
		
		
		$ci->db->select('value');
		$ci->db->from('dashboard');
		$ci->db->where('key', $option_name);
		$ci->db->limit(1);
		$get = $ci->db->get();
		
		if($get->num_rows() < 1){
			add_option($option_name, $option_value);
		}
		
		$ci->db->set('value', $option_value);
		$ci->db->set('updated_at', date('Y-m-d H:i:s'));
		$ci->db->where('key', $option_name);
		$ci->db->limit(1);
		$ci->db->update('dashboard');
		return false;
	}
}

if (!function_exists('add_option')){
	function add_option($option_name = '', $option_value = ''){
		$ci = &get_instance();
	
		if(!get_option($option_name)){
			$ci->db->set('key', $option_name);
			$ci->db->set('value', $option_value);
			$ci->db->set('created_at', date('Y-m-d H:i:s'));
			$ci->db->insert('dashboard');
		}
		
		return false;
	}
}