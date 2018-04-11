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
				foreach ($query->result() as $row) {
				$moedas = ($row->ciclo1 + $row->ciclo2 + $row->ciclo3); 

				$dado['saldo'] = $moedas;
				$this->db->where('id_usuario', $id);
				$this->db->update('ed1', $dado);
				?>
						
		</div>
		<div class="row">
			<div class="col-lg-4" align ="center"></div>
			<div class="col-lg-3" align ="center"><img src="<?php echo base_url('/images/progresso.png');?>" width=300px></div>
			<div class="col-lg-3">
				<br><br><br><br><br><br>
				<div class="row">
					<?php $p1 = $row->ciclo1 * 10/14;
					$p1 = number_format($p1, 0, ',', ' ');
					?> 
					<div class="c100 p<?php echo $p1; ?> orange ">
					  <span> <?php echo $row->ciclo1; ?></span>
					  <div class="slice">
					    <div class="bar"></div>
					    <div class="fill"></div>
					  </div>
					</div>
				</div>

				<div class="row">
					<?php $p2 = $row->ciclo2 * 10/15 ;
					$p2 = number_format($p2, 0, ',', ' ');
					?> 
					<br><br><br><br><br>
					<div class="c100 p<?php echo $p2; ?> pink">
					  <span> <?php echo $row->ciclo2; ?></span>
					  <div class="slice">
					    <div class="bar"></div>
					    <div class="fill"></div>
					  </div>
					</div>
				</div>

				<div class="row">
					<?php $p3 = $row->ciclo3 * 10/15;
					$p3 = number_format($p3, 0, ',', ' ');
					?> 
					<br><br><br><br><br><br>
					<div class="c100 p<?php echo $p3; ?> blue">
					  <span> <?php echo $row->ciclo3; ?></span>
					  <div class="slice">
					    <div class="bar"></div>
					    <div class="fill"></div>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<hr class= "linha" width=50%>
		<div class="row" align="center">
			<p class="score">Total de moedas acumuladas: <?php echo $moedas; ?></p>
		</div>
	</section> <?php } ?>

	<?php 
	    $id = $this->session->userdata('userlogado')->id;
		$this->db->where('id_usuario', $id);
		$query = $this->db->get('historico_compras');
		foreach ($query->result() as $row) {
			$gastos = $row->total_gasto;
			$faltas = $row->faltas;
			$listas = $row->listas;
			$pontos = $row->pontos;
		} $saldo = $moedas - $gastos; ?>

	<section id="loja" class="paralla-section">
		<div class="container text-center">
			<div class="row">
				<div clas="col-lg-12">
					<h1 class="section-heading"><br>Loja de primeiros socorros</h1>
				<p>O plano gamificado conta com uma lojinha de primeiros socorros. <br> Os itens mostrados aqui podem ser trocados pelas moedas acumuladas por você. <br> As moedas são acumulativas e intrasferíveis. Você tem direito a comprar apenas três quantidades de cada item. <b><br> A ação de compra não pode ser desfeita. Então fique atento as escolhas que fizer!</b></p>
				<h2>Seu saldo de moedas: <?php echo $saldo; ?></h2>
				<hr class="primary">
	        	</div>
	        	<img src="<?php echo base_url('/images/closed.svg');?>" width=300px>
	        </div>
		</div>    
	    <br>

	    <!-- <div class="container">
		    <div class="row col-md-4 text-center">
		    	<img src="<?php echo base_url('/images/falta.png');?>" width=300px><br><br> 
		    	<?php 
		    	if ($saldo >= '30' && $faltas < '3'){
		    		?><button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#item1">Comprar</button>
					<br><br>
					<div class="row col-md-5"></div>
					<div class="row col-md-5">
						<div class="alert alert-success">
						  <?php  echo 3-$faltas;?> disponíveis
						</div>
					</div>
					<?php

		    	}
		    	else{
		    		?><button type="button" class="btn btn-lg btn-success" disabled="disabled">Indisponível</button><?php
		    	}?>
		    </div>
		    <div class="row col-md-4 text-center">
		    	<img src="<?php echo base_url('/images/lista.png');?>" width=300px><br><br> 
		    	<?php 
		    	if ($saldo >= '60' && $listas < '3'){
		    		?><button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#item2">Comprar</button>
		    		<br><br>
					<div class="row col-md-5"></div>
					<div class="row col-md-5">
						<div class="alert alert-success">
						  <?php  echo 3-$listas;?> disponíveis
						</div>
					</div>
		    		<?php
		    	}
		    	else{
		    		?><button type="button" class="btn btn-lg btn-success" disabled="disabled">Indisponível</button><?php
		    	}?>
		    </div>
		    <div class="row col-md-4 text-center">
		    	<img src="<?php echo base_url('/images/ponto.png');?>" width=300px> <br><br>
		    	<?php 
		    	if ($saldo >= '125' && $pontos < '3'){
		    		?><button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#item3">Comprar</button>
		    		<br><br>
					<div class="row col-md-5"></div>
					<div class="row col-md-5">
						<div class="alert alert-success">
						  <?php  echo 3-$pontos;?> disponíveis
						</div>
					</div>
		    		<?php
		    	}
		    	else{
		    		?><button type="button" class="btn btn-lg btn-success" disabled="disabled">Indisponível</button><?php
		    	}?>
		    </div>
		</div> -->
	</section>

	<section id="itens" class="paralla-section">
		<div class="container">
			<div class="row">
				<h1 class="section-heading" align="center"><br>Itens comprados</h1>
				<div class="col-md-8 text-center">
				<p></p>
	        	</div>
	        </div>
	    </div><br>
	    <div class="col-md-3"></div>   
				<div class="col-md-5">    
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                    	<thead>
                    		<th>Item</th>
                    		<th>Quantidade</th>
                    		<th>Moedas gastas</th>
                    	</thead>
	               
	                <tbody>
	                    <?php
		        		$this->db->where('id_usuario', $id);
						$query = $this->db->get('historico_compras');
						foreach ($query->result() as $row) {
						?>

						<tr>
						    <th>Abono de faltas</th>
						    <td><?php echo $row->faltas; ?></td>
						    <td><?php echo $row->faltas*30; ?></td>
					  	</tr>
					  	<tr>
					  		<th>Eliminação da nota da prática</th>
					  		<td><?php echo $row->listas;?></td>
					  		<td><?php echo $row->listas*60;?></td>

					  	</tr>

					  	<tr>
					  		<th>Ponto na nota da prova</th>
					  		<td><?php echo $row->pontos;?></td>
					  		<td><?php echo $row->pontos*125;?></td>

					  	</tr>

					  	<tr>
					  		<th class="text-center">Total de gastos</th>
					  		<td></td>
					  		<th><?php echo $row->total_gasto;?></th>
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
			        	<a type="button" class="btn btn-default" href="<?php echo site_url('Usuarios/comprar_item1/'.$this->session->userdata('userlogado')->id)?>">Sim</a>
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
			        	<a type="button" class="btn btn-default" href="<?php echo site_url('Usuarios/comprar_item2/'.$this->session->userdata('userlogado')->id)?>">Sim</a>
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
			        	<a type="button" class="btn btn-default" href="<?php echo site_url('Usuarios/comprar_item3/'.$this->session->userdata('userlogado')->id)?>">Sim</a>
			          <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
			        </div>
			      </div>
			    </div>
			  </div>