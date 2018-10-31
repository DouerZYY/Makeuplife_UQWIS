<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <meta charset="gb2312">
    <meta name="keywords" content="Makeup life, share cosmetics,shopping comestics, social network,post blog and vlog,payment">
    <meta name="description" content="Makeup toturial, recommand cosmetics,shopping comestics">
    <title>Makeup Life</title>
    <link rel="icon" href="<?php echo base_url()?>assets/images/KingF.ico" type="image/x-icon">
    <link rel="shor›tcut icon" href="<?php echo base_url()?>assets/images/KingF.ico" type="image/x-icon">
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css "/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/global.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/owl-carousel/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/layer-slider/layerslider/css/layerslider.css"/>

    <style>
        .categories-container{
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

<div class="header" >
    <div id="primary-navigation" class="nav nav-home nav-fixed" style="visibility: visible;">
        <div class="inner-nav fn-clear">
            <div class="nav-menu fn-right">
                <ul class="nav-list fn-left" >
                    <li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
                    <li><a href="<?php echo base_url(); ?>posts/create">Write Post</a></li>
                    <li><a href="<?php echo base_url(); ?>categories/create" style="color:darkred">Add Category</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="categories-container" >

    <h2><?=$title;?></h2>

    <!-- <?php echo validation_errors(); ?> -->

    <?php echo form_open_multipart('categories/create'); ?>
    <div class="form-group">
        <label>Name</label>
        <div class="blank10"></div>
        <input type="text" class="form-control" name="name" placeholder="Enter name" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">
        <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
    </div>

        <button type="submit" class="btn btn-default"  style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">Submit</button>
    </form>



    <div class="blank-ends" style="height: 50px"></div>
</div>




</body>
</html>



