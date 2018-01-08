<div class="container">
<section id="plano" class="paralla-section">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="section-heading"><br>Plano Gamificado</h1>
				<hr class="primary"><br><br>
	        </div>
			<div class="col-md-6 col-sm-12">
				<img src="images/problema.jpg" class="img-responsive" alt="about img 1">
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="about-des">
					<h2>METAS DA GAMIFICAÇÃO</h2>
					<p align="justify">Ter duas reuniões mensais com o mínimo de 70% de presença dos integrantes do grupo<br>
					Não ter chamados não atribuídos ao final do ciclo<br>
					Ter maior distribuição do número de chamados entre os membros ao longo do ciclo
					<br>
					<h2>PROBLEMAS ENCONTRADOS</h2>
					<p> Comunicação Inificaz, falta de reuniões, falta de proatividade, baixa produtividade e distração</p> 
					</p>
				</div>
			</div>
		</div>
	</section>
	
	<section id="elementos" class="paralla-section">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="section-heading"><br>Elementos</h1>
				<hr class="primary"><br><br>
	        </div>
      	<div class="container">
	        <div class="row">
	          <div class="col-lg-3 text-center">
	            <div class="service-box">
	              <img src="images/competicao.jpg" width="200px">
	          </div>
	          </div>
	          <div class="col-lg-3 text-center">
	            <div class="service-box">
	              <img src="images/conquista.jpg" width="200px">
	          	</div>
	          </div>
	          <div class="col-lg-3 text-center">
	            <div class="service-box">
	              <img src="images/cooperação.png" width="200px">
	             </div>
	          </div>
	          <div class="col-lg-3 text-center">
	            <div class="service-box">
	              <img src="images/desafios.png" width="200px">
	             </div>
	          </div>
	        </div>
      </div><br>
      <div class="container">
		<div class="row">
		  <div class="col-lg-3 text-center">
			<div class="service-box">
			  <img src="images/feedback.png" width="200px">
		  </div>
		  </div>
		  <div class="col-lg-3 text-center">
			<div class="service-box">
			  <img src="images/chefe.png" width="200px">
			</div>
		  </div>
		  <div class="col-lg-3 text-center">
			<div class="service-box">
			  <img src="images/progress.png" width="200px">
			 </div>
		  </div>
		  <div class="col-lg-3 text-center">
			<div class="service-box">
			  <img src="images/point.png" width="200px">
			 </div>
		  </div>
		</div>
      </div><br>
      <div class="container">
		<div class="row">
		  <div class="col-lg-4 text-center">
			<div class="service-box">
			  <img src="images/progressão.png" width="200px">
		  </div>
		  </div>
		  <div class="col-lg-4 text-center">
			<div class="service-box">
			  <img src="images/relacionamento.png" width="200px">
			</div>
		  </div>
		  <div class="col-lg-4 text-center">
			<div class="service-box">
			  <img src="images/restrição.png" width="200px">
			 </div>
		  </div>
		</div>
      </div>
      
		</div>
	</section>

	<section id="missoes" class="paralla-section">
		<div class="container">
	        <div class="row">
	          <div class="col-lg-12 text-center">
	            <h1 class="section-heading"><br>Missões</h1>
	            <p>As missões são tarefas que requerem esforço para serem solucionadas e ajudarão no alcance das metas do Plano gamificado. <br> Elas podem ser alteradas a cada ciclo e variam de acordo com a necessidade do ambiente. <br> Ao concluir uma missão, o jogador ganha a pontuação correspondente que será somada nos seus pontos atuais. <br> A seguir são apresentados os primeiros bônus individuais e em grupos para o Time da Microinformática.</p>
	            <hr class="primary"><br><br>
	          </div>
	        </div>
      	</div>

      	<div class="container">
	        <div class="row">
	          <div class="col-lg-3 text-center">
	            <div class="service-box">
	              <img src="images/cartaoA.png" width="200px">
	          </div>
	          </div>
	          <div class="col-lg-3 text-center">
	            <div class="service-box">
	              <img src="images/cartaoB.png" width="200px">
	          	</div>
	          </div>
	          <div class="col-lg-3 text-center">
	            <div class="service-box">
	              <img src="images/cartaoC.png" width="200px">
	             </div>
	          </div>
	          <div class="col-lg-3 text-center">
	            <div class="service-box">
	              <img src="images/cartaoD.png" width="200px">
	          </div>
	          </div>
	        </div>
      </div>
      <br><br><br>
	</section>
	
	<section id="pontos" class="paralla-section">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="sectio-heading">Pontos</h1>
				<p>Os jogadores da microinformática do NTI podem obter pontos com a execução dos seguintes tipos de chamados. <br> Os pontos intrasferíveis e são zerados ao final de cada ciclo.</p>
				<hr class="primary"><br><br>
			</div>
			<!--div class="col-md-6 col-sm-12">
				<img src="images/pontuação.jpg" class="img-responsive" alt="about img 1">
			</div-->
			<div class="col-md-3"></div>   
			<div class="col-md-6">    
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <td><b>Tipo de chamado</b></td>
                          <td><b>Pontuação</b></td>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php
	        			$this->db->order_by("tarefa", "asc");
						$query = $this->db->get('chamados');
						foreach ($query->result() as $row) {
						?>
                        <tr>
                          <td><?php echo $row->tarefa;?></td>
                          <td><?php echo $row->pontuacao;?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>    
                  </div>
			</div>
		</div>
	</section>

	<section id="conquistas" class="paralla-section">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="section-heading">Níveis</h1>
				<p>Ao final de cada ciclo, os jogadores podem se enquadrar em um dos dez níveis existentes de acordo com sua pontuação e o número de chamados. Quanto maior o nível do jogador, melhor será sua bonificação.<br> As condições e bonificações de cada nível estão descritas a seguir:</p>
				<hr class="primary"> <br><br>
	        </div>
	        <div class="container">
         			<div class="col-lg-4 col-md-6 text-center">
            			<div class="service-box">
             				 <img src="images/one.svg " width="100px">
              				<p class="text-muted">Condição: ultrapassar 50 pontos e ter, no mínimo, 3 chamados <br>Bonificação: R$20 + 1h de liberação
              				</p>
            			</div>
          			</div>
		        	<div class="col-lg-4 col-md-6 text-center">
		            	<div class="service-box">
			              <img src="images/two.svg" width="100px">
			              <p class="text-muted"> Condição: ultrapassar 65 pontos e ter, no mínimo, 5 chamados<br>Bonificação: R$20 + 2h de liberação</p>
		            	</div>
		         	</div>
		        	<div class="col-lg-4 col-md-6 text-center">
		            	<div class="service-box">
		              		<img src="images/three.svg" width="100px">
				            <p class="text-muted"> Condição: ultrapassar 75 pontos e ter, no mínimo, 7 chamados<br>Bonificação: R$30 + 3h de liberação</p>
		            	</div>
		          	</div>
      		</div>
      		<br><br><br>
	        <div class="container">
         			<div class="col-lg-4 col-md-6 text-center">
            			<div class="service-box">
             				 <img src="images/four.svg" width="100px">
              				<p class="text-muted">Condição: ultrapassar 85 pontos e ter, no mínimo, 10 chamados<br>Bonificação: R$30 + 4h de liberação</p>
            			</div>
          			</div>
		        	<div class="col-lg-4 col-md-6 text-center">
		            	<div class="service-box">
			              <img src="images/five.svg" width="100px">
			              <p class="text-muted">Condição: ultrapassar 100 pontos e ter, no mínimo, 12 chamados<br>Bonificação: R$40 + 5h de liberação</p>
		            	</div>
		         	</div>
		        	<div class="col-lg-4 col-md-6 text-center">
		            	<div class="service-box">
		              		<img src="images/six.svg" width="100px">
				            <p class="text-muted">Condição: ultrapassar 120 pontos e ter completado 80% das horas no ciclo anterior<br>Bonificação: R$60 + 6h de liberação</p>
		            	</div>
		          	</div>
      		</div>
      		<br><br><br>
      		<div class="container">
         			<div class="col-lg-4 col-md-6 text-center">
            			<div class="service-box">
             				 <img src="images/seven.svg" width="100px">
              				<p class="text-muted">Condição: ultrapassar 130 pontos e 100% de presença nas reuniões<br>Bonificação: R$70 + 7h de liberação</p>
            			</div>
          			</div>
		        	<div class="col-lg-4 col-md-6 text-center">
		            	<div class="service-box">
			              <img src="images/eight.svg" width="100px">
			              <p class="text-muted">Condição: ultrapassar 150 pontos e ter feito 100 pontos no ciclo anterior<br>Bonificação: R$80 + 8h de liberação</p>
		            	</div>
		         	</div>
		        	<div class="col-lg-4 col-md-6 text-center">
		            	<div class="service-box">
		              		<img src="images/nine.svg" width="100px">
				            <p class="text-muted">Condição: ultrapassar 200 pontos e ter 95% horas ciclo anterior<br>Bonificação: R$90 + 9h de liberação</p>
		            	</div>
		          	</div>
      		</div>
      		<br><br><br>
      		<div class="container">
         			<div class="col-lg-4 col-md-6 text-center">
            			<div class="service-box">
             				 <img src="images/ten.svg" width="100px">
              				<p class="text-muted">Condição: ultrapassar 250 pontos<br>Bonificação: R$100  + 10h de liberação</p>
            			</div>
          			</div>
      		</div>
		</div>
	</section>

<section id="progresso" class="paralla-section">
		<div class="row">
	        <div class="col-lg-12 text-center">
	    	    <h1 class="section-heading"><br>Progresso dos jogadores</h1>
	            <hr class="primary"><br><br><br>
	        </div>
	        <div class="col-md-6 col-sm-12">
	        	<img src="<?php echo base_url('/images/progresso.png');?>" class="img-responsive" alt="about img 1">
	        </div>
	        <div class="col-md-6">
				<div class="about-des">
					<p align="justify">
						<b>Boas vindas ao sistema, <?php  echo $this->session->userdata('userlogado')->nome;?>. </b> Nesta sessão você encontra o seu progresso ao longo dos ciclos da <i>Gamificação</i>. Esperamos que goste do plano gamificado planejado para o seu ambiente colaborativo. Divirta-se e fique de olho no seu progresso =)
						<?php 
	        			$id = $this->session->userdata('userlogado')->id;
	        			$this->db->where('id_usuario', $id);
				
						$query = $this->db->get('nti_usuarios');
						foreach ($query->result() as $row) {?> 
							<?php echo $row->pontuacao; ?>
							<h4> Saldo disponível para trocas: </h4>
							<?php echo $row->saldo; 
							if ($row->pontuacao >= '0') {?>
								<b> <br><br> Você pode trocar seus pontos por 10 horas de folga!!!! </b>
							<?php
							}							
						}?>
					</p>
				</div>
			</div>
	    </div>
	</section>