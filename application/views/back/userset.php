<!-- START BREADCRUMB -->
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('admin'); ?>">Home</a></li>                    
  <li class="active">User seting</li>
</ul>
<!-- END BREADCRUMB -->                       

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
  <div class="row">
  <div class="col-md-3">
      <div class="table-responsive">
       <table class="table table-bordered table-hover table-striped">
         <caption><h1>Edit user account</h1></caption>
         <thead>
          <tr>
            <th>ID</th>
            <th width="100px">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($data_get == NULL) {
            ?>
            <div class="alert alert-info" role="alert">Data masih kosong, tolong di isi!</div>
            <?php
          } else {
            $nomor = 0;
            foreach ($data_get as $row) {
              $nomor++;
              ?>
              <tr>
                <td><?php echo $row->u_name; ?></td>
                <td>
                  <a href="#" class="mb-control btn-warning btn-xs" data-box="#edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <!-- MESSAGE BOX-->
                  <div class="message-box animated fadeIn" data-sound="alert" id="edit">
                    <div class="mb-container">
                      <div class="mb-middle">
                        <div class="mb-title"><span class="glyphicon glyphicon-pencil"></span><strong>Edit</strong> ?</div>
                        <div class="mb-content">
                          <p>Are you sure want to Edit this admin Account?</p>                    
                          <p>Press "No" if youwant to continue work. Press Yes to continue Edit this ID.</p>
                        </div>
                        <div class="mb-footer">
                          <div class="pull-right">
                            <a href="<?php echo site_url('useraccount/edit/' . $row->id_user); ?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!--END MESSAGE BOX-->

                  <a href="#" class="btn-controll btn-primary btn-xs"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></a>
                </td>
                <?php
              }
            }
            ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

