<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Redefinir Senha</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            
            <p class="text-center">
                <?php
                if($message){
                    echo $message;
                }else{
                    echo "Preencha os campos para redefinir sua senha";
                }
                ?>
                
            </p>
            <?php echo form_open('auth/reset_password/' . $code);?>
            <?php
            $new_password['class'] = 'input-lg form-control';
            $new_password['placeholder'] = 'Nova Senha';
            $new_password['autocomplete'] = 'off';
            echo form_input($new_password);
            
            $new_password_confirm['class'] = 'input-lg form-control';
            $new_password_confirm['placeholder'] = 'Confirme a Nova Senha';
            $new_password_confirm['autocomplete'] = 'off';
            echo form_input($new_password_confirm);
            
            echo form_input($user_id);
            echo form_hidden($csrf);
            ?>
                  
            <input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Redefinindo Senha..." value="Redefinir Senha">
            <?php echo form_close();?>
        </div><!--/col-sm-6-->
    </div><!--/row-->
</div>

<script type="text/javascript">
    $("input[type=password]").keyup(function() {
        var ucase = new RegExp("[A-Z]+");
        var lcase = new RegExp("[a-z]+");
        var num = new RegExp("[0-9]+");

        if ($("#password1").val().length >= 8) {
            $("#8char").removeClass("glyphicon-remove");
            $("#8char").addClass("glyphicon-ok");
            $("#8char").css("color", "#00A41E");
        } else {
            $("#8char").removeClass("glyphicon-ok");
            $("#8char").addClass("glyphicon-remove");
            $("#8char").css("color", "#FF0004");
        }

        if (ucase.test($("#password1").val())) {
            $("#ucase").removeClass("glyphicon-remove");
            $("#ucase").addClass("glyphicon-ok");
            $("#ucase").css("color", "#00A41E");
        } else {
            $("#ucase").removeClass("glyphicon-ok");
            $("#ucase").addClass("glyphicon-remove");
            $("#ucase").css("color", "#FF0004");
        }

        if (lcase.test($("#password1").val())) {
            $("#lcase").removeClass("glyphicon-remove");
            $("#lcase").addClass("glyphicon-ok");
            $("#lcase").css("color", "#00A41E");
        } else {
            $("#lcase").removeClass("glyphicon-ok");
            $("#lcase").addClass("glyphicon-remove");
            $("#lcase").css("color", "#FF0004");
        }

        if (num.test($("#password1").val())) {
            $("#num").removeClass("glyphicon-remove");
            $("#num").addClass("glyphicon-ok");
            $("#num").css("color", "#00A41E");
        } else {
            $("#num").removeClass("glyphicon-ok");
            $("#num").addClass("glyphicon-remove");
            $("#num").css("color", "#FF0004");
        }

        if ($("#password1").val() == $("#password2").val()) {
            $("#pwmatch").removeClass("glyphicon-remove");
            $("#pwmatch").addClass("glyphicon-ok");
            $("#pwmatch").css("color", "#00A41E");
        } else {
            $("#pwmatch").removeClass("glyphicon-ok");
            $("#pwmatch").addClass("glyphicon-remove");
            $("#pwmatch").css("color", "#FF0004");
        }
    });
</script>
