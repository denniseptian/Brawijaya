

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
  </div>
  <!-- END CONTENT FRAME TOP -->

  <!-- START CONTENT FRAME LEFT -->
  <div class="content-frame-left">
    <div class="block">
      <div class="list-group border-bottom">
        <a href="<?php echo site_url('contact') ?>" class="list-group-item"><span class="fa fa-inbox"></span> Inbox <span class="badge badge-success"><?php echo $totalmessage ?></span></a>
        <a href="<?php echo site_url('contact/viewstarmessage'); ?>" class="list-group-item"><span class="fa fa-star"></span> Penting <span class="badge badge-warning"><?php echo $totalmessagestared ?></span></a>
      </div>                        
    </div>
  </div>
  <!-- END CONTENT FRAME LEFT -->

  <!-- START CONTENT FRAME BODY -->
  <div class="content-frame-body">

    <!-- START DEFAULT DATATABLE -->
    <div class="panel panel-default">
      <div class="panel-heading">                                
        <h3 class="panel-title">Default</h3>                             
      </div>
      <div class="panel-body">
        <table class="table datatable">
          <thead>
            <tr>
              <th width="74">No</th>
              <th>Nama</th>
              <th>E-Mail</th>
              <th>Subject</th>
              <th>Tanggal</th>
              <th width="120">Seting</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($data_get == NULL) {
              ?>
              <div class="alert alert-info" role="alert">Data masih kosong, Belum ada pesanan!</div>
              <?php
            } else {
              $nomor = 0;
              foreach ($data_get as $row) {
                $nomor++;
                ?>
                <tr>
                  <td height="40"><center><?php echo $nomor; ?></center></td>
                  <td><a href="<?php echo site_url('contact/viewContact/'.$row->id_contact) ?>" class="mail-text"><?php echo substr($row->name, 0, 35); ?></a></td>
                  <td><?php echo substr($row->email, 0, 35); ?></td>                    
                  <td><?php echo substr($row->subject, 0, 65); ?></td>
                  <td><?php echo $row->date; ?></td>
                  <td align="center">
                    <?php 
                    if ($row->star == 1 ) {
                        # code...
                      ?>
                      <a href="<?php echo site_url('contact/starmessage/'.$row->id_contact); ?>" class=" btn btn-xs"><span class="fa fa-star" aria-hidden="true"></span></a>
                      <?php
                    }              
                    else{
                      ?><a href="<?php echo site_url('contact/starmessage/'.$row->id_contact); ?>" class=" btn btn-xs"><span class="fa fa-star-o" aria-hidden="true"></span></a>
                    <?php
                    }
                    ?>
                    <a href="<?php echo site_url('outputfiles/pdf'); ?>" class=" btn btn-xs"><span class="fa fa-file-pdf-o" aria-hidden="true"></span></a>
                    <a onClick="return confirm('Anda yakin ingin menghapus data ini?')" href="<?php echo site_url('contact/delete/' . $row->id_contact); ?>" class="btn-control btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                  </td>
                </tr>
                <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- END DEFAULT DATATABLE -->
  </div>
  <!-- END CONTENT FRAME BODY -->
</div>
<!-- END CONTENT FRAME -->                    
</div>            
<!-- END PAGE CONTENT -->
</div>
        <!-- END PAGE CONTAINER -->