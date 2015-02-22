<link rel="stylesheet" href="<?=base_url('assets/plugins/bootstrap-modal.min.css')?>">
<style>
     /*
Forked by Stan Williams http://stans-songs.com and http://stanwilliamsmusic.com
*/
.colorgraph {
    height: 5px;
    border-top: 0;
    background: #c4e17f;
    border-radius: 5px;
    background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <?php echo form_open("auth/create_user");?>
        <h2>Registre-se <small>É totalmente gratuito!</small></h2>
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <?php 
                $first_name['class']= 'form-control input-lg';
                $first_name['placeholder']= 'Primeiro Nome';
                $first_name['tabindex'] = '1';
                echo form_input($first_name);?>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <?php 
                $last_name['class']= 'form-control input-lg';
                $last_name['placeholder']= 'Último Nome';
                $last_name['tabindex'] = '2';
                echo form_input($last_name);?>
            </div>
          </div>
        </div>
        <div class="form-group">
             <?php 
             $email['class']= 'form-control input-lg';
             $email['placeholder']= 'Endereço de Email';
             $email['tabindex'] = '3';
             echo form_input($email);?>
        </div>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <?php 
                $company['class']= 'form-control input-lg';
                $company['placeholder']= 'Instituição de Ensino';
                $company['tabindex'] = '4';
                echo form_input($company);?>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <?php 
                $phone['class']= 'form-control input-lg';
                $phone['placeholder']= 'Telefone';
                $phone['tabindex'] = '5';
                echo form_input($phone);?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <?php
                $password['class']= 'form-control input-lg';
                $password['placeholder']= 'Senha';
                $password['tabindex'] = '6';
                echo form_input($password);?>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <?php
                $password_confirm['class']= 'form-control input-lg';
                $password_confirm['placeholder']= 'Confirme Senha';
                $password_confirm['tabindex'] = '7';
                echo form_input($password_confirm);?>
            </div>
          </div>
        </div>
        <?php if($message){?>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <strong class="text-error"><?php echo $message;?></strong>
          </div>
        </div>
        <?php }?>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
          </div>
        </div>
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-6 col-md-6"><input type="submit" value="Registrar" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
          <div class="col-xs-6 col-md-6"><a href="<?=base_url('auth/login')?>" class="btn btn-success btn-block btn-lg">Login</a></div>
        </div>
      <?php echo form_close();?>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
        </div>
        <div class="modal-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
</div>
