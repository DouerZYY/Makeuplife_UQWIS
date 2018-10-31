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

    <style type="text/css">
        .emptyresult{
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

<div class="emptyresult">
<h2><?=$title;?></h2>

<?php if ($posts): ?>
    <!-- <?php echo var_dump($posts); ?> -->
    <?php foreach ($posts as $post): ?>
        <!-- <?php echo var_dump($post); ?> -->
        <div class="emptyresult">
        <h3><?php echo $post->title; ?></h3>
        <!-- <h3><?php var_dump($post);?></h3> -->

        <div class="row">
            <div class="col-md-3">
                <img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post->post_image; ?>">
            </div>
            <div class="col-md-9">
                <small class="post-date">Posted on: <?php echo $post->created_at; ?> in <strong><?php echo $this->category_model->get_category($post->category_id)->name; ?></strong></small><br>
                <?php echo word_limiter($post->body, 60); ?>

                <br><br>
                <p><a class="btn btn-default" target="_blank" href="<?php echo site_url('/posts/' . $post->id); ?>">Read More</a></p>
            </div>
        </div>
    <?php endforeach;?>
    <div class="pagination-links">
        <?php echo $this->pagination->create_links(); ?>
    </div>
<?php else: ?>
         <h3>Sorry, no results.</h3>


<?php endif;?>
</div>
</div>


</body>
</html>


