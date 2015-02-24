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
                    <table class="table forum table-striped">
                        <thead>
                            <tr>
                                <th class="cell-stat"></th>
                                <th>
                        <h3>Conteúdos</h3>
                        </th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                        <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
                                <td>
                                    <h4><a href="#">Frequently Asked Questions</a><br><small>Category description</small></h4>
                                </td>
                                <td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>
                                <td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
                                <td class="hidden-xs hidden-sm">by <a href="#">John Doe</a><br><small><i class="fa fa-clock-o"></i> 3 months ago</small></td>
                            </tr>
                            <tr>
                                <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                                <td>
                                    <h4><a href="#">Important changes</a><br><small>Category description</small></h4>
                                </td>
                                <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                                <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                                <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                            </tr>
                            <tr>
                                <td class="text-center"><i class="fa fa-heart fa-2x text-primary"></i></td>
                                <td>
                                    <h4><a href="#">More more more</a><br><small>Category description</small></h4>
                                </td>
                                <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                                <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                                <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 3 months ago</small></td>
                            </tr>
                            <tr>
                                <td class="text-center"><i class="fa fa-magic fa-2x text-primary"></i></td>
                                <td>
                                    <h4><a href="#">Haha</a><br><small>Category description</small></h4>
                                </td>
                                <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                                <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                                <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                            </tr>
                        </tbody>
                    </table>

                </div><!--/col-->
            </div><!--/row-->
        </div><!--/col-span-9-->
    </div><!--/row-->
    <!-- /upper section -->
</div><!--/container-->
<!-- /Main -->




