<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model{

	public $id;
	public $nome;

	public function __construct(){
		parent::__construct();

	}

	public function listar_usuarios(){
		$this->db->order_by('nome', 'ASCS');
		return $this->db->get('usuarios')->result();

	}

	public function adicionar($nome, $email, $projeto, $senha){
		$dados['nome']= $nome;
		$dados['email']= $email;
		$dados['projeto']= $projeto;
		$dados['senha']= $senha;
		return $this->db->insert('usuarios', $dados);
	}

	public function excluir($id){
		$this->db->where('id', $id);
		return $this->db->delete('usuarios');
	}

	public function recuperar_id($usuario, $criptografia){
		$this->db->where('nome', $usuario);
		$this->db->where('senha', $criptografia);
		$query = $this->db->get('usuarios');
			foreach ($query->result() as $row){
				return $row->id;
			}
	}

	public function preencher_ed1($id_usuario, $ciclo1, $ciclo2, $ciclo3){
		$dados['ciclo1'] = $ciclo1;
		$dados['ciclo2'] = $ciclo2;
		$dados['ciclo3'] = $ciclo3;
		$dados['id_usuario'] = $id_usuario;
		return $this->db->insert('ed1', $dados);

	}
	public function preencher_nti($id_usuario, $pontuacao, $saldo){
		$dados['id_usuario'] = $id_usuario;
		$dados['pontuacao'] = $pontuacao;
		$dados['saldo'] = $saldo;
		return $this->db->insert('nti_usuarios', $dados);
	}
}