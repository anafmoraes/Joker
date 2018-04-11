<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->view('frontend/template/Header-admin');	
		$this->load->view('backend/Admin');
		$this->load->view('frontend/template/Footer');
		$this->load->view('frontend/template/Html-footer');
		
	}

	public function listas(){
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/template/Header-admin');	
		$this->load->view('backend/Listas');
		$this->load->view('frontend/template/Footer');
		$this->load->view('frontend/template/Html-footer');
	}

	public function pagina_editar(){
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/template/Header-admin');	
		$this->load->view('backend/Editar_lista');
		$this->load->view('frontend/template/Footer');
		$this->load->view('frontend/template/Html-footer');
	}

	public function pagina_cadastrar(){
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/template/Header-admin');	
		$this->load->view('backend/Cadastrar_lista');
		$this->load->view('frontend/template/Footer');
		$this->load->view('frontend/template/Html-footer');
	}

	public function editar_lista(){
	}

	public function cadastrar_lista(){
	}

	public function excluir_lista(){
	}
}
