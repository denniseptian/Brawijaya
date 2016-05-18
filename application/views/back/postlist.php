                <p>
                  <a href="<?php echo site_url('admin/add') ?>" clas/adds="btn btn-primary">Add New</a>
                </p>
                <div class="table-responsive">
                 <table class="table table-bordered table-hover table-striped">
                   <caption><h1>List Data Post</h1></caption>
                   <thead>
                    <tr>
                      <th width="25px" align="center">No</th>
                      <th>Post Tittle</th>
                      <th>Date</th>
                      <th>Subject</th>
                      <th width="90px">Action</th>
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
                          <td height="40"><center><?php echo $nomor; ?></center></td>
                          <td><?php echo $row->title; ?></td>
                          <td><?php echo $row->date; ?></td>
                          <td><?php echo $row->subject; ?></td>
                          <td align="center">
                            <a href="#" class="mb-control btn-warning btn-xs" data-box="#edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="#" class="mb-control btn-danger btn-xs" data-box="#dellete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                          </td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>

              <!-- MESSAGE BOX-->
              <div class="message-box animated fadeIn" data-sound="<?php echo base_url('assets/audio/alert'); ?>" id="dellete">
                <div class="mb-container">
                  <div class="mb-middle">
                    <div class="mb-title"><span class="glyphicon glyphicon-trash"></span><strong>Edit</strong> ?</div>
                    <div class="mb-content">
                      <p>Are you sure want to delete this post?</p>                    
                      <p>Press "No" if youwant to continue work. Press Yes to continue dellete this post.</p>
                    </div>
                    <div class="mb-footer">
                      <div class="pull-right">
                        <a href="<?php echo site_url('post/delete/' . $row->id_post); ?>" class="btn btn-success btn-lg">Yes</a>
                        <button class="btn btn-default btn-lg mb-control-close">No</button>
                      </div>
                    </div>
                  </div>
                </div>
                </div><!--END MESSAGE BOX-->
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