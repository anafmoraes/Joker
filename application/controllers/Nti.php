<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nti extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('usuarios_model', 'modelusuarios');
		if(!$this->session->userdata('logado')){
			redirect(site_url('login'));
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

	public function glpi(){
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/template/Header-nti');	
		$this->load->view('frontend/Glpi');
		$this->load->view('frontend/template/Footer');
		$this->load->view('frontend/template/Html-footer');
	}

	public function progresso_time(){
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/template/Header-nti');	
		$this->load->view('frontend/Progresso_time');
		$this->load->view('frontend/template/Footer');
		$this->load->view('frontend/template/Html-footer');
		
	}

	public function progresso_individual(){
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/template/Header-nti');	
		$this->load->view('frontend/Progresso_individual');
		$this->load->view('frontend/template/Footer');
		$this->load->view('frontend/template/Html-footer');
	}

	public function perfil(){
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/template/Header-nti');
		$this->load->view('frontend/Perfil');
		$this->load->view('frontend/template/Footer');
		$this->load->view('frontend/template/Html-footer');
	}
}
