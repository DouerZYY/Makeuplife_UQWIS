<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <meta charset="gb2312">
    <meta name="keywords" content="Makeup life, share cosmetics,shopping comestics, social network,post blog and vlog,payment">
    <meta name="description" content="Makeup toturial, recommand cosmetics,shopping comestics">
    <title>Makeup Life</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/images/KingF.ico" type="image/x-icon">
    <link rel="shor›tcut icon" href="<?php echo base_url() ?>assets/images/KingF.ico" type="image/x-icon">
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css "/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/global.css"/>

    <style>
        .mainarea{
            width:800px;
            margin: 0 auto;
            margin-top: 0;
            margin-left: auto;
            margin-bottom: 0;
            margin-bottom: auto;
            overflow-x: auto;
        }

    </style>

</head>

<body>
<div class="mainarea">

<h2><?=$title;?></h2>
<?php echo form_open_multipart('users/email'); ?>

<div class="form-group">
    <label>From: </label>
    <div class="blank10"></div>
    <input type="email" class="form-control" name="from_email" placeholder="Sender Email">
    <?php echo form_error('from_email', '<div class="text-danger">', '</div>'); ?>
</div>
<div class="blank10"></div>
<div>
    <label>To: </label>
    <div class="blank10"></div>
    <input type="email" class="form-control" name="to_email" placeholder="Recipient Address">
    <?php echo form_error('to_email', '<div class="text-danger">', '</div>'); ?>
</div>
<div class="blank10"></div>
<div>
    <label>CC: </label>
    <div class="blank10"></div>
    <input type="email" class="form-control" name="cc_email" placeholder="Other Recipient Address">
    <?php echo form_error('cc_email', '<div class="text-danger">', '</div>'); ?>
</div>
<div class="blank10"></div>
<div>
    <label>Topic</label>
    <div class="blank10"></div>
    <input type="text" class="form-control" name="topic" placeholder="Add Topic">
    <?php echo form_error('topic', '<div class="text-danger">', '</div>'); ?>
</div>
<div class="blank10"></div>
<div class="form-group">
    <label>Content</label>
    <div class="blank10"></div>
    <textarea id="editor1" class="form-control" name="content" placeholder="Add Body Content"></textarea>
    <?php echo form_error('content', '<div class="text-danger">', '</div>'); ?>
</div>

<button type="submit" class="btn btn-default" class="btn-link text-danger" style="width:70px; background-color: whitesmoke;border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">Send</button>
</form>
</div><div class="mainarea">

<div class="blank50"></div>

</body>
</html>



