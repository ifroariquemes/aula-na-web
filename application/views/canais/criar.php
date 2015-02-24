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
        <li><a href="#"><i class="fa fa-inbox"></i> Meus Canais</a></li>
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
        <li><a href="<?=base_url('canais/criar')?>"><i class="fa fa-link"></i> Adicionar</a></li>
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
    <h1 class="text-primary">Criar Canal</h1>
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
          
          <?php if(isset($_POST['titulo']) && isset($resposta['message'])){?>
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          <?php echo $resposta['message'];?>
        </div>
          <?php }?>
        <h3>Informações do Canal</h3>
        
        <form action="" class="form-horizontal" method="post" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Título:</label>
            <div class="col-lg-8">
              <input class="form-control" name="titulo" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Descrição:</label>
            <div class="col-lg-8">
              <textarea name="descricao" class="form-control">
              </textarea>
            </div>
          </div>
            <hr>
          <div class="form-group pull-right">
            <input type="submit" class="btn btn-primary" value="Registrar" name="submit"/>
          </div>
             
        </form>
      </div>
  </div>
</div>
<hr>