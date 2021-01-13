<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct() {
        parent::__construct();
        $this->load->model(array('Customer_Model','Invoice_Model'));
    }

    public function index()
    {
        $data['num_of_cust']= $this->Customer_Model->getTotalNoOfCust();
        $data['free_users']=$this->Invoice_Model->getFreeUsers();
        $data['recovery_list']= $this->Invoice_Model->getRecoveryList();
        $data['expiry_list']= $this->Invoice_Model->getExpiryList();
        $data['total_recovery']= $this->Invoice_Model->getTotalRecoveryAmount();
        $data['total_credit']= $this->Invoice_Model->getTotalCreditAmount();
        $this->load->view('template/header');
        $this->load->view('welcome_message',$data);
        $this->load->view('template/footer');
    }
}
