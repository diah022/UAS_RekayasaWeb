<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function index() {
        $data['title'] = 'Login';
        $this->my_template->loadAdmin('login',$data);	
    }
    
    public function auth() {
        $abc = $this->input->post('username');
        $cdf = $this->input->post('password');
        if(($abc == "johndoe") && ($cdf == "joh")){
            $newdata = array(
                    'userId'    => 123,
                    'username'  => 'johndoe',
                    'email'     => 'johndoe@some-site.com',
                    'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
//            echo "Session sudah dibuat ".$this->session->
        }
        else {
            echo "username atau password salah";
        }
        
    }
    
    public function logout() {
        $newdata = array(
                    'userId'    => '',
                    'username'  => '',
                    'email'     => '',
                    'logged_in' => FALSE
        );

        $this->session->unset_userdata($newdata);
    }
}

