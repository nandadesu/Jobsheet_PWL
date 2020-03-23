<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pengampu_model extends CI_Model {
    public function getAllpengampu()
    {
        $this->db->select('m.nim, m.nama, mk.nama_matkul, ms.nama_kelas')
        ->from('mahasiswa as m')
        ->join('mengampu as pm','m.id_mhs = pm.id_mhs')
        ->join('matakuliah as mk','pm.id_matkul= mk.id_matkul')
        ->join('kelas as ms','pm.id_kelas = ms.id_kelas');
        $query = $this->db->get();
        return $query->result_array();
    }    

}

/* End of file ModelName.php */

?>