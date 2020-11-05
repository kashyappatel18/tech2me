<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model(array('Customer_Model','Plan_Model','Invoice_Model'));
    }
    public function new_invoice()
    {
        $data['customers']= $this->Customer_Model->getList();
        $data['plans']= $this->Plan_Model->getList();
        
        $this->load->view('template/header');
        $this->load->view('pages/new_invoice',$data);
        $this->load->view('template/footer');
    }
}
