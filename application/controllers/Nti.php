<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nti extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('usuarios_model', 'modelusuarios');
		if(!$this->session->userdata('logado')){
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/template/Header-nti');	
		$this->load->view('frontend/Nti');
		$this->load->view('frontend/template/Footer');
		$this->load->view('frontend/template/Html-footer');
	}
}
