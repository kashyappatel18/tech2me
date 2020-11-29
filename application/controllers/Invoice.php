<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library(array('form_validation','m_pdf'));
        $this->load->model(array('Customer_Model','Plan_Model','Invoice_Model'));
    }
    public function new_invoice()
    {
        $data['customers']= $this->Customer_Model->getList();
        $data['plans']= $this->Plan_Model->getList();
        $data['js']="invoice";
        
        $this->load->view('template/header');
        $this->load->view('pages/new_invoice',$data);
        $this->load->view('template/footer');
    }
    public function insert() {
        $this->form_validation->set_rules('cust_id','User Name','trim|required');
        $this->form_validation->set_rules('inv_date','Invoice Date','trim|required');
        $this->form_validation->set_rules('plan_id','Plan','trim|required');
        $this->form_validation->set_rules('exp_date','Plan Expiry Date','trim|required');
        $this->form_validation->set_rules('price','Price','trim|required|numeric');
        $this->form_validation->set_rules('payment','Payment','trim|numeric');

        if($this->form_validation->run()==FALSE){
            $this->new_invoice();
        }
        else {
            $arr=array(
                'cust_id'=>$this->input->post('cust_id'),
                'inv_date'=>$this->input->post('inv_date'),
                'plan_id'=>$this->input->post('plan_id'),
                'exp_date'=>$this->input->post('exp_date'),
                'price'=>$this->input->post('price'),
                'payment'=>$this->input->post('payment')
                );
            $con_id=$this->Invoice_Model->insert($arr);
            redirect('/new_invoice','refresh');
        }
    }
    function invoice_list(){
        $data['posts']=$this->Invoice_Model->getList();
        $this->load->view('template/header');
        $this->load->view('pages/invoice_list',$data);
        $this->load->view('template/footer');            
    }
    function edit_invoice($id){
        $data['invoice']= $this->Invoice_Model->getInvoiceDetails($id);
        $data['customers']= $this->Customer_Model->getList();
        $data['plans']= $this->Plan_Model->getList();
        $data['js']="invoice";

        $this->load->view('template/header');
        $this->load->view('pages/edit_invoice',$data);
        $this->load->view('template/footer');
    }
    public function update() {
        $this->form_validation->set_rules('cust_id','User Name','trim|required');
        $this->form_validation->set_rules('inv_date','Invoice Date','trim|required');
        $this->form_validation->set_rules('plan_id','Plan','trim|required');
        $this->form_validation->set_rules('exp_date','Plan Expiry Date','trim|required');
        $this->form_validation->set_rules('price','Price','trim|required|numeric');
        $this->form_validation->set_rules('payment','Payment','trim|numeric');

        if($this->form_validation->run()==FALSE){
            $this->edit_invoice($this->input->post('inv_id'));
        }
        else {
            $arr=array(
                'cust_id'=>$this->input->post('cust_id'),
                'inv_date'=>$this->input->post('inv_date'),
                'plan_id'=>$this->input->post('plan_id'),
                'exp_date'=>$this->input->post('exp_date'),
                'price'=>$this->input->post('price'),
                'payment'=>$this->input->post('payment')
                );
            $con_id=$this->Invoice_Model->update($arr,$this->input->post('inv_id'));
            redirect('/invoice_list','refresh');
        }
    }
    public function print_invoice($id){
        $data['invoice']= $this->Invoice_Model->getInvoiceDetails($id);
        $data['customers']= $this->Customer_Model->getList();
        $data['plans']= $this->Plan_Model->getList();
        

        $html=$this->load->view('template/pdf_header',null,true);
        $html.=$this->load->view('pages/print_invoice',$data,true);
        //$html.=$this->load->view('template/pdf_footer',null,true);
        
        
        echo $html;
        $filename='invoice.pdf';
        
        /*$pdf=$this->m_pdf->load();
        $pdf->WriteHTML("demo contenet",0);
        $pdf->Output($filename,'I');*/

    }
}
