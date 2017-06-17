<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Customer_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('customers');
	}
}
?>