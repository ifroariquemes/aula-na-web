<?php ?>
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Canais</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><i class="fa fa-inbox"></i> Meus Canais</a></li>
                    <li><a href="#"><i class="fa fa-flask"></i> Todos Canais</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-database"></i> Mais <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="fa fa-home"></i> Action</a></li>
                            <li><a href="#"><i class="fa fa-flask"></i> Another action</a></li>
                            <li><a href="#"><i class="fa fa-magic"></i> Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-link"></i> Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-user"></i> One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search for something">
                        </div>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_url('canais/criar') ?>"><i class="fa fa-link"></i> Adicionar</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</div>
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Page name</a></li>
        <li><a href="#">Search Results</a></li>
        <li class="pull-right"><a href="" class="text-muted"><i class="fa fa-refresh"></i></a></li>
    </ol>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php foreach($canais as $canal){?>
            <div class="well search-result">
                <div class="row">
                    <a href="<?=base_url('canais/show/'.$canal['oid'])?>">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                            <img class="img-responsive" src="http://placehold.it/400x200/99cc00/FFF&text=Capa" alt="">
                        </div>
                        <div class="col-xs-6 col-sm-9 col-md-9 col-lg-10 title">
                            <h3><?=$canal['titulo']?></h3>
                            <p><?=$canal['descricao']?></p>
                        </div>
                    </a>
                </div>
            </div>
            <?php } ?>
            <div class="well search-result">
                <div class="row">
                    <a href="#">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                            <img class="img-responsive" src="http://lorempixel.com/400/200/sports/3/" alt="">
                        </div>
                        <div class="col-xs-6 col-sm-9 col-md-9 col-lg-10 title">
                            <h3>Blueberry Sport</h3>
                            <p>Nulla rhoncus lacus tortor, vel tincidunt dolor eleifend et. Ut consequat elit quam, iaculis volutpat ipsum fermentum pulvinar. Pellentesque nec sem vel arcu ornare faucibus.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="well search-result">
                <div class="row">
                    <a href="#">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                            <img class="img-responsive" src="http://lorempixel.com/400/200/sports/1/" alt="">
                        </div>
                        <div class="col-xs-6 col-sm-9 col-md-9 col-lg-10 title">
                            <h3>Power Thirst</h3>
                            <p>Cras nisi dolor, tristique id vehicula vitae, mollis at eros. Ut euismod sem eu tellus vestibulum, in facilisis est feugiat. Mauris sed leo sed erat vestibulum suscipit.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <button type="button" class="btn btn-info  btn-block">
                    <i class="glyphicon glyphicon-refresh"></i>Load more...
                </button>
            </div>
        </div>
    </div>
</div>
