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
		//$dados['imagem']= $imagem;
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

	public function adicionar_falta($id){
		$this->db->set('faltas', 'faltas+1', FALSE);
		$this->db->where('id_usuario', $id);
		return $this->db->update('historico_compras');
	}

	public function adicionar_lista($id){
		$this->db->set('listas', 'listas+1', FALSE);
		$this->db->where('id_usuario', $id);
		return $this->db->update('historico_compras');
	}

	public function adicionar_ponto($id){
		$this->db->set('pontos', 'pontos+1', FALSE);
		$this->db->where('id_usuario', $id);
		return $this->db->update('historico_compras');
	}

	public function atualizarGasto($id, $faltas, $listas, $pontos){
		$dado['total_gasto'] = ($faltas * 30) + ($listas * 60) + ($pontos * 80);
		$this->db->where('id_usuario', $id);
		return $this->db->update('historico_compras', $dado);
	}
	
	public function preencher_historioCompras($id_usuario){
		$dado['id_usuario'] = $id_usuario;
		return $this->db->insert('historico_compras', $dado);
	}

}