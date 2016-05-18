                <p>
                  <a href="<?php echo site_url('admin/add') ?>" clas/adds="btn btn-primary">Add New</a>
                </p>
                <div class="table-responsive">
                 <table class="table table-bordered table-hover table-striped">
                   <caption>List Data Post</caption>
                   <thead>
                    <tr>
                    <th width="25px" align="center">No</th>
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
                          <td><center><?php echo $nomor; ?></center></td>
                          <td><?php echo $row->u_name; ?></td>
                          <td>
                            <a href="<?php echo site_url('post/edit/' . $row->id_user); ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                            <a onClick="return confirm('Anda yakin ingin menghapus data ini?')" href="<?php echo site_url('post/delete/' . $row->id_user); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                          </td>
                          <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>