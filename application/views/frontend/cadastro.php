<div class="col-md-4"></div>
<div class="container col-md-4">
    <header class="text-center"><br><br>
        <img src="<?php echo base_url('/images/joker-face.png');?>">
        <h2>Joker Gamification</h2>
        <h4>Cadastro no sistema</h4>
    </header>
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-12">
				<?php
					echo validation_errors('<div class="alert alert-danger">', '</div>');
					echo form_open('usuarios/inserir');
				?>

				<div class="form-group">
					<input type="text" id="txt-nome" name="txt-nome" class="form-control" placeholder="Nome do Usuário" value="<?php echo set_value('txt-nome') ?>">
				</div>
				<div class="form-group">
					<input type="text" id="txt-email" name="txt-email" class="form-control" placeholder="Email" value="<?php echo set_value('txt-email') ?>">
				</div>

				<div class="form-group">
				  <label for="projeto">Projeto</label>
				  <select class="form-control" id="projeto" name="projeto">
				    <option>Estrutura de Dados I</option>
				    <option>NTI - Microinformática</option>
				  </select>
				</div>

				<div class="form-group">
					<input type="password" id="txt-senha" name="txt-senha" class="form-control" placeholder="Senha">
				</div>
				<div class="form-group">
					<input type="password" id="txt-confir-senha" name="txt-confir-senha" class="form-control" placeholder="Confirmação de senha">
				</div>
				<button type="submit" class="btn btn-default">Cadastrar</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	</body>
</html>