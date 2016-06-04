
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB -->                       

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <!-- START WIDGETS -->                    
    <div class="row">
        <div class="col-md-3">

            <!-- START WIDGET SLIDER -->
            <div class="widget widget-default widget-carousel">
                <div class="owl-carousel" id="owl-example">
                    <div>                                    
                        <div class="widget-title">Total Visitors</div>                                                                        
                        <div class="widget-subtitle"></div>
                        <div class="widget-int"><?php echo $visitors_all ?></div>
                    </div>
                    <div>                                    
                        <div class="widget-title">This month</div>
                        <div class="widget-subtitle">Visitors</div>
                        <div class="widget-int"><?php echo $visitors_month ?></div>
                    </div>
                    <div>                                    
                        <div class="widget-title">This week</div>
                        <div class="widget-subtitle">Visitors</div>
                        <div class="widget-int"><?php echo $visitors_week ?></div>
                    </div>
                    <div>                                    
                        <div class="widget-title">Today</div>
                        <div class="widget-subtitle">Visitors</div>
                        <div class="widget-int"><?php echo $visitors_day ?></div>
                    </div>
                </div>                            
                <div class="widget-controls">                                
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>                             
            </div>         
            <!-- END WIDGET SLIDER -->

        </div>
        <div class="col-md-3">

            <!-- START WIDGET MESSAGES -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?php echo site_url('useraccount/view'); ?>';">
                <div class="widget-item-left">
                    <span class="glyphicon glyphicon-lock"></span>
                </div>                             
                <div class="widget-data">
                    <div class="widget-int num-count">
                        <?php echo $log ?>
                    </div>
                    <div class="widget-title">Total Login this day</div>
                    <div class="widget-subtitle">Into admin pages</div>
                </div>      
                <div class="widget-controls">                                
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->

        </div>
        <div class="col-md-3">

            <!-- START WIDGET TOTAL POST -->



            <div class="widget widget-default widget-item-icon" onclick="location.href='<?php echo site_url('admin/postlist'); ?>';">
                <div class="widget-item-left">
                    <span class="glyphicon glyphicon-paperclip"></span>
                </div>
                <div class="widget-data">
                    <div class="widget-int num-count"><?php echo $postcount ?></div>
                    <div class="widget-title">Total content in Website</div>
                    <div class="widget-subtitle">On your website</div>
                </div>
                <div class="widget-controls">                                
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>                            
            </div>                            
            <!-- END WIDGET REGISTRED -->

        </div>
        <div class="col-md-3">

            <!-- START WIDGET CLOCK -->
            <div class="widget widget-info widget-padding-sm">
                <div class="widget-big-int plugin-clock">00:00</div>                            
                <div class="widget-subtitle plugin-date">Loading...</div>
                <div class="widget-controls">                                
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>                         
            </div>                        
            <!-- END WIDGET CLOCK -->

        </div>
    </div>
    <!-- END WIDGETS -->                    

    <div class="row">
        <div class="col-md-6">

            <!-- START USERS ACTIVITY BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Users Activity</h3>
                        <span>Users vs returning</span>
                    </div>                                    
                    <ul class="panel-controls" style="margin-top: 2px;">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                            <ul class="dropdown-menu">
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                            </ul>                                        
                        </li>                                        
                    </ul>                                    
                </div>                                
                <div class="panel-body padding-0">
                    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                </div>                                    
            </div>
            <!-- END USERS ACTIVITY BLOCK -->
        </div>
        <div class="col-md-6">

            <!-- START VISITORS BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Visitors</h3>
                        <span>Visitors (last month)</span>
                    </div>
                    <ul class="panel-controls" style="margin-top: 2px;">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                            <ul class="dropdown-menu">
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                            </ul>                                        
                        </li>                                        
                    </ul>
                </div>
                <div class="panel-body padding-0">
                    <div id="container-postingan" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
                </div>
            </div>
            <!-- END VISITORS BLOCK -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
        </div>
        <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <ul class="list-inline item-details">
                    <li><a href="http://themifycloud.com/downloads/janux-premium-responsive-bootstrap-admin-dashboard-template/">Admin templates</a></li>
                    <li><a href="http://themescloud.org">Bootstrap themes</a></li>
                </ul>
            </div>
        </div>
        <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-content">
            <ul class="list-inline item-details">
               <li><a href="http://themifycloud.com/downloads/janux-premium-responsive-bootstrap-admin-dashboard-template/">Admin templates</a></li>
               <li><a href="http://themescloud.org">Bootstrap themes</a></li>
           </ul>
       </div>
   </div>

   <!-- START DASHBOARD CHART -->
   <div class="chart-holder" id="dashboard-area-1" style="height: 200px;"></div>
   <div class="block-full-width">

   </div>                    
   <!-- END DASHBOARD CHART -->

</div>
<!-- END PAGE CONTENT WRAPPER -->                                
</div>            
<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->










