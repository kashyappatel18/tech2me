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
    function update($arr,$inv_id){
        $this->db->where('inv_id',$inv_id);
        $this->db->update('invoice_master',$arr);
    }
    function getFreeUsers(){
        $this->db->distinct();
        $this->db->select('cust_id');
        $this->db->from('invoice_master');
        $this->db->where('price','0');
        $this->db->order_by('inv_date','DESC');
        $query=$this->db->get();
        
        return $query->num_rows();
    }
    function getRecoveryList(){
        $this->db->select('cust.user_name,cust.mobile_no,inv.inv_id,( price - payment ) as dif');
        $this->db->from('invoice_master as inv');
        $this->db->join('customer_master as cust','cust.cust_id=inv.cust_id');
        $this->db->join('plan_master as plan','plan.plan_id=inv.plan_id');
        $this->db->having('dif >','0');
        $this->db->order_by('inv_date','ASC');
        $query=$this->db->get();
        return $query->result_array();
    }
    function getExpiryList(){
        $this->db->distinct('inv.cust_id');
        $this->db->select('cust.user_name,cust.mobile_no,inv.inv_id,exp_date');
        $this->db->from('invoice_master as inv');
        $this->db->join('customer_master as cust','cust.cust_id=inv.cust_id');
        $this->db->join('plan_master as plan','plan.plan_id=inv.plan_id');
        $this->db->where('exp_date <', date('Y-m-d'));
        $this->db->order_by('exp_date','ASC');
        $query=$this->db->get();
        return $query->result_array();
    }
    function getTotalRecoveryAmount(){
        $this->db->select('sum(payment) as tot_recovery');
        $this->db->from('invoice_master');
        $this->db->limit(1);
        
        $query= $this->db->get();
        
        return $query->row();
    }
    function getTotalCreditAmount(){
        $this->db->select('sum(price)-sum(payment) as tot_credit');
        $this->db->from('invoice_master');
        $this->db->limit(1);
        
        $query= $this->db->get();
        
        return $query->row();
    }
}
