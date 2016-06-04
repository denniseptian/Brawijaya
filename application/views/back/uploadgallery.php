<!-- START BREADCRUMB -->
<ul class="breadcrumb push-down-0">
  <li><a href="#">Home</a></li>
  <li><a href="#">Pages</a></li>
  <li class="active">Calendar</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE TITLE -->
<div class="page-title">                    
  <h2><span class="fa fa-file-image-o"></span> Unggah gambar</h2>
</div>
<!-- END PAGE TITLE -->  

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                

  <div class="row">
    <div class="col-md-12">

      <!-- START DEFAULT DATATABLE -->
      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
        <div class="panel-heading"><b>Form Upload Image</b></div>
        <div class="panel-body">
          <?=$this->session->flashdata('pesan')?>
          <form action="<?php echo site_url('c_gallery/insert') ?>" method="post" enctype="multipart/form-data">
            <table class="table table-striped">
              <tr>
                <td style="width:15%;">Nama foto</td>
                <td>
                  <div class="col-sm-6">
                    <input type="text" name="name" class="form-control">
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Category</td>
                <td>
                  <div class="col-sm-6">
                    <input type="text" name="category" class="form-control">
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">File Foto</td>
                <td>
                  <div class="col-sm-6">
                    <input type="file" name="filefoto" class="form-control">
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Keterangan Foto</td>
                <td>
                  <div class="col-md-10">
                    <textarea name="textket" class="form-control"></textarea>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <input type="submit" class="btn btn-success" value="Simpan">
                  <a href="<?php echo site_url('admin/galery') ?>" type="button" class="btn btn-default">Batal</a>
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