<!-- START BREADCRUMB -->
<ul class="breadcrumb push-down-0">
    <li><a href="<?php echo site_url('admin') ?>">Home</a></li>
    <li><a href="<?php echo site_url('contact') ?>" ?>Mailbox</a></li>
    <li class="active">Message</li>
</ul>
<!-- END BREADCRUMB -->                

<!-- START CONTENT FRAME -->
<div class="content-frame">                                    
    <!-- START CONTENT FRAME TOP -->
    <div class="content-frame-top">                        
        <div class="page-title">                    
            <h2><span class="fa fa-file-text"></span> Message</h2>
        </div>                                                                                

        <div class="pull-right">                                                                                    
            <button class="btn btn-default"><span class="fa fa-print"></span> Print</button>
            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
        </div>                        
    </div>
    <!-- END CONTENT FRAME TOP -->

    <!-- START CONTENT FRAME LEFT -->
    <div class="content-frame-left">
        <div class="block">
            <div class="list-group border-bottom">
                <a href="<?php echo site_url('contact') ?>" class="list-group-item"><span class="fa fa-inbox"></span> Inbox <span class="badge badge-success"><?php echo $totalmessage ?></span></a>
                <a href="<?php echo site_url('contact/viewstarmessage'); ?>" class="list-group-item"><span class="fa fa-star"></span> Penting <span class="badge badge-warning"><?php echo $totalmessagestared ?></span></a>
                <a href="<?php echo site_url('contact/trash'); ?>" class="list-group-item"><span class="fa fa-trash-o"></span> Deleted <span class="badge badge-default">1.4k</span></a>                            
            </div>                        
        </div>
    </div>
    <!-- END CONTENT FRAME LEFT -->

    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body">

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="pull-left">
                    <h1 class="panel-title"><?php echo $name ?> <small>- <?php echo $email ?></small></h1>
                </div>
                <div class="pull-right">
                    <button class="btn btn-default"><span class="fa fa-mail-reply"></span></button>
                    <button class="btn btn-default"><span class="fa fa-warning"></span></button>
                    <button class="btn btn-default"><span class="fa fa-trash-o"></span></button>                                    
                </div>
            </div>
            <div class="panel-body">
                <h3>Pesan: <?php echo $subject ?> <small class="pull-right text-muted"><span class="fa fa-clock-o"></span> Tanggal: <?php echo $date ?></small></h3>
                <?php echo $message ?>
                </div>
        </div>
    </div>
    <!-- END CONTENT FRAME BODY -->
</div>
<!-- END CONTENT FRAME -->                    
</div>            
<!-- END PAGE CONTENT -->
</div>
        <!-- END PAGE CONTAINER -->