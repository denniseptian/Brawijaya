<!-- START BREADCRUMB -->
<ul class="breadcrumb push-down-0">
  <li><a href="#">Home</a></li>
  <li><a href="#">Pages</a></li>
  <li class="active">Calendar</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                

  <div class="row">
    <div class="col-md-12">

      <!-- START DEFAULT DATATABLE -->
      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
        <div class="panel-heading"><b>Paket wisata promo baru</b></div>
        <div class="panel-body">
          <form action="<?php echo site_url('promo/save') ?>" data-toggle="validator" method="post" enctype="multipart/form-data">
            <table class="table table-striped">
              <tr>
                <td style="width:15%;">Nama paket wisata</td>
                <td>
                  <div class="col-sm-6">
                    <input id="inputName" type="text" name="title" class="form-control" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Destinasi wisata</td>
                <td>
                  <div class="col-sm-6">
                    <input type="text" name="destination" class="form-control" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Detail tentang wisata</td>
                <td>
                  <div class="col-sm-6">
                    <textarea name="subject" class="form-control" required></textarea>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Durasi wisata</td>
                <td>
                  <div class="col-sm-1">
                    <input type="number" name="duration" class="form-control" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Batas promo</td>
                <td>
                <div class='col-sm-3'>
                    <div class="input-group date" data-provide="datepicker" data-date-format="yyyy/mm/dd">
                      <input name="promolimitdate" type="text" class="form-control" required>
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Cuplikan gambar</td>
                <td>
                  <div class="col-sm-6">
                    <input type="file" name="filefoto" class="form-control" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Detail tentang promo wisata</td>
                <td>
                  <div class="col-md-12">
                    <textarea name="task" id='edit' style="margin-top: 30px;" placeholder="Type some text" required>
                    </textarea>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <input type="submit" class="btn btn-success" value="Simpan">
                  <a href="<?php echo site_url('admin') ?>" type="button" class="btn btn-default">Batal</a>
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