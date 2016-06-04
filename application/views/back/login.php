<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>        
  <!-- META SECTION -->
  <title>Joli Admin - Responsive Bootstrap Admin Template</title>            
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <!-- END META SECTION -->

  <!-- CSS INCLUDE -->        
  <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('assets/css/theme-default.css'); ?>"/>
  <!-- EOF CSS INCLUDE -->                                    
</head>
<body>

  <div class="login-container">
    <div class="login-box animated fadeInDown">
      <div class="login-logo"></div>
      <div class="login-body">
        <div class="login-title"><strong>Brawijaya</strong> Tour and travel</div>
        <form action="<?php echo site_url('login/proses'); ?>" class="form-horizontal" method="post">
          <?php
          if (validation_errors() || $this->session->flashdata('result_login')) {
            ?>
            <div class="alert alert-error">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <div class="alert alert-info" role="alert">
              <strong>Warning!</strong>
              <?php echo validation_errors(); ?>
              <?php echo $this->session->flashdata('result_login'); ?></div> 
            </div>    
            <?php } ?>
              <div class="form-group">
                <div class="col-md-12">
                  <input type="text" name="username" class="form-control" placeholder="Username"/>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <input type="password" name="password" class="form-control" placeholder="Password"/>                  
                </div>
              </div>
              <div align="center">
                <?php echo $widget;?>
                <?php echo $script;?>
              <br>
              <br>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                  <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                </div>
                <div class="col-md-6">
                  <button class="btn btn-info btn-block" type="submit" value="Log in">Log In</button>
                </div>
              </div>
            </form>
          </div>
          <div class="login-footer">
            <div class="pull-left">
              &copy; 2016 Brawijaya tour and travel
            </div>
          </div>
        </div>

      </div>

    </body>
    </html>