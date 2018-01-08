<div class="container">
	<section id="ciclo1" class="paralla-section">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="section-heading"><br>Estrutura de Dados I</h1>
				<hr class="primary"><br><br><br>
	        </div>
			
			<div class="col-md-6">
				<table class="table table-striped">
					<thead class="table-primary">
					    <tr>
					      <th scope="col">Nome do jogador</th>
					      <th scope="col">Ciclo 1</th>
					      <th scope="col">Ciclo 2</th>
					      <th scope="col">Ciclo 3</th>
						</tr>
					</thead>
					<tbody>
					  <?php
					  	$this->db->where('projeto', 'ed1');
	        			$this->db->order_by("nome", "asc");
						$query = $this->db->get('usuarios');
						foreach ($query->result() as $row) {
					  ?>
					<tr>
					    <th scope="row"><?php echo $row->nome;?></th>
						<?php 
					      $this->db->where('id_usuario', $row->id);
					      $resultado = $this->db->get('ed1');
					      foreach ($resultado->result() as $ciclos) {?>
					    <th scope="row"><?php echo $ciclos->ciclo1;?></th>
					    <th scope="row"><?php echo $ciclos->ciclo2;?></th>
					    <th scope="row"><?php echo $ciclos->ciclo3;?></th>
					    <?php } ?>
					    <th>
					        <button type="button" class="btn btn-default btn-sm">
					        <span class="glyphicon glyphicon-pencil"></span> Editar 
					        </button>
					      
					  	</th>
					</tr>
					    <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<section id="ciclo2" class="paralla-section">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="section-heading"><br>NTI</h1>
				<hr class="primary"><br><br><br>
	        </div>
			<div class="col-md-6">
				<table class="table table-striped">
					<thead class="table-primary">
					    <tr>
					      <th scope="col">Nome</th>
					      <th scope="col">Pontuação</th>
						</tr>
					</thead>
					<tbody>
					  <?php
					  	$this->db->where('projeto', 'nti');
						$query = $this->db->get('usuarios');
						foreach ($query->result() as $row) {
					  ?>
					<tr>
					    <th scope="row"><?php echo $row->nome;?></th>
					</tr>
					    <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>