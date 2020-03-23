<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class user extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->model('login_model');

            if( $this->session->userdata('level')!="user"){
                
                redirect('Login','refresh');
                
            }

        }
        public function index(){

            $this->load->view('user');

        }
    
    }
    
    /* End of file user.php */
    
?>