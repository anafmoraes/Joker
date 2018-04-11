<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ed1 extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('usuarios_model', 'modelusuarios');
		if(!$this->session->userdata('logado')){
			redirect(site_url('login'));
		}
	}

	public function index()	{
		$id = $this->session->userdata('userlogado')->id;
	    $this->db->where('id_usuario', $id);
		$query = $this->db->get('historico_compras');
		foreach ($query->result() as $row) {
			$faltas = $row->faltas;
			$listas = $row->listas;
			$pontos = $row->pontos;
		}
		if ($this->modelusuarios->atualizarGasto($id, $faltas, $listas, $pontos)) {
			$this->load->view('frontend/template/Html-header');
			$this->load->view('frontend/template/Header-ed1');	
			$this->load->view('frontend/Ed1');
			$this->load->view('frontend/template/Footer');
			$this->load->view('frontend/template/Html-footer');
		}else{
			echo "Houve um erro no sistema";
		}
	}

	public function progresso()	{
		$id = $this->session->userdata('userlogado')->id;
	    $this->db->where('id_usuario', $id);
		$query = $this->db->get('historico_compras');
		foreach ($query->result() as $row) {
			$faltas = $row->faltas;
			$listas = $row->listas;
			$pontos = $row->pontos;
		}
		if ($this->modelusuarios->atualizarGasto($id, $faltas, $listas, $pontos)) {
			$this->load->view('frontend/template/Html-header');
			$this->load->view('frontend/template/Header-progresso');	
			$this->load->view('frontend/Progresso');
			$this->load->view('frontend/template/Footer');
			$this->load->view('frontend/template/Html-footer');
		}else{
			echo "Houve um erro no sistema";
		}
	}

	public function listas(){
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/template/Header-ed1');	
		$this->load->view('frontend/Listas');
		$this->load->view('frontend/template/Footer');
		$this->load->view('frontend/template/Html-footer');
	}
}
