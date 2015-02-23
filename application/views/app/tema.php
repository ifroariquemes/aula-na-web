<style>
    .color-1{
color:#0000FF;
}
.color-2{
color:#FF8C00;
} 
.color-3{
color:#FF1493;
}  
.color-4{
color:#7CFC00;
}   
.color-5{
color:#00FA9A;
}  
.color-6{
color:#8A2BE2;
}  
.color-7{
color:#00FFFF;
}  
</style>
<div ng-app="myApp">
  <div ng-controller="ctrlApp" id="myApp">
    
    <div class="alerts" ng-shw="noty.queue.length>0">
      <div class="alert  alert-dismissable fade in pull-right" ng-repeat="m in noty.queue">
        <button type="button" class="close" data-dismiss="alert">×</button>
      </div>
    </div>

    <!--breadcrumb-->
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Category</a></li>
        <li class="active">Sub-section</li>
      </ol>
    </div>
    <!--/breadcrumb-->
    
    <!--big icon bar-->
    <div class="container-fluid">
      <ul class="nav nav-justified" id="iconbar">
        <li><a class="text-center color-1" href="#"><i class="fa fa-tag fa-5x"></i> <br>Tags</a></li>
        <li><a class="text-center color-2" href="#"><i class="fa fa-bookmark fa-5x"></i> <br>Tasks</a></li>
        <li><a class="text-center color-3" href="#"><i class="fa fa-camera fa-5x"></i> <br>Photos</a></li>
        <li><a class="text-center color-4" href="#"><i class="fa fa-map-marker fa-5x"></i> <br>Tour</a></li>
        <li><a class="text-center color-5" href="#"><i class="fa fa-music fa-5x"></i> <br>Tunes</a></li>
        <li><a class="text-center color-6" href="#"><i class="fa fa-book fa-5x"></i> <br>Books</a></li>
        <li><a class="text-center color-7" href="#"><i class="fa fa-film fa-5x"></i> <br>Videos</a></li>
      </ul>
    </div>
    <!--/big icon bar-->
    
    <hr>

    <!--example panels-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
            
               <!--panel-->
               <div class="panel panel-default">
                <div class="panel-heading" data-toggle="collapse" data-target="#collapse1">
                  <h3 class="panel-title">
                    Collapsible Panel
                  </h3>
                </div>
                <div id="collapse1" class="collapse">
                  <div class="panel-body">
                      <blockquote>
                        <p>"Click my heading to make me collapse"</p>
                      </blockquote>
                      <button class="btn btn-default pull-right" id="btn1">Button</button>
                  </div>
                </div>
              </div><!--/panel-->
              
              <!--panel-->
              <div class="panel panel-default">
                <div class="panel-heading collapsed" data-toggle="collapse" data-target="#collapseList">
                  <h3 class="panel-title">
                    Collapsible List Group
                  </h3>
                </div>
                <ul id="collapseList" class="list-group collapse">
                   <li class="list-group-item">Dey-Dey</li>
                   <li class="list-group-item">Triveo</li>
                   <li class="list-group-item">Behance</li>
                </ul>
              </div><!--/panel-->

            </div><!--/col-->
            <div class="col-sm-6">
          
               <!--panel-->
               <div class="panel panel-default">
                <div class="panel-heading collapsed" data-toggle="collapse" data-target="#collapse2">
                  <h3 class="panel-title">
                    Collapsed Panel
                  </h3>
                </div>
                <div id="collapse2" class="collapse">
                  <div class="panel-body">
                      <blockquote>
                        <p>"Click my heading to toggle me"</p>
                      </blockquote>
                      
                      <p>Wow, that's clever!</p>
                  </div>
                </div>
              </div><!--/panel-->
              
              <!--panel-info-->
              <div class="panel panel-info">
                <div class="panel-heading collapsed" data-toggle="collapse" data-target="#collapse3">
                  <h3 class="panel-title">
                    Collapsed Panel (info)
                  </h3>
                </div>
                <div id="collapse3" class="collapse">
                  <div class="panel-body">
                    <blockquote>
                        <p>"Click my heading to toggle me"</p>
                    </blockquote>
                      
                    <p>This panel has the <code>panel-info</code> context.</p>
                  </div>
                </div>
              </div><!--/panel-info-->
            </div><!--/col-->
        </div><!--/row-->
    </div><!--/container-->
   </div><!--/angular-app-ctrl-->
</div><!--/angular-app-->
                                        
