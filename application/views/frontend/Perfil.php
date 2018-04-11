

<section class="paralla-section">
	<div class="container"> 
		<div class="row">
	        <div class="col-lg-12 text-center">
				<h1 class="section-heading"><br>Meu perfil</h1>
				<hr class="primary">
	        </div>
		</div>

		<?php
		    $id = $this->session->userdata('userlogado')->id;
		    $this->db->where('id', $id);
		    $query = $this->db->get('usuarios');
		    foreach ($query->result() as $row) {
		        $nome = $row->nome;
		        $email = $row->email;
		        $senha = base64_decode($row->senha);
		        $nick = $row->nickname;
		    }
		    echo validation_errors('<div class="alert alert-danger">', '</div>');
		    echo form_open('usuarios/atualizar_dados');
		?>


		<div class="row">
			<div class="col-sm-6">
      		
      			<div class="customblock">
      				<center><img src="<?php echo base_url('/images/avatar/'.$row->avatar.'.svg');?>" class="img-responsive" alt="avatar" width="50%"/> </center>
				</div>
			</div>

			<div class="col-sm-6">
      		<!--primeira coluna-->
      			<div class="customblock" style="margin-top: -3px">
					
				    <div class="form-group">
				      <label for="inputNome">Nome</label>
				      <input type="text" class="form-control" name="txt-nome" id="txt-nome" value= "<?php echo set_value('txt-nome', $nome);?>">
				    </div>
				    <div class="form-group">
				      <label for="inputNick">Nickname</label>
				      <input type="text" class="form-control" name="txt-nick" id="txt-nick" value= "<?php echo set_value('txt-nick', $nick);?>">
				    </div>
				    <div class="form-group">
				      <label for="inputEmail2">E-mail</label>
				      <input type="Email" class="form-control" name="txt-email" id="txt-email" value="<?php echo set_value('txt-email', $email);?>">
				    </div>
				    <div class="form-group">
				      <label for="inputSenha2">Senha</label>
				      <input type="password" class="form-control" name="txt-senha" id="txt-senha" value="<?php echo set_value('txt-senha', $senha); ?>">
				    </div>
				    <div class="form-group">
				    	<label for="inputSenha2">Confirmação de senha</label>
						<input type="password" id="txt-confir-senha" name="txt-confir-senha" class="form-control" value="<?php echo set_value('txt-senha', $senha); ?>">
					</div>
				    <button type="submit" class="btn btn-lg btn-success btn-block">Salvar</button>
				    <?php echo form_close();?>
				</div>
			</div>
			
		</div>
	</div>
</section>