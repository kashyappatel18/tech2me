<?php

class Invoice_Model extends CI_Model{
    function insert($arr){
        $this->db->insert('invoice_master',$arr);
        return $this->db->insert_id();
    }
    function getList(){
        $this->db->select('*');
        $this->db->from('invoice_master as inv');
        $this->db->join('customer_master as cust','cust.cust_id=inv.cust_id');
        $this->db->join('plan_master as plan','plan.plan_id=inv.plan_id');
        $this->db->order_by('inv_date','DESC');
        $query=$this->db->get();
        return $query->result_array();
    }
    function getInvoiceDetails($inv_id){
        $this->db->select('*');
        $this->db->from('invoice_master');
        $this->db->where('inv_id',$inv_id);
        $this->db->limit(1);
        
        $query= $this->db->get();
        
        return $query->row();
    }
}
