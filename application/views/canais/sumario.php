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
            <a href="<?=base_url("canais/add_item_sumario/".$this->uri->segment(3))?>" class="btn btn-default btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i></a>
            <hr>
            <div class="row">
                <!-- center left-->	
                <div class="col-md-12">
                    <div class="list-group wizard-menu">
                        <?php foreach($temas as $tema){ ?>
                        <div class="list-group-item step-1-menu" data-for=".step-1">      
                            <div class="row">
                                <a href="#">
                                <div class="col-md-9">
                                    <h4 class="list-group-item-heading"><?=$tema['titulo']?></h4>
                                    <p class="list-group-item-text"><?=$tema['created']?></p>
                                </div>
                                </a>
                                <div class="col-md-3">                                   
                                    <div class="btn-group pull-right" role="group" aria-label="Default button group">
                                        <a href="<?=base_url(uri_string()."/".$tema['id']."?down");?>" class="btn btn-sm"><i class="fa fa-chevron-down fa-4x" ></i></a>
                                        <a href="<?=base_url(uri_string()."/".$tema['id']."?up");?>" class="btn btn-sm"><i class="fa fa-chevron-up fa-4x" ></i></a>
                                        <a href="#" class="btn btn-sm"><i class="fa fa-trash fa-4x" ></i></a>
                                        
                                    </div>
                                    <!--<img src="http://placehold.it/40/8e44ad/FFF&text=B" alt="" class="" />-->
                                </div>
                            </div>                          
                        </div>
                         <?php } ?>
                        <a href="#" class="list-group-item step-2-menu" data-for=".step-2">
                            <h4 class="list-group-item-heading">2. Load from DIV</h4>
                            <p class="list-group-item-text">Load your data from a div.</p>
                        </a>
                        <a href="#" class="list-group-item step-3-menu" data-for=".step-3">
                            <h4 class="list-group-item-heading">3. AJAX Load</h4>
                            <p class="list-group-item-text">AJAX-load your data. (Attribute: data-load)</p>
                        </a>
                    </div>

                </div><!--/col-->
            </div><!--/row-->
        </div><!--/col-span-9-->
    </div><!--/row-->
    <!-- /upper section -->
</div><!--/container-->
<!-- /Main -->




