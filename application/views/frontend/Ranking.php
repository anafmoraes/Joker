<section class="parallax-section">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-12 text-center">
				<h1 class="section-heading"><br>Ranking dos jogadores</h1>
				<hr class="primary">
	        </div>
		</div>
	</div>		
</section>

<section class="paralla-section">
	<div class="container"> 
		<div class="row">
	        <div class="col-lg-12 text-center">
				<?php 
				#$id = $this->session->userdata('userlogado')->id;
	        	#$this->db->where('id_usuario', $id);
				$query = $this->db->get('ed1');
				foreach ($query->result() as $row) {
					$data = array(
				        'saldo' => $row->ciclo1 + $row->ciclo2 + $row->ciclo3
					);
					$this->db->where('id', $row->id);
					$this->db->update('ed1', $data);
				}
				?>
				<div class="col-md-3"></div>   
				<div class="col-md-6">    
                  <div class="table-responsive">
                  	<?php $posicao = 1; ?>
                    <table class="table table-striped table-bordered">
                      <br><br><thead>
                        <tr>
                          <th>Posição</th>
                          <th>Jogador</th>
                          <th>Pontuação</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php
	        			$this->db->order_by('saldo', 'DESC');
						$this->db->select('*');
						$this->db->from('ed1');
						$this->db->join('usuarios', 'usuarios.id = ed1.id_usuario');
						$query = $this->db->get();
						foreach ($query->result() as $row) {
						?>
                        <tr>
                        	<td><?php echo $posicao; $posicao = $posicao + 1?></td>
                        	<td><b> 
                        	<?php 
                        	if($row->nickname == NULL)
                        		echo $row->nome;
                        	else 
                        		echo $row->nickname;
                        	?>
                        	<br><br>
                        	<center><img src="<?php echo base_url('/images/avatar/'.$row->avatar.'.svg');?>" class="img-responsive" alt="avatar"/> </center>
                        	</b></td>
                        	<td><?php echo $row->saldo;?>
							</td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>    
                  </div>
			</div>	
	        </div>
		</div>
	</div>
</section>