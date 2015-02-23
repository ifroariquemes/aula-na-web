<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Base Inicial</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/bootstrap3/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/plugins/bootstrap-dropdown.min.css')?>">
        
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    </head>
    <body>

        <!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>">Aula na Web</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-user"></i> <?=$user->first_name?> <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="<?=base_url('auth/edit_user/'.$user->id)?>">Meu Perfil</a></li>
            <li><a href="<?=base_url('auth/logout')?>"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->