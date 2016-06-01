<!-- START BREADCRUMB -->
<ul class="breadcrumb push-down-0">
    <li><a href="#">Home</a></li>
    <li><a href="#">Pages</a></li>
    <li class="active">Calendar</li>
</ul>
<!-- END BREADCRUMB -->                                                

<!-- START CONTENT FRAME -->
<div class="content-frame">   

    <!-- START CONTENT FRAME TOP -->
    <div class="content-frame-top">                        
        <div class="page-title">                    
            <h2><span class="fa fa-image"></span> Gallery</h2>
        </div>                                     
        <div class="pull-right">
            <a href="<?php echo site_url('admin/uploadgallery') ?>" class="btn btn-primary" ><span class="fa fa-upload" ></span>Upload</a>
            <button class="btn btn-default content-frame-right-toggle"><span class="fa fa-bars"></span></button>
        </div>                         
    </div>

    <!-- START CONTENT FRAME RIGHT -->
    <div class="content-frame-right">                     
        <h4>Groups:</h4>
        <div class="list-group border-bottom push-down-20">
            <a href="<?php echo site_url('admin/galery') ?>" class="list-group-item active">All <span class="badge badge-primary"><?php echo $countgallery ?></span></a>
            <?php echo $this->session->flashdata('pesan') ?>
            <?php
            if ($grouplist == NULL) {
                ?>
                <div class="alert alert-info" role="alert">Data masih kosong, tolong di isi!</div>
                <?php
            } else {
                foreach ($grouplist as $row) {
                    if($row->category != NULL){
                        ?>
                        <tr>
                            <a href="<?php echo site_url('admin/galeryby/'. $row->category ) ?>" class="list-group-item"><?php echo str_replace('-', ' ', $row->category) ?> <span class="badge badge-success"></span></a>
                        </tr>
                        <?php
                    }else{
                        ?>
                        <tr>
                            <a href="#" class="list-group-item">More <span class="badge badge-success"></span></a>
                        </tr>
                        <?php
                    }

                }
            }
            ?>
        </div>                                                
    </div>
    <!-- END CONTENT FRAME RIGHT -->

    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body content-frame-body-left">

        <div class="pull-left push-up-10">
            <button class="btn btn-primary" id="gallery-toggle-items">Toggle All</button>
        </div>
        <div class="pull-right push-up-10">
            <div class="btn-group">
                <button class="bm-control btn-primary"><span class="fa fa-pencil"></span> Edit</button>
                <button class="mb-control btn-primary" data-box="#edit" ><span class="fa fa-trash-o"></span> Delete</button>
            </div>                            
        </div>
        <div class="gallery" id="links">

           <?php echo $this->session->flashdata('pesan') ?>
            <?php
            if ($imagelist == NULL) {
                ?>
                <div class="alert alert-info" role="alert">Data masih kosong, tolong di isi!</div>
                <?php
            } else {
                foreach ($imagelist as $row) {
                  ?>
                  <a class="gallery-item" href="<?=base_url()?>assets/uploads/gallery/<?=$row->namafile;?>" title="Nature Image 1" data-gallery>
                    <div class="image">                              
                        <img src="<?=base_url()?>assets/uploads/gallery/<?=$row->namafile;?>" alt="Nature Image 1"/>                                        
                        <ul class="gallery-item-controls">
                            <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                        </ul>                                                                    
                    </div>
                    <div class="meta">
                        <strong><?php echo $row->name ?></strong>
                        <span></span>
                    </div>                                
                </a>
                <?php
            }
        }
        ?>
    </div>

    <ul class="pagination pagination-sm pull-right push-down-20 push-up-20">
        <li class="disabled"><a href="#">«</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>                                    
        <li><a href="#">»</a></li>
    </ul>
</div>       
<!-- END CONTENT FRAME BODY -->
</div>               
<!-- END CONTENT FRAME -->

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
          <a href="#" class="btn btn-success btn-lg">Yes</a>
          <button class="btn btn-default btn-lg mb-control-close">No</button>
      </div>
  </div>
</div>
</div>