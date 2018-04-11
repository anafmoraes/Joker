<div class="container"><br><br>
  <h1>Sistema Gamificado - Joker</h1>
  <div class="row">
    <div class="col-md-8">    
      <h2>Listas</h2>
  
  <div class="table-responsive"><table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <td>Quantidade de listas</td>
	      <td>Opções</td>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = $this->db->get('listas');
      
      foreach ($query->result() as $row) { ?>
      <tr>
        <th><?php echo $row->nome;?></th>
        <td><?php echo $row->quant_listas;?></td>
        <td>
          <a class="btn btn-default btn-sm" href="<?php echo base_url('Admin/pagina_editar/'.$row->id)?>">Editar</button>
          <a class="btn btn-default btn-sm" href="<?php echo base_url('Ademin/excluir_lista/'.$row->id)?>">Excluir</button>
</button> 
        </td>
        
      </tr><?php } ?>
    </tbody>
  </table>


  
  <a class="customlink" href="#" data-toggle="modal" data-target="#modalCadastrar" style="float: right;">Cadastrar novas listas </a>
  <br/><br/>
</div>

<!-- Modal cadastrar -->
<div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php
      echo validation_errors('<div class="alert alert-danger">', '</div>');
      echo form_open('despesa/inserir');
      ?>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar nova despesa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">       
          <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao">
          </div>
          <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" name="valor" placeholder="00.00">
          </div>
          <div class="form-group">
            <label for="data">Vencimento:</label>
            <input type="date" class="form-control" name="data">
            
          </div>               
      </div>
      <div class="modal-footer">
        <button type="button" class="btn custombtn" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn custombtn">Cadastrar</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>
