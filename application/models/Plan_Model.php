<?php

class Plan_Model extends CI_Model{
    function insert($arr){
        $this->db->insert('plan_master',$arr);
        return $this->db->insert_id();
    }
    function update($arr,$plan_id){
        $this->db->where('plan_id',$plan_id);
        $this->db->update('plan_master',$arr);
    }
    function getList(){
        $this->db->select('*');
        $this->db->from('plan_master');
        $query=$this->db->get();
        return $query->result_array();
    }
    function getPlanDetails($plan_id){
        $this->db->select('*');
        $this->db->from('plan_master');
        $this->db->where('plan_id',$plan_id);
        $this->db->limit(1);
        
        $query= $this->db->get();
        
        return $query->row();
    }
    function getRate($plan_id){
            $this->db->select('plan_price');
            $this->db->from('plan_master');
            $this->db->where('plan_id',$plan_id);

            $this->db->limit(1);
            
            $query=$this->db->get();
            
            //$unit_price=$query->row()->unit_price;
            //return $query->num_rows();
            return $query->row()->plan_price;
            
            
        }
}