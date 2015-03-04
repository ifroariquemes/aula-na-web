<style>
    .forum.table > tbody > tr > td {
        vertical-align: middle;
    }

    .forum .fa {
        width: 1em;
        text-align: center;
    }

    .forum.table th.cell-stat {
        width: 6em;
    }

    .forum.table th.cell-stat-2x {
        width: 14em;
    }
</style>
<style>
    /* Blue Flat Button
==================================================*/
    .btn-sm{
        position: relative;
        vertical-align: center;
        margin: 0px;
        height: 100x;
        padding: 15px 15px;
        font-size: 4px;
        color: white;
        text-align: center;
        text-shadow: 0 3px 2px rgba(0, 0, 0, 0.3);
        background: #62b1d0;
        border: 0;
        border-bottom: 3px solid #9FE8EF;
        cursor: pointer;
        -webkit-box-shadow: inset 0 -3px #9FE8EF;
        box-shadow: inset 0 -3px #9FE8EF;
    }

    .btn-sm:active {
        top: 2px;
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .btn-sm:hover {
        background: #45E1E8;
    }

</style>
<!-- Main -->
<div class="container">

    <!-- upper section -->
    <div class="row">
        <div class="col-md-3">
            <!-- left -->
            <a href="#"><strong><i class="glyphicon glyphicon-briefcase"></i> Toolbox</strong></a>
            <hr>

            <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="glyphicon glyphicon-flash"></i> Sumário Global</a></li>
                <li><a href="<?= base_url(uri_string() . "?sumario") ?>"><i class="glyphicon glyphicon-link"></i> Sumário Individual</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Dependências</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-book"></i> Atividades</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Avaliações</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-time"></i> Turmas</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-plus"></i> Configurações</a></li>
            </ul>

            <hr>

        </div><!-- /span-3 -->
        <div class="col-md-9">   	
            <!-- column 2 -->	
            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> Sumário Individual</strong></a>
            <a href="#" class="btn btn-default btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i></a>
            <hr>
            <div class="row">
                <!-- edit form column -->
                <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> 
                        <i class="fa fa-coffee"></i>
                        This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>
                    <h3>Cadastrar Tema</h3>
                    <form class="form-horizontal" role="form" method="post">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Nome do Tema:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="titulo" value="" type="text">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <input type="submit" name="submit" class="btn btn-primary" value="Cadastrar" type="button">
                                <span></span>
                                <input class="btn btn-default" value="Cancel" type="reset">
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--/row-->
        </div><!--/col-span-9-->
    </div><!--/row-->
    <!-- /upper section -->
</div><!--/container-->
<!-- /Main -->




