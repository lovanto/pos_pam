<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
    
  }

	public function index()

	{
		$data['guru']= $this->UserModel->getAllDataguru();
		$this->load->view('end_user/index',$data);
	}
}
