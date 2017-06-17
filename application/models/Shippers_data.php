<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shippers_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('shippers');
	}
}
?>