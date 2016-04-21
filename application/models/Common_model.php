<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Common_model
 *
 * @author BGD
 */
class Common_model extends CI_Model{
    
    public function get_info($tbl_name,$id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $this->db->from($tbl_name);
        
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
        
//        $sql = "select * from $tbl_name where id=$id and status=1";
//        $query_result=$this->db->query($sql);
//        
//        $result = $query_result->row();
//        return $result;
    }
    
    public function update($tbl_name,$id,$data){
        $this->db->where('id',$id);
        $this->db->update($tbl_name, $data);
    }
    
    public function change_status($tbl_name, $id, $data){
        $this->db->set('status',0);
        $this->db->where('id',$id);
        $this->db->update($tbl_name);
    }
}
