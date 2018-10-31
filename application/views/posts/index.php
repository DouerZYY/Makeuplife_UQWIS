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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css "/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/global.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/owl-carousel/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/layer-slider/layerslider/css/layerslider.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/layer-slider/layerslider/skins/fullwidth/skin.css"/>


    <style>
        .waterfall-container{
            width:1120px;
            margin: 0 auto;
            margin-top: 0;
            margin-left: auto;
            margin-bottom: 0;
            margin-bottom: auto;
            overflow-x: auto;
        }


        .pin{
            float: left;
            width: 250px;
            height: auto;
            margin: 0 15px;
            margin-top:0px;
            margin-left: 15px;
            margin-bottom: 15px;
            margin-right: 15px;
            background:#ffffff;
            border-radius: 5px;
            box-shadow: 0 0 5px #ccc;
            /*--webkit-columns-width:250px;
            --moz-column-width:250px;
            --o-column-width: 250px;
            -ms-column-width:250px;*/
            --webkit-columns-count:4;
            --moz-column-count: 4;
            --o-column-count: 4;
            -ms-column-width:4;
        }
        .note-handle{
            padding: 0 15px 10px;
            padding-top: 0px;
            padding-left: 15px;
            padding-bottom: 10px;
            padding-right: 15px;
            overflow: hidden;
            display: flex;
        }
        .photo{
            width: 28px;
            height: 28px;
            position: relative;
            display: block;
            float: left;
        }
        .comment{
            width: 182.52px;
            height: 33px;
            webkit-box-flex:1;
            flex: 1;
        }
    </style>






</head>


<body style="overflow-x: hidden">

<div class="header" >
  <div id="primary-navigation" class="nav nav-home nav-fixed" style="visibility: visible;">
    <div class="inner-nav fn-clear">
    <div class="nav-menu fn-right">
        <ul class="nav-list fn-left" >
             <li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
             <li><a href="<?php echo base_url(); ?>posts/create">Write Post</a></li>
            <li><a href="<?php echo base_url(); ?>categories/create">Add Category</a></li>
        </ul>
    </div>
    </div>
</div>
</div>


<div class="blank10"></div>


<div class="waterfall-container" >
    <?php foreach ($posts as $post): ?>

    <div  target="_blank" class="pin">
    <div  class="note-info">
        <a  target="_blank" href="<?php echo site_url('/posts/' . $post['id']); ?>" class="note-href">
            <div  class="lazyload-block">
                <div class="lazyload-container loaded">
                <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" class="lazyload lazyload-image loaded" style="width: 250px; height: auto;">
                </div>
            </div>
        </a>
        <i  class="normal"></i>
        <h3><?php echo $post['title']; ?></h3>
    </div>
    <div  class="note-handle">
        <div  class="comment">
            <span  class="name"><?php echo $this->user_model->fetchUserData($post['user_id'])['username']; ?></span>
        </div>
        <!-- <div  class="like">
            <img like src="<?php echo base_url() ?>assets/images/Like-2-icon.png" height="18" width="18" />
            <span >26</span>
        </div> -->
        <?php if ($this->session->userdata('logged_in')): ?>
            <div  class="like">
                <!-- <?php echo var_dump($post); ?> -->
                <p><a onclick="javascript:savelike(<?php echo $post['id']; ?>);">
                     <i class="fa fa-thumbs-up"></i>
                     <span id="like_<?php echo $post['id']; ?>">
                        <?php if ($post['likes'] > 0) {echo $post['likes'] . ' Likes';} else {echo 'Like';}?>
                     </span></a>
                    </p>
            </div>
         <?php endif;?>
    </div>
    </div>
    <?php endforeach;?>


</div>




<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-waterfall.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/css/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/layer-slider/layerslider/js/greensock.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/layer-slider/layerslider/js/layerslider.transitions.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/layer-slider/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>



<!-- <script type="text/javascript">
    $(document).ready(function () {
        $('.waterfall-container').waterfall();
    });
</script> -->





<!-- <script type="text/javascript">
        function savelike(post_id){
        //     var search_url = "<?php echo base_url(); ?>application/controllers/Posts.php";
        // }
        // {
            // console.log('click to transfer id:', post_id);
            $.ajax({
                type: "post",
                url: <?php echo base_url('posts/savelike' . $post['id']); ?>,
                post: {post_id: post_id,}
                success: function (response) {
                    console.log('request successful response:',response);
                    $("#like_"+post_id).html(response+" Likes");

                },
                error:function (error) {
                    console.log('request error:',error);

                }
            });
        }
    </script> -->

<script type="text/javascript">
    function savelike(post_id)
    {
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('posts/savelikes/'); ?>"+post_id,
                    data: {"post_id": post_id},
                    success: function (response) {
                     $("#like_"+post_id).html(response+" Likes");

                    }
                });
             console.log(post_id);
    }
</script>



</body>
</html>
