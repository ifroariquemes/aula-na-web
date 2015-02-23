<div class="container">
    <h1 class="text-primary"><span class="glyphicon glyphicon-user"></span>Edit Profile</h1>
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
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          <?php echo $message;?>
        </div>
        <h3>Informações Pessoais</h3>
        
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
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

