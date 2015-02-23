<div class="container">
    <h1 class="text-primary"><span class="glyphicon glyphicon-user"></span>Editar Perfil</h1>
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
          <?php if($message){?>
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          <?php echo $message;?>
        </div>
          <?php }?>
        <h3>Informações Pessoais</h3>
        <?php echo form_open(uri_string(), array('class'=>'form-horizontal'));?>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Primeiro nome:</label>
            <div class="col-lg-8">
                <?php
                $first_name['class'] = 'form-control';
                echo form_input($first_name);?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Último nome:</label>
            <div class="col-lg-8">
              <?php
              $last_name['class'] = 'form-control';
              echo form_input($last_name);?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Instituição:</label>
            <div class="col-lg-8">
              <?php
              $company['class'] = 'form-control';
              echo form_input($company);?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Telefone:</label>
            <div class="col-lg-8">
              <?php
              $phone['class'] = 'form-control';
              echo form_input($phone);?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Senha:</label>
            <div class="col-lg-8">
              <?php
              $password['class'] = 'form-control';
              echo form_input($password);?>
            </div>
          </div>
            <div class="form-group">
            <label class="col-lg-3 control-label">Confirme a Senha:</label>
            <div class="col-lg-8">
              <?php
              $password_confirm['class'] = 'form-control';
              echo form_input($password_confirm);?>
            </div>
          </div>
            <div class="row">
          <div class="col-xs-6 col-md-6"><input type="submit" value="Salvar" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
          <div class="col-xs-6 col-md-6"><a href="<?=base_url('/')?>" class="btn btn-success btn-block btn-lg">Voltar</a></div>
        </div>
      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>
        <?php echo form_close();?>
      </div>
  </div>
</div>
<hr>

