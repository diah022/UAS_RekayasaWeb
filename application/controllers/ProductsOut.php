<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsOut extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Products_data');        
    }
	public function index()
	{
		$data['title']='Products | NORTHWIND';
		$data['Products']=$this->Products_data->tampil_data()->result();
		$data['current_link']="products";
		$this->load->view('products/products_out', $data);
	}
	public function category(){
		$data['title']='Category Products | NORTHWIND';
		$data['Cat_detail']=$this->Products_data->cat_detail()->result();
		$data['Cat_detail_hitung']=$this->Products_data->cat_detail_hitung()->result();
		$data['current_link']="products";
		$this->load->view('category', $data);
	}
	public function category_detail(){
		$id=$this->uri->segment(3);
		$data['title']='Category Product Detail | NORTHWIND';
		$data['Category_details']=$this->Products_data->category_detail($id);
		$data['Product_incat']=$this->Products_data->product_in_category($id);
		$data['current_link']="products";
		$this->load->view('category_detail', $data);
	}
}
?>