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
        .container{
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

<body style="overflow-x: hidden">

<div class="container">
<!-- <?php var_dump($post)?> -->
<?php echo form_open_multipart('users/update/' . $post['id']); ?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center"><?=$title;?></h1>
        <div class="form-group">
            <label>Update Name</label>
            <div class="blank10"></div>
            <input type="text" class="form-control" name="name" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;" placeholder="<?php echo $post['name']; ?>">
            <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Update Zipcode</label>
            <div class="blank10"></div>
            <input type="text" class="form-control" name="zipcode" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;" placeholder="<?php echo $post['zipcode']; ?>">
            <?php echo form_error('zipcode', '<div class="text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Update Email</label>
            <div class="blank10"></div>
            <input type="email" class="form-control" name="email" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;" placeholder="<?php echo $post['email']; ?>">
            <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Update Username</label>
            <div class="blank10"></div>
            <input type="text" class="form-control" name="username" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;" placeholder="<?php echo $post['username']; ?>">
            <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">

            <label>Original Password</label>
            <div class="blank10"></div>
            <input type="password" class="form-control" name="password" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;" placeholder="Original Password">
            <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>New Password</label>
            <div class="blank10"></div>
            <input type="password" class="form-control" name="password2" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;" placeholder="New Password">
            <?php echo form_error('password2', '<div class="text-danger">', '</div>'); ?>
        </div>

        <button type="submit" class="btn btn-primary btn-block" >Submit</button>
    </div>
</div>
<?php echo form_close(); ?>
</div>

</body>
</html>




