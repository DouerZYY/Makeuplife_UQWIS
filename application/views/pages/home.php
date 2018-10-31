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


<body style="overflow-x: hidden;">


<!-- Javascript -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-waterfall.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/css/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/layer-slider/layerslider/js/greensock.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/layer-slider/layerslider/js/layerslider.transitions.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/layer-slider/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/layer-slider.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/owl-carousel.js"></script>



<div class="banner fade-in">

    <!--=== Slider ===-->
    <div id="layerslider" style="width: 100%; height: 300px; margin: 0px auto 0px auto;">
        <!-- First slide -->
        <div class="ls-slide" style="slidedirection: right; transition2d: 92,93,105; ">
            <img src="<?php echo base_url() ?>assets/images/banner1.png" class="ls-bg" alt="Slide background"></div>
        <!--Second Slide-->
        <div class="ls-slide" style="slidedirection: right; transition2d: 92,93,105; ">
            <img src="<?php echo base_url() ?>assets/images/banner2.jpg" class="ls-bg" alt="Slide background"></div>
        <!--Third Slide-->
        <div class="ls-slide" style="slidedirection: right; transition2d: 92,93,105; ">
            <img src="<?php echo base_url() ?>assets/images/banner3.png" class="ls-bg" alt="Slide background"></div>
        <!--End Third Slide-->
    </div>
    <!--/layer_slider-->
    <!--=== End Slider ===-->

</div>


<div id="container" class="ui-container fade-in">
    <div class="main">
        <ul>
            <li class="content-wrapper">
                <div class="b_nav">
                    <p>New Customer</p>
                    <p>Click <a href="#" class="red">here</a> to view how to explore the website </p>
                </div>
            </li>
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
                            <div  class="like">
                                <img like src="<?php echo base_url() ?>assets/images/Like-2-icon.png" height="18" width="18" />
                                <span >26</span>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </ul>
    </div>
</div>





<!--side bar-->
<ul id="side-bar" class="side-pannel side-bar">
    <a href="javascript:;" class="gotop" style="display:none;"><s class="g-icon-top"></s></a>
</ul>





<!-- JS Page Level -->

<script type="text/javascript">
    $(function(){
        $(window).scroll(function(){
            if($(window).scrollTop()>100){
                $("#side-bar .gotop").fadeIn();
            }
            else{
                $("#side-bar .gotop").hide();
            }
        });
        $("#side-bar .gotop").click(function(){
            $('html,body').animate({'scrollTop':0},500);
        });
    });
</script>


<script type="text/javascript">
    jQuery(document).ready(function() {
        OwlCarousel.initOwlCarousel();
        LayerSlider.initLayerSlider();
    });
</script>

<script language="javascript">
    function animate(){
        $(".charts").each(function(i,item){
            var a=parseInt($(item).attr("w"));
            $(item).animate({
                width: a+"%"
            },1000);
        });


        $(".safe_info li").hover(function () {
            $(this).find(".safe_ico").animate({ "top": "-3px" }, 300);
        }, function () {
            $(this).find(".safe_ico").animate({ "top": "0px" }, 200);
        });

    }
    animate();
</script>



<script type="text/javascript">
    $(document).ready(function () {
        $('.waterfall-container').waterfall();
    });
</script>



</body>
</html>



