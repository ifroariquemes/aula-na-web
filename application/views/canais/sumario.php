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
            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>     
            <hr>
            <div class="row">
                <!-- center left-->	
                <div class="col-md-12">
                    <div class="list-group wizard-menu">
                        <a href="#" class="list-group-item step-1-menu" data-for=".step-1">
                            <div class="row">
                                <div class="col-md-9">
                                    <h4 class="list-group-item-heading">1. Load from DIV</h4>
                                    <p class="list-group-item-text">Load your data from a div.</p>
                                </div>
                                <div class="col-md-3">
                                    <img src="http://placehold.it/40/8e44ad/FFF&text=B" alt="" class="" />
                                </div>
                            </div>
                        </a>                        
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




