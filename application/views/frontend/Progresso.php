<section id="progresso" class="paralla-section">
		<div class="container"> 
		<div class="row">
	        <div class="col-lg-12 text-center">
				<h1 class="section-heading"><br>Progresso dos jogadores</h1>
				<p><b>Boas vindas ao sistema, <?php  echo $this->session->userdata('userlogado')->nome;?>. </b> Nesta sessão você encontra o seu progresso ao longo dos ciclos da <i>Gamificação</i>. Esperamos que goste do plano gamificado planejado para o seu ambiente colaborativo. Divirta-se e fique de olho no seu progresso =)</p>
				<hr class="primary">
	        </div>
		</div>
		
				<?php 
				$id = $this->session->userdata('userlogado')->id;
	        			$this->db->where('id_usuario', $id);
						$query = $this->db->get('ed1');
						foreach ($query->result() as $row) {?>
		</div>
		<div class="row">
	

						<div class="col-lg-12" align ="center"><br><br>
						<h1><?php echo "Ciclo 1: ". $row->ciclo1 . " moedas";?></h1><br><?php
						if ($row->ciclo1 >= '119') {
							?><img src="<?php echo base_url('/images/nivel3.png');?>" class="img-responsive" alt="Nível 3"><?php
						} elseif ($row->ciclo1 >='105') {
							?><img src="<?php echo base_url('/images/nivel2.png');?>" class="img-responsive" alt="Nível 2"><?php
						}
						elseif ($row->ciclo1 >= '84') {
							?><img src="<?php echo base_url('/images/nivel1.png');?>" class="img-responsive" alt="Nível 1"><?php
						} else{
							?><img src="<?php echo base_url('/images/nivel0.png');?>" class="img-responsive" alt="Nível 0"><?php
						}
						?>

						<br><br><br><h1><?php echo "Ciclo 2: ". $row->ciclo2 . " moedas";?></h1><br><?php
						if ($row->ciclo2 >= '119') {
							?><img src="<?php echo base_url('/images/nivel3.png');?>" class="img-responsive" alt="Nível 3"><?php
						} elseif ($row->ciclo2 >='105') {
							?><img src="<?php echo base_url('/images/nivel2.png');?>" class="img-responsive" alt="Nível 2"><?php
						}
						elseif ($row->ciclo2 >= '84') {
							?><img src="<?php echo base_url('/images/nivel1.png');?>" class="img-responsive" alt="Nível 1"><?php
						} else{
							?><img src="<?php echo base_url('/images/nivel0.png');?>" class="img-responsive" alt="Nível 0"><?php
						}
						?>

						<br><br><br><h1><?php echo "Ciclo 3: ". $row->ciclo3 . " moedas";?></h1><br><?php
						if ($row->ciclo3 >= '119') {
							?><img src="<?php echo base_url('/images/nivel3.png');?>" lass="img-responsive" alt="Nível 3"><?php
						} elseif ($row->ciclo3 >='105') {
							?><img src="<?php echo base_url('/images/nivel2.png');?>" class="img-responsive" alt="Nivel 2"><?php
						}
						elseif ($row->ciclo3 >= '84') {
							?><img src="<?php echo base_url('/images/nivel1.png');?>" class="img-responsive" alt="Nivel 1"><?php
						} else{
							?><img src="<?php echo base_url('/images/nivel0.png');?>" class="img-responsive" alt="Nível 0"><?php
						}
						$moedas = ($row->ciclo1 + $row->ciclo2 + $row->ciclo3);
						}
						?>
						</div>
						<br><br><br>
				</div>
	    </div>
	</section>

	<section id="loja" class="paralla-section">
		<div class="container">
			<div class="row">
				<h1 class="section-heading" align="center">Loja</h1>
				<div class="col-md-8 text-center">
				<p>O plano gamificado conta com uma lojinha de recompensas. <br> Os itens mostrados aqui podem ser trocados pelas moedas acumuladas por você. <br> As moedas são acumulativas ao longo dos ciclos e intrasferíveis. Você tem direito a comprar apenas três quantidades de cada item. <b> A ação de compra não pode ser desfeita. Então fique atento as escolhas que fizer!</b></p>
	        	</div>

	        	<?php 
	        	$id = $this->session->userdata('userlogado')->id;
			    $this->db->where('id_usuario', $id);
				$query = $this->db->get('historico_compras');
				foreach ($query->result() as $row) {
					$gastos = $row->total_gasto;
					$faltas = $row->faltas;
					$listas = $row->listas;
					$pontos = $row->pontos;
				}?>
	        	<div class="col-md-4"><h1>Seu saldo é <?php $saldo = $moedas - $gastos; echo $saldo;?></h1>
	        	</div>
				<hr class="primary"><br><br>
	        </div>
	    </div><br>

	    <div class="container">
		    <div class="row col-md-4 text-center">
		    	<?php 
		    	if ($saldo >= '30' && $faltas < '3'){
		    		?><img src="<?php echo base_url('/images/falta1.png');?>" width=200px> <br><br><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item1">Comprar</button><?php
		    	}
		    	else{
		    		?><img src="<?php echo base_url('/images/falta2.png');?>" width=200px> <br><br><?php
		    	}?>
		    </div>
		    <div class="row col-md-4 text-center">
		    	<?php 
		    	if ($saldo >= '60' && $listas < '3'){
		    		?><img src="<?php echo base_url('/images/lista1.png');?>" width=200px> <br><br><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item2">Comprar</button><?php
		    	}
		    	else{
		    		?><img src="<?php echo base_url('/images/lista2.png');?>" width=200px> <br><br><?php
		    	}?>
		    </div>
		    <div class="row col-md-4 text-center">
		    	<?php 
		    	if ($saldo >= '80' && $pontos < '3'){
		    		?><img src="<?php echo base_url('/images/ponto1.png');?>" width=200px> <br><br><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#item3">Comprar</button><?php
		    	}
		    	else{
		    		?><img src="<?php echo base_url('/images/ponto2.png');?>" width=200px> <br><br><?php
		    	}?>
		    </div>
		</div>
	</section>

	<section id="itens" class="paralla-section">
		<div class="container">
			<div class="row">
				<h1 class="section-heading" align="center">Meus itens</h1>
				<div class="col-md-8 text-center">
				<p></p>
	        	</div>
	        </div>
	    </div><br>
	    <div class="container">		
		    <div class="table-responsive">
	            <table class="table table-striped table-bordered">
	                <thead>
		                <tr>
		                <td><b>Abono de faltas</b></td>
		                <td><b>Eliminação da nota da Prática</b></td>
		                <td><b>Ponto na nota da prova</b></td>
		                </tr>
	                </thead>
	                <tbody>
	                    <?php
		        		$this->db->where('id_usuario', $id);
						$query = $this->db->get('historico_compras');
						foreach ($query->result() as $row) {
						?>
	                    <tr class="text-center">
	                    <td><?php echo $row->faltas;?></td>
	                    <td><?php echo $row->listas;?></td>
	                    <td><?php echo $row->pontos;?></td>
	                    </tr>
	                    <?php } ?>
	                </tbody>
	            </table>    
	        </div>    
		</div>
	</section>

	<!-- Modal item 1-->
		<div class="modal fade" id="item1" role="dialog">
			<div class="modal-dialog">
			    <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Confirmação de compra</h4>
			        </div>
			        <div class="modal-body">
			          <p>Deseja mesmo realizar a compra desse item?</p>
			        </div>
			        <div class="modal-footer">
			        	<a type="button" class="btn btn-default" href="<?php echo base_url('usuarios/comprar_item1/'.$this->session->userdata('userlogado')->id)?>">Sim</a>
			 	         <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
			        </div>
			      </div>
			    </div>
			  </div>

	<!-- Modal item 2-->
		<div class="modal fade" id="item2" role="dialog">
			<div class="modal-dialog">
			    <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Confirmação de compra</h4>
			        </div>
			        <div class="modal-body">
			          <p>Deseja mesmo realizar a compra desse item?</p>
			        </div>
			        <div class="modal-footer">
			        	<a type="button" class="btn btn-default" href="<?php echo base_url('usuarios/comprar_item2/'.$this->session->userdata('userlogado')->id)?>">Sim</a>
			          <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
			        </div>
			      </div>
			    </div>
			  </div>

	<!-- Modal item 3-->
		<div class="modal fade" id="item3" role="dialog">
			<div class="modal-dialog">
			    <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Confirmação de compra</h4>
			        </div>
			        <div class="modal-body">
			          <p>Deseja mesmo realizar a compra desse item?</p>
			        </div>
			        <div class="modal-footer">
			        	<a type="button" class="btn btn-default" href="<?php echo base_url('usuarios/comprar_item3/'.$this->session->userdata('userlogado')->id)?>">Sim</a>
			          <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
			        </div>
			      </div>
			    </div>
			  </div>