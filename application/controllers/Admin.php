<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        $this->data['title'] = "TEFA RPL";
		$this->load->view('back/main', $this->data);
	}
}
