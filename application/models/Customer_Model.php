<?php
class Customer_Model extends CI_Model{
    function insert($arr){
        $this->db->insert('customer_master',$arr);
        return $this->db->insert_id();
    }
    function is_available($user_name){
        $this->db->select('*');
        $this->db->from('customer_master');
        $this->db->where('user_name',$user_name);
        $this->db->limit(1);

        $query=$this->db->get();

        if($query->num_rows()>0)
                return TRUE;
        else
                return FALSE;
    }
    function getList(){
        $this->db->select('*');
        $this->db->from('customer_master');
        $query=$this->db->get();
        return $query->result_array();
    }
    function getCustomerDetails($cust_id){
        $this->db->select('*');
        $this->db->from('customer_master');
        $this->db->where('cust_id',$cust_id);
        $this->db->limit(1);
        
        $query= $this->db->get();
        
        return $query->row();
    }
    function update($arr,$cust_id){
        $this->db->where('cust_id',$cust_id);
        $this->db->update('customer_master',$arr);
    }
    function getTotalNoOfCust(){
        $this->db->select('*');
        $this->db->from('customer_master');
        
        $query=$this->db->get();
        
        return $query->num_rows();
    }
}