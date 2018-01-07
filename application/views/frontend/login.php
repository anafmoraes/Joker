    <div class="col-md-4"></div>
    <div class="container col-md-4">
            <header class="text-center"><br><br>
              <img src="<?php echo base_url('/images/joker-face.png');?>">
              <h2>Joker Gamification</h2>
              <h4>Autenticação do sistema</h4>
            </header>
                <div class="templatemo-login-form">
                    <?php  
                        echo validation_errors('<div class="alert alert-danger">','</div>');
                        echo form_open('usuarios/login');

                    ?>
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Usuário" name="txt-user" type="text" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Senha" name="txt-senha" type="password" value="">
                         </div>
                        <button class="btn btn-lg btn-success btn-block">Entrar</button>
                    </fieldset>
                    <?php echo form_close();?>
                    <div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
                        <p>Ainda não tem registro? <strong><a href=<?php echo base_url('cadastro')?> class="blue-text">Cadastre-se agora!</a></strong></p>
                    </div>
                </div>
        </div>
    </div>