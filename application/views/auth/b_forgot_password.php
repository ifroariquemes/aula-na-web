<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Recuperar Senha</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <?php if($message){?>
            <p class="text-center text-success"><?php echo $message;?></p>
            <?php }else{?>
            <p class="text-center">Preencha o campo para poder recuperar sua senha</p>
            <?php }?>
            <?php echo form_open("auth/forgot_password");?>
                <?php 
                $email['placeholder'] = 'Seu Email';
                $email['autocomplete'] = 'off';
                $email['class']= 'input-lg form-control';
                echo form_input($email);
                ?>                
                <input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Recuperando Senha..." value="Recuperar Senha">
            <?php echo form_close();?>
        </div><!--/col-sm-6-->
    </div><!--/row-->
</div>
