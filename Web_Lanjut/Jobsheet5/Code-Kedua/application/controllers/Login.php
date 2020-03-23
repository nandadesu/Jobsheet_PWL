<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->model('login_model');



        }


        public function index()
        {
            $data['pesan']="username dan passsword anda salah";
            $data['title'] = 'Login';
            $this->load->view('template/header_login',$data);
            $this->load->view('Login/index',$data);
            $this->load->view('template/footer');

        }

        public function proses_login()
        {
            $username= htmlspecialchars ($this->input->post('uname1'));
            $password= htmlspecialchars ($this->input->post('pwd1'));
            $ceklogin = $this->login_model->Login($username,$password);

            if($ceklogin){
                foreach($ceklogin as $row);
                $this->session->set_userdata('level', $row->level);
                $this->session->set_userdata('user', $row->username);

                    if($this->session->userdata('level')=="admin"){
                        redirect('Mahasiswa/index');


                    }elseif($this->session->userdata('level')=="user"){
                        redirect('user');
                    }
            }else{
                redirect('login/index','refresh');
            }

            $this->load->helper('form');
            $data['title'] = 'Login';
            $this->load->view('template/header_login',$data);
            $this->load->view('Login/index');

        }

        public function logout(){
            $this->session->sess_destroy();
            
            redirect('Login','refresh');
            
        }
    
    }
    
    /* End of file Login.php */
    
?>