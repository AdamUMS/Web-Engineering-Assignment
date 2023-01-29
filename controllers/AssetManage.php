<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//For Admin
class AssetManage extends CI_Controller{
	
	function __construct(){
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index(){

        $this->load->view('header_logged_admin');

        $this->load->model('Assets');
        $data['asset']=$this->Assets->getAssets();

        $this->load->view('admin_asset_view', $data);

        $this->load->view('footer');
    }

    public function insertAsset(){
		
		$this->load->model('Assets');
		$data=array(
			'asset_id' => $this->input->post('asset_id'),
			'asset_name' => $this->input->post('asset_name')
		);
	

		$this->Assets->insertAsset($data);

		//redirect
		$this->index();			
    	
	}

	public function deleteAsset($asset_id){
		$this->load->model('Assets');
		$this->Assets->deleteAsset($asset_id);

		//redirect
		$this->index();			
    	

	}
    
}
?>