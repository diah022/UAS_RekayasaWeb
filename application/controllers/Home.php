<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    
    

    public function index()
	{   
		
//        $this->load->view('layout_home');	
        $data['title'] = 'Welcome ';
        $this->my_template->loadHome('maintemp/home',$data);	 	
//        $this->my_template->loadAdmin('home/home',$data);	 	
	}
        
    
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */