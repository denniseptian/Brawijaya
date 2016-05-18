<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
  
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?> ">

  
  
  
</head>

<body>

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>


  <form action="<?php echo site_url('login/proses'); ?>" method="post">
    <?php
    if (validation_errors() || $this->session->flashdata('result_login')) {
      ?>
      <div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Warning!</strong>
        <?php echo validation_errors(); ?>
        <?php echo $this->session->flashdata('result_login'); ?>
      </div>    
      <?php } ?>
      <h4> Login  </h4>
      <input type="text" name="username" class="form-control" placeholder="Username"/>
      <input type="password" name="password" class="form-control" placeholder="Password"/>
      <li><a href="#">Forgot your password?</a></li>
      <input class="button" type="submit" value="Log in"/>
    </form>

    <!---->
    
    
    
    
    <script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script> 
    <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js'); ?>"></script> 
  </body> 
  </html>
