<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ed1 extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('usuarios_model', 'modelusuarios');
		if(!$this->session->userdata('logado')){
			redirect(base_url('login'));
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
			$this->load->view('frontend/template/html-header');
			$this->load->view('frontend/template/header-ed1');	
			$this->load->view('frontend/ed1');
			$this->load->view('frontend/template/footer');
			$this->load->view('frontend/template/html-footer');
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
			$this->load->view('frontend/template/html-header');
			$this->load->view('frontend/template/header-progresso');	
			$this->load->view('frontend/progresso');
			$this->load->view('frontend/template/footer');
			$this->load->view('frontend/template/html-footer');
		}else{
			echo "Houve um erro no sistema";
		}
	}
}
