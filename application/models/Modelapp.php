<?php

class Modelapp extends CI_Model{

    function __construct(){
        parent::__construct();
    }


    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }


   function TampilData($table)
    {
       return $this->db->get($table)->result();
    }

    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }

    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }
	
    
	function getKodeInfo(){
            $q = $this->db->query("select MAX(RIGHT(id_nsbh,3)) as kd_max from tbl_nasabah");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%03s", $tmp);
                }
            }else{
                $kd = "001";
            }
            return "I-".$kd;
    }
	
    function getEditData(){

        $id = $this->uri->segment(3);
        
        $this->db->select('*');
        $this->db->from('tbl_nasabah');
        $this->db->where('id_nsbh', $id);
        $query = $this->db->get();
        return $query->result();

    }

	
}