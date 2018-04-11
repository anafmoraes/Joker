<div class="container"><br><br>
	<h1>Sistema Gamificado - Joker</h1>
	<div class="row">
		<div class="col-md-8">    
            <h2>Loja</h2>

                <div class="table-responsive"><table class="table table-striped table-bordered">
                    <thead>
                    <tr>
	                    <th>Jogador</th>
	                    <th>Email</th>
	                    <th>Itens comprados</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
	        			$this->db->order_by('nome', 'ASC');
						$this->db->select('*');
						$this->db->from('historico_compras');
						$this->db->where('projeto', "Estrutura de Dados I");
						$this->db->join('usuarios', 'usuarios.id = historico_compras.id_usuario');
						$query = $this->db->get();
						foreach ($query->result() as $row) {
						?>
                        <tr>
                        	<th>
                        	<?php echo $row->nome;?>
                        	</th>

                        	<td>
                        	<?php echo $row->email;?>
                        	</td>

                        	<td>
                        		<?php
                        		if ($row->faltas != 0){
                        			echo "Abono de ". $row->faltas . " faltas";
                        		}?> <br> <?php

                        		if ($row->listas != 0){
                        			echo "Eliminação de ". $row->listas . " notas de prática";
                        		} ?> <br> <?php

                        		if ($row->pontos != 0){
                        			echo "Acréscimo de  ". $row->pontos . " pontos";
                        		}


                        		?>
                        	</td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>    
                  </div>
				</div>
	</div>
    
</div>