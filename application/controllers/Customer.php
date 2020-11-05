<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Customer_Model');
    }

    public function new_customer()
    {
        $this->load->view('template/header');
        $this->load->view('pages/new_customer');
        $this->load->view('template/footer');
    }
    public function insert() {
        $this->form_validation->set_rules('user_name','User Name','trim|required|callback_is_available');
        $this->form_validation->set_rules('cust_name','Customer Name','trim|required');
        $this->form_validation->set_rules('cust_mobile','Mobile No','trim|numeric');
        $this->form_validation->set_rules('cust_add','Address','trim');
        $this->form_validation->set_rules('cust_city','City','trim|required');

        if($this->form_validation->run()==FALSE){
            $this->new_customer();
        }
        else {
            $arr=array(
                'name'=>$this->input->post('cust_name'),
                'user_name'=>$this->input->post('user_name'),
                'mobile_no'=>$this->input->post('cust_mobile'),
                'address'=>$this->input->post('cust_add'),
                'installation_addr'=>$this->input->post('cust_city')
                );
            $con_id=$this->Customer_Model->insert($arr);
            redirect('/new_customer','refresh');
        }
    }
    function is_available($name){
        if(!$this->Customer_Model->is_available($name))
            return TRUE;
        else{
            $this->form_validation->set_message('is_available','Customer with same user name already exist.');
            return FALSE;
        }
    }
    function customer_list(){
        $data['posts']=$this->Customer_Model->getList();
        $this->load->view('template/header');
        $this->load->view('pages/customer_list',$data);
        $this->load->view('template/footer');            
    }
    function edit_customer($id){
        $data['customer']= $this->Customer_Model->getCustomerDetails($id);

        $this->load->view('template/header');
        $this->load->view('pages/edit_customer',$data);
        $this->load->view('template/footer');
    }
    function update(){
        //print_r($this->input->post);
        $this->form_validation->set_rules('user_name','User Name','trim|required');
        $this->form_validation->set_rules('cust_name','Customer Name','trim|required');
        $this->form_validation->set_rules('cust_mobile','Mobile No','trim|numeric');
        $this->form_validation->set_rules('cust_add','Address','trim');
        $this->form_validation->set_rules('cust_city','City','trim|required');

        if($this->form_validation->run()==FALSE){
            $this->edit_customer($this->input->post('cust_id'));
        }
        else {
            $arr=array(
                'name'=>$this->input->post('cust_name'),
                'user_name'=>$this->input->post('user_name'),
                'mobile_no'=>$this->input->post('cust_mobile'),
                'address'=>$this->input->post('cust_add'),
                'installation_addr'=>$this->input->post('cust_city')
                );
            $con_id=$this->Customer_Model->update($arr,$this->input->post('cust_id'));
            redirect('/customer_list','refresh');
        }
    }
}
