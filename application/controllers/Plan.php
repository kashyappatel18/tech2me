<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Plan_Model');
    }
    public function new_plan()
    {
            $this->load->view('template/header');
            $this->load->view('pages/new_plan');
            $this->load->view('template/footer');
    }
    function insert(){
        $this->form_validation->set_rules('plan_name','Plan Name','trim|required');
        $this->form_validation->set_rules('plan_price','Price','trim|required|numeric');
        

        if($this->form_validation->run()==FALSE){
            $this->new_plan();
        }
        else {
            $arr=array(
                'plan_name'=>$this->input->post('plan_name'),
                'plan_price'=>$this->input->post('plan_price')
                );
            $plan_id=$this->Plan_Model->insert($arr);
            redirect('/new_plan','refresh');
        }
    }
    function plan_list(){
        $data['posts']=$this->Plan_Model->getList();
        $this->load->view('template/header');
        $this->load->view('pages/plan_list',$data);
        $this->load->view('template/footer');
    }
    function edit_plan($id){
        $data['plan']= $this->Plan_Model->getPlanDetails($id);

        $this->load->view('template/header');
        $this->load->view('pages/edit_plan',$data);
        $this->load->view('template/footer');
    }
    function update(){
        $this->form_validation->set_rules('plan_name','Plan Name','trim|required');
        $this->form_validation->set_rules('plan_price','Plan Price','trim|required|numeric');        

        if($this->form_validation->run()==FALSE){
            $this->edit_plan($this->input->post('plan_id'));
        }
        else {
            $arr=array(
                'plan_name'=>$this->input->post('plan_name'),
                'plan_price'=>$this->input->post('plan_price')
                );
            $plan_id=$this->Plan_Model->update($arr,$this->input->post('plan_id'));
            redirect('/plan_list','refresh');
        }
    }
    function getRate(){
        $plan_id=$this->input->post('plan_id');
        echo $this->Plan_Model->getRate($plan_id);
    }
}
