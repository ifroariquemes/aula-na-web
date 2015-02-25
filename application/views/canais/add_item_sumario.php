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
                    <h3>Personal info</h3>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">First name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="Jane" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Last name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="Bishop" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Company:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="janesemail@gmail.com" type="text">
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
                        <div class="form-group">
                            <label class="col-md-3 control-label">Username:</label>
                            <div class="col-md-8">
                                <input class="form-control" value="janeuser" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password:</label>
                            <div class="col-md-8">
                                <input class="form-control" value="11111122333" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Confirm password:</label>
                            <div class="col-md-8">
                                <input class="form-control" value="11111122333" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <input class="btn btn-primary" value="Save Changes" type="button">
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




