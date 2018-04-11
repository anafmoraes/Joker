<div class="container"><br><br>
	<h1>Sistema Gamificado - Joker</h1>
	<div class="row">
		<div class="col-md-8">    
            <h2>Edição de Listas</h2>

                <div class="table-responsive"><table class="table table-striped table-bordered">
                    <thead>
                    <tr>
	                    <th>Jogador</th>
	                    <td>Lista 1</td>
                        <td>Lista 2</td>
                        <td>Lista 3</td>
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
                        	
                        	</td>

                        	<td>

                        	</td>
                            
                            <td>
                                
                            </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>    
                  </div>
				</div>
	</div>
    
</div>