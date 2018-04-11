<section id="progresso" class="paralla-section">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12 text-center">
	    	    <h1 class="section-heading"><br>Progresso dos jogadores</h1>
	            <hr class="primary"><br><br><br>
	        </div>
	        <div class="col-md-6 col-sm-12">
	        	
	        </div>
	        <div class="col-md-6">
				<div class="about-des">
					<p align="justify">
						<b>Boas vindas ao sistema, <?php  echo $this->session->userdata('userlogado')->nome;?>. </b> Nesta sessão você encontra o seu progresso ao longo dos ciclos da <i>Gamificação</i>. Esperamos que goste do plano gamificado planejado para o seu ambiente colaborativo. Divirta-se e fique de olho no seu progresso =)
						<?php 
	        			$id = $this->session->userdata('userlogado')->id;
	        			$this->db->where('id_usuario', $id);
						$query = $this->db->get('nti_usuarios');
						foreach ($query->result() as $row) {?> <br><strong>
							<?php echo "Pontuação do mês de ". $row->mes . ": ". $row->pontuacao;?>
							<br></strong>
							<?php
							if ($row->pontuacao >= '250'){
								echo "Bonificação R$100 + 10h de liberação";
							}

							elseif ($row->pontuacao >= '200') {
								echo "Bonificação: R$90 + 9h de liberação";
							}

							elseif ($row->pontuacao >= '150') {
								echo "Bonificação: R$80 + 8h de liberação";
							}

							elseif ($row->pontuacao >= '130') {
								echo "Bonificação: R$70 + 7h de liberação";
							}

							elseif ($row->pontuacao >= '120') {
								echo "Bonificação: R$60 + 6h de liberação";
							}

							elseif ($row->pontuacao >= '100') {
								echo "Bonificação: R$40 + 5h de liberação";
							}

							elseif ($row->pontuacao >= '85' and $row->quant_chamados >= '10') {
								echo "Bonificação: R$30 + 4h de liberação";
							}

							elseif ($row->pontuacao >= '75' and $row->quant_chamados >= '7') {
								echo "Bonificação: R$30 + 3h de liberação";
							}

							elseif ($row->pontuacao >= '65' and $row->quant_chamados >= '5') {
								echo "Bonificação: R$20 + 2h de liberação";
							}

							elseif ($row->pontuacao >= '50' and $row->quant_chamados >= '3')
								echo "Bonificação: R$20 + 1h de liberação";						
						}?>
					</p>
				</div>
			</div>
	    </div>
	</div>
</section>