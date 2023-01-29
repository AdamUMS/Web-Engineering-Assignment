<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//For Admin
class RequestManage extends CI_Controller{
	
	function __construct(){
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index(){

        $this->load->view('header_logged_admin');

        $this->load->model('Assets');
        $data['form']=$this->Assets->getForm();

        $this->load->view('admin_req_view', $data);

        $this->load->view('footer');
    }

    // public function approveAsset(){
        
    //     $asset_id = $this->uri->segment(3);
        
    // }
}
?>