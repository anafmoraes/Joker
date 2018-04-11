<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('usuarios_model', 'modelusuarios');
		 $this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/Login');
		$this->load->view('frontend/template/Footer');
		$this->load->view('frontend/template/Html-footer');
	}

	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-nome', 'Nome do usuário', 'required'); #nome
		$this->form_validation->set_rules('txt-email', 'Email', 'required|valid_email|is_unique[usuarios.email]'); #email
		$this->form_validation->set_rules('txt-senha', 'Senha', 'required|min_length[3]'); #senha
		$this->form_validation->set_rules('txt-confir-senha', 'Confirmar senha', 'required|matches[txt-senha]'); #senha

		if($this->form_validation->run() == FALSE){
			$this->pag_cadastro();
		}else{
						
			$nome= $this->input->post('txt-nome');
			$email= $this->input->post('txt-email');
			$senha= $this->input->post('txt-senha');
			$projeto= filter_input(INPUT_POST,"projeto",FILTER_SANITIZE_STRING);
			$criptografia = base64_encode($senha);
			$nickname= $this->input->post('txt-nickname');

			 if ($this->modelusuarios->adicionar($nome, $email, $projeto, $criptografia, $nickname)) {
			 	$id_usuario = $this->db->insert_id();
			 	if ($projeto == "Estrutura de Dados I") {
			 		$this->modelusuarios->preencher_ed1($id_usuario, 0, 0, 0);
					$this->modelusuarios->preencher_historioCompras($id_usuario);			 		
			 	}
			 	redirect(site_url('login'));
			 }else{
			 	echo "Houve um erro no sistema";
			 }
		}
	}

	public function excluir($id){
		if ($this->usuarios_model->excluir($id)) {
			redirect(site_url('Home'));
		}else{
			echo "Houve um erro no sistema!";
		}
	}

	public function pag_cadastro(){
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/Cadastro');
		$this->load->view('frontend/template/Html-footer');
	}


	public function pag_login(){
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/Login');
		$this->load->view('frontend/template/Html-footer');
	}

	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-senha', 'Senha', 'required|min_length[3]');

		if($this->form_validation->run() == FALSE){
			$this->pag_login();
		}else{
			$email = $this->input->post('txt-email');
			$senha = $this->input->post('txt-senha');
			$criptografia = base64_encode($senha);

			$this->db->where('email', $email);
			$this->db->where('senha', $criptografia);			
			$userlogado = $this->db->get('usuarios')->result();

			if(count($userlogado)==1){
				$dadosSessao['userlogado'] = $userlogado[0];
				$dadosSessao['logado'] = TRUE;
				$this->session->set_userdata($dadosSessao);
				
				if($this->session->userdata('userlogado')->projeto == "Estrutura de Dados I"){
					redirect(site_url('Ed1'));
				} 
				elseif ($this->session->userdata('userlogado')->projeto == "NTI - Microinformática"){
					redirect(site_url('Nti'));
				}
				elseif($this->session->userdata('userlogado')->projeto == "Administrador"){
					redirect(site_url('Admin'));
				}
				else {
					redirect(site_url('login'));
				}
			}else{
				$dadosSessao['userlogado'] = NULL;
				$dadosSessao['logado'] = FALSE;
				$this->session->set_userdata($dadosSessao);
				redirect(site_url('login'));
			}
		}
	}

	public function logout(){
		$dadosSessao['userlogado'] = NULL;
		$dadosSessao['logado'] = FALSE;
		$this->session->set_userdata($dadosSessao);
		redirect(site_url('login'));
	}

	public function comprar_item1($id){
		if ($this->modelusuarios->adicionar_falta($id)){
			redirect(site_url('Ed1/progresso'));
		}else{
				echo "Houve um erro no sistema";
		}
	}

	public function comprar_item2($id){
		if ($this->modelusuarios->adicionar_lista($id)){
			redirect(site_url('Ed1/progresso'));
		}else{
				echo "Houve um erro no sistema";
		}
	}

	public function comprar_item3($id){
		if ($this->modelusuarios->adicionar_ponto($id)){
			redirect(site_url('Ed1/progresso'));
		}else{
				echo "Houve um erro no sistema";
		}
	}

	public function perfil(){
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/template/Header-perfil');
		$this->load->view('frontend/Perfil');
		$this->load->view('frontend/template/Footer');
		$this->load->view('frontend/template/Html-footer');
		
	}

	public function atualizar_dados(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-email', 'Email', 'valid_email'); #email
		$this->form_validation->set_rules('txt-senha', 'Senha', 'min_length[3]'); #senha
		$this->form_validation->set_rules('txt-confir-senha', 'Confirmar senha', 'matches[txt-senha]'); #senha

		if($this->form_validation->run() == FALSE){
			$this->perfil();
		}else{
		$nome= $this->input->post('txt-nome');
		$email= $this->input->post('txt-email');
		$senha= $this->input->post('txt-senha');
		$criptografia = base64_encode($senha);
		$nick= $this->input->post('txt-nick');
		$id = $this->session->userdata('userlogado')->id;
		
		if ($this->modelusuarios->atualizar($nome, $email, $criptografia, $nick, $id)){
			redirect(site_url('Usuarios/perfil'));
		}else{
			echo "Houve um erro no sistema";
		}
	}
	}

	public function nova_foto(){
		if(!$this->session->userdata('logado')){
			redirect(site_url('login'));
		}

		$id = $this->session->userdata('userlogado')->id;
		$path = site_url('assets/frontend/perfil');
		echo $path;
		$config['upload_path'] = $path;
        $config['allowed_types'] = 'jpg';
        $config['file_name'] = $id.".jpg";
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()){
            echo $this->upload->display_errors();
        }else{
            redirect(site_url('Usuarios/perfil'));
        }
	}

	public function ranking(){
		$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/template/Header-ranking');
		$this->load->view('frontend/Ranking');
		$this->load->view('frontend/template/Footer');
		$this->load->view('frontend/template/Html-footer');
	}
}