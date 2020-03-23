<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Mahasiswa extends CI_Controller {
 
     public function index()
     {
        $data['title']='List Mahasiswa';
        $this->load->view('template/header');
        $this->load->view('Mahasiswa/index');
        $this->load->view('template/footer');
     }
 
 }
 
 /* End of file Controllername.php */
 
?>