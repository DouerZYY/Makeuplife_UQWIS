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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/owl-carousel/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/layer-slider/layerslider/css/layerslider.css"/>
</head>

<body>


<div class="header" >
    <div id="primary-navigation" class="nav nav-home nav-fixed" style="visibility: visible;">
        <div class="inner-nav fn-clear">
            <div class="nav-menu fn-right">
                <ul class="nav-list fn-left" >
                    <li><a href="<?php echo base_url(); ?>categories" style="color: darkred">Categories</a></li>
                    <li><a href="<?php echo base_url(); ?>posts/create">Write Post</a></li>
                    <li><a href="<?php echo base_url(); ?>categories/create">Add Category</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="container">


    <h2><?=$title;?></h2>
    <ul class="list-group" style="border-radius: 5px; box-shadow: 0 0 5px #CCCCCC;  width: 800px;">
        <?php if ($this->session->userdata('logged_in') == False): ?>
            <div class="warning">
            <h3>Your haven't logged in yet. Please <a href="<?php echo base_url(); ?>users/login" style="color: red;">Log in</a> to viewe all categories. </h3>
        </div>
            <?php endif;?>
        <?php foreach ($categories as $category): ?>
            <?php if ($this->session->userdata('user_id') == $category['user_id']): ?>
                <li class="list-group-item" style="height: 40px;"><a href="<?php echo site_url('/categories/posts/' . $category['id']); ?>"><?php echo $category['name']; ?></a>

                    <form class="cat-delete" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
                        <input type="submit" class="btn-link text-danger" value="Delete" style="margin-left: 30px;width:70px; background-color: whitesmoke;border-radius: 5px;box-shadow: 0 0 5px #CCCCCC; float: right;">
                    </form>
                </li>

            <?php endif;?>

        <?php endforeach;?>
    </ul>


</div>
</body>



</html>
