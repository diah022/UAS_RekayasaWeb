<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class 	Customers extends CI_Controller {
    
	public $crud;
	public $module;	
	
    public function __construct() {
        parent::__construct();					
//		$this->crud = new grocery_CRUD();
//		$this->crud->set_theme('datatables');
//		$this->module = 'customers';	
                $this->load->model('Customer_data');
                
    }

//    public function index()
//	{						
//		$this->crud->set_table($this->module);						
//		$output = $this->crud->render();		
//		$this->my_template->loadAdmin($this->module.'/'.$this->module,$output);
//	}
        
    public function index()
    {
//        $this->load->model('Customer_data');
//        $CustomData = new Customer_data();
        
        $data['title']='Customers | NORTHWIND';
	$data['Customers']=$this->Customer_data->tampil_data()->result();
	$data['current_link']="customer";
	$this->load->view('customers/customers_out', $data);
    }
         
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */