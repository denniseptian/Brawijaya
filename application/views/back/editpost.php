  
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
  <li><a href="#">Home</a></li>                    
  <li><a href="#">Tables</a></li>
  <li class="active">Data Tables</li>
</ul>
<!-- END BREADCRUMB -->

<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .form-group button, .bootstrap-iso form input.form-control, .bootstrap-iso form textarea.form-control, .bootstrap-iso form select.form-control, .bootstrap-iso form .form-group-lg input.form-control, .bootstrap-iso form .form-group-lg textarea.form-control, .bootstrap-iso form .form-group-lg select.form-control, .bootstrap-iso form .form-group-sm input.form-control, .bootstrap-iso form .form-group-sm textarea.form-control, .bootstrap-iso form .form-group-sm select.form-control{-webkit-border-radius: 20px;-moz-border-radius: 20px; border-radius: 20px;}.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#555555; background-color: #eeeeee; border-radius: 20px; padding-left:15px}</style>

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                

  <div class="row">
    <div class="col-md-12">

      <!-- START DEFAULT DATATABLE -->
      <div class="panel panel-default">
        <div class="panel-heading">                                
          <h3 class="panel-title">Default</h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
          </ul>                                
        </div>
        <div class="panel-body">
          <?php echo form_open('post/update', 'role="form"'); ?>
          <form method="post">
     <div class="form-group form-group-sm">
      <label class="control-label " for="name">
       Title
     </label>
     <input class="form-control" id="name" name="title" type="text"/ value="<?php echo $title ?>">
   </div>
   <div class="form-group form-group-sm">
    <label class="control-label " for="subject">
     Subject
   </label>
   <input class="form-control" id="subject" name="subject" type="text"/ value="<?php echo $subject ?>">
 </div>
 <div class="form-group form-group-sm">
  <label class="control-label " for="date">
   Date
 </label>
 <input class="form-control" id="date" name="date" type="text"/ value="<?php echo $date ?>">
</div>
<div class="form-group form-group-sm">
  <label class="control-label " for="text">
   Duration
 </label>
 <input class="form-control" id="text" name="duration" placeholder="Total hari" type="text"/ value="<?php echo $duration ?>">
</div>
<div class="form-group form-group-sm">
  <label class="control-label " for="textarea">
   content
 </label>
 <textarea class="form-control" cols="40" id="textarea" name="content" rows="10" ><?php echo $content ?></textarea>
</div>
<div class="form-group form-group-sm">
  <label class="control-label " for="textarea1">
   jadwalkegiatan
 </label>
 <textarea class="form-control" cols="40" id="textarea1" name="task" rows="10"><?php echo $task ?></textarea>
</div>
<div class="form-group">
  <div>
    <input type="hidden" name="id" value="<?php echo $id_post ?>">
    <input type="submit" name="mit" class="btn btn-primary" value="Submit">
  </div>
</div>
</form>
<?php echo form_close(); ?>
</div>
</div>
<!-- END DEFAULT DATATABLE -->
</div>
</div>                                

</div>
<!-- PAGE CONTENT WRAPPER -->