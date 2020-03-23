<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {

    public function getAllmahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahdatamhs()
    {
        $data=[
            "nama" => $this->input->post('nama',true),
            "nim" => $this->input->post('nim',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true),
        ];
        $this->db->insert('mahasiswa',$data);
    }

}

?>