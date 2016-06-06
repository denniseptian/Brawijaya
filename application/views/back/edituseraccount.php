<!-- START BREADCRUMB -->
<ul class="breadcrumb push-down-0">
  <li><a href="#">Home</a></li>
  <li><a href="#">Pages</a></li>
  <li class="active">Calendar</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE TITLE -->
<div class="page-title">                    
  <h2><span class="fa fa-user"></span> Edit User</h2>
</div>
<!-- END PAGE TITLE -->  

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                

  <div class="row">
    <div class="col-md-12">

      <!-- START DEFAULT DATATABLE -->
      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
        <div class="panel-heading"><b>User Admin</b></div>
        <div class="panel-body">
        <?php
          if ($this->session->flashdata('ganti')) {
            # code...
            ?>
            <div class="alert alert-error">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <div class="alert alert-info" role="alert">
              <strong>Warning!</strong>
              <?php echo validation_errors(); ?>
              <?php echo $this->session->flashdata('ganti'); ?></div> 
            </div>
            <?php
          }
        ?>
          <form action="<?php echo site_url('useraccount/update') ?>" method="post" enctype="multipart/form-data">
            <table class="table table-striped">
              <tr>
                <td style="width:15%;">Id User</td>
                <td>
                  <div class="col-sm-6">
                    <input type="text" name="name" value="<?php echo $u_name ?>" readonly class="form-control">
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Old password</td>
                <td>
                  <div class="col-sm-6">
                    <input type="password" name="opasswd" class="form-control">
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">New password</td>
                <td>
                  <div class="col-sm-6">
                    <input type="password" name="npasswd" class="form-control">
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">New password</td>
                <td>
                  <div class="col-sm-6">
                    <input type="password" name="nnpasswd" class="form-control">
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <input type="hidden" name="id" value="<?php echo $id_user ?>">
                  <input type="submit" name="mit" class="btn btn-success" value="Simpan">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>    <!-- /panel -->
      <!-- END DEFAULT DATATABLE -->
    </div>
  </div>                                

</div>
<!-- PAGE CONTENT WRAPPER -->  

 <!-- /container -->