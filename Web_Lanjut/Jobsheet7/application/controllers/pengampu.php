<?php

class pengampu extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('pengampu_model');
        // $this->load->database();
    }

    public function index()
    {
        
        // $this->load->database();

        $data['title']='List Pengampu';
        $data['mengampu']=$this->pengampu_model->getAllpengampu();

        $this->load->view('template/header',$data);
        $this->load->view('pengampu/index',$data);
        $this->load->view('template/footer');
    }

}


?>