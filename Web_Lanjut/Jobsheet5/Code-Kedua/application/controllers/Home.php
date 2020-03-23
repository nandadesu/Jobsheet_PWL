<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Home extends CI_Controller {

 
     public function index($name='')
     {
        $data['title']='Home';
        //s$data['name']=$name;
        $this->load->view('template/header',$data);
        //echo"Selamat Datang di Halaman Home";
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
        $this->load->library('session');

        if( $this->session->userdata('level')!="admin"){
            
            redirect('Login','refresh');
            
        }
     }
 
 }
 
 /* End of file Controllername.php */
 
?>