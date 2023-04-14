<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model('banner_model', 'banner');
	}
	
	public function index()
	{
		$data['title']		= 'Beranda';
		$data['page']		= 'home/index';

		$this->load->view('front/layouts/main', $data);
	}

}

/* End of file Controllername.php */
