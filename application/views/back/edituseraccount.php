<!-- START BREADCRUMB -->
<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Forms Stuff</a></li>
  <li><a href="#">Form Layout</a></li>
  <li class="active">One Column</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->

<div class="page-content-wrap">

  <div class="row">
    <div class="col-md-12">

     <?php echo form_open('post/update', 'role="form"'); ?>
     <form class="form-horizontal" method="post">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><strong>Ubah password</strong> ADMIN</h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-remove" ><span class="fa fa-times"></span></a></li>
          </ul>
        </div>
        <div class="panel-body">
          <p>Harap mengingat ID dan password anda, dan jangan berikan ID dan password ini kepada orang lain dengan alasan apapun karena akan membuat website anda tidak aman.</p>
        </div>
        <div class="panel-body">                                                                        

          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Text Field</label>
            <div class="col-md-6 col-xs-12">                                            
              <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" name="username" value="<?php echo $u_name ?>" readonly class="form-control"/>
              </div>                                            
              <span class="help-block">This is sample of text field</span>
            </div>
          </div>

          <div class="form-group">                                        
            <label class="col-md-3 col-xs-12 control-label">Password</label>
            <div class="col-md-6 col-xs-12">
              <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                <input type="password" name="password" class="form-control"/>
              </div>            
              <span class="help-block">Password field sample</span>
            </div>
          </div>

          <div class="form-group">                                        
            <label class="col-md-3 col-xs-12 control-label">New Password</label>
            <div class="col-md-6 col-xs-12">
              <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                <input type="password" name="newpassword" class="form-control"/>
              </div>            
              <span class="help-block">Password field sample</span>
            </div>
          </div>

          <div class="form-group">                                        
            <label class="col-md-3 col-xs-12 control-label">New Password</label>
            <div class="col-md-6 col-xs-12">
              <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                <input type="password" name="newpassword" class="form-control"/>
              </div>            
              <span class="help-block">Password field sample</span>
            </div>
          </div>

        </div>
        <div class="panel-footer">
          <input type="hidden" name="id" value="">
          <input type="submit" name="mit" class="btn btn-primary pull-right" value="Submit">
        </div>
      </div>
      <?php echo form_close(); ?>

    </form>

  </div>
</div>                    

</div>
<!-- END PAGE CONTENT WRAPPER -->
<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="edit">
  <div class="mb-container">
    <div class="mb-middle">
      <div class="mb-title"><span class="glyphicon glyphicon-pencil"></span><strong>Edit</strong> ?</div>
      <div class="mb-content">
        <p>Are you sure want to Edit this post?</p>                    
        <p>Press "No" if youwant to continue work. Press Yes to continue Edit this post.</p>
      </div>
      <div class="mb-footer">
        <div class="pull-right">
          <a href="<?php echo site_url('post/edit/' . $row->id_post); ?>" class="btn btn-success btn-lg">Yes</a>
          <button class="btn btn-default btn-lg mb-control-close">No</button>
        </div>
      </div>
    </div>
  </div>
              </div><!--END MESSAGE BOX-->