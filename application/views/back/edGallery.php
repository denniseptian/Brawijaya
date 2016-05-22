<html>
<head>
<title>Upload Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fileinput.css'); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fileinput.min.css'); ?>"/>
</head>
<body>
<label class="control-label">Select File</label>
<input id="input-1" type="file" class="file">

<?php echo $error;?>

<?php echo form_open_multipart('c_gallery/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>