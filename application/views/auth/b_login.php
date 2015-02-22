<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <!--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>-->
              <h4 class="modal-title" id="myModalLabel">Login em aula-na-web</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                              <?php echo form_open("auth/login", array('id'=>'loginForm','novalidade'=>'novalidade'));?>
                              <div class="form-group">
                                  <?php echo lang('login_identity_label', 'identity');?>
                                  
                                  <?php 
                                  $identity['class'] = 'form-control';
                                  $identity['title'] = 'Entre com seu nome de usuário';
                                  $identity['placeholder'] = 'example@gmail.com';
                                  echo form_input($identity);
                                  ?>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <?php echo lang('login_password_label', 'password');?>
                                  <?php 
                                  $password['class'] = 'form-control';
                                  $password['title'] = 'Entre com sua senha';
                                  echo form_password($password);
                                  ?>
                                  <span class="help-block"></span>
                              </div>
                              <?php if($message){?>
                              <div id="loginErrorMsg" class="alert alert-error"><?php echo $message;?></div>
                              <?php }?>
                              <div class="checkbox">
                                  <label>
                                      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Lembrar-me
                                  </label>
                                  <p class="help-block">(Se este for computador privado)</p>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Login</button>
                              <a href="forgot_password" class="btn btn-default btn-block"><?php echo lang('login_forgot_password');?></a>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Registre agora <span class="text-success">GRÁTIS</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Participe de grupos</li>
                          <li><span class="fa fa-check text-success"></span> Faça sua trajetória</li>
                          <li><span class="fa fa-check text-success"></span> Milhares de vídeos, pdfs etc...</li>
                          <li><span class="fa fa-check text-success"></span> Colabore com conteúdos</li>
                          <li><span class="fa fa-check text-success"></span> Melhore seus conhecimentos</li>
                          <li><a href="<?=base_url('site/about')?>"><u>Leia mais</u></a></li>
                      </ul>
                      <p><a href="create_user" class="btn btn-info btn-block">Sim, registre-me!</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>

