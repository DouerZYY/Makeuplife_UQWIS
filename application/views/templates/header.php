<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=GBK">
	<meta charset="gb2312">
	<meta name="keywords" content="Makeup life, share cosmetics,shopping comestics, social network,post blog and vlog,payment">
	<meta name="description" content="Makeup toturial, recommand cosmetics,shopping comestics">
	<title>Homepage</title>
	<link rel="icon" href="<?php echo base_url() ?>assets/images/KingF.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/KingF.ico" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css "/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/global.css"/>
	</head>

	<body style="overflow-x: hidden;">

    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/ajaxtext.js"></script>


    <div class="header" >
  <div id="primary-navigation" class="nav nav-home nav-fixed" style="visibility: visible;">
    <div class="inner-nav fn-clear">
      <div class="brand fn-left"> <a href=" " class="nav-brand">
              <img src="<?php echo base_url() ?>assets/images/Logo_Makeup.png" height="auto" width="auto"> </a> </div>
      <div class="nav-menu fn-right">
        <ul class="nav-list fn-left">
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
<!--             <li><a href="<?php echo base_url(); ?>about">About</a></li> -->
             <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>


           <?php if (!$this->session->userdata('logged_in')): ?>
           <li><a href="<?php echo base_url(); ?>users/login" style="color: red;">Log in</a></li>
               <li><a href="<?php echo base_url(); ?>users/register" style="color: red;">Sign up</a></li>
           <?php endif;?>
           <?php if ($this->session->userdata('logged_in')): ?>


             <li><a href="<?php echo base_url(); ?>users/profile" style="color: red;">Profile</a></li>
            <li><a href="<?php echo base_url(); ?>users/logout" style="color: red;">Logout</a></li>
            <?php endif;?>

            <li style="float:right;">


              <?php echo form_open('posts/search/'); ?>
        <input type="text" name="keyword" value=" please input keywords" onfocus="if(this.value==' please input keywords')this.value=''; " onblur="if(this.value=='')this.value=' please input keywords';" class="SmallInput" style="color:#aaaaaa;width: 200px;margin-right: 17px; border-radius: 5px; box-shadow: 0 0 5px #CCCCCC;">
        <input type="submit" name="submit" value="Search" class="btn-link text-danger" style="width:70px; background-color: whitesmoke; border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">
      </form>

            </li>


        </ul>
      </div>
    </div>
  </div>
      </div>





    <div class="blank20"></div>
    <div class="sign-info">
      <!-- Flash messages -->
      <?php if ($this->session->flashdata('user_registered')): ?>
        <?php echo '<div class="alert alert-success">' . $this->session->flashdata('user_registered') . '</div>'; ?>
      <?php endif;?>

      <?php if ($this->session->flashdata('profile_updated')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('profile_updated') . '</p>'; ?>
      <?php endif;?>
      <?php if ($this->session->flashdata('profile_updated_invalid')): ?>
        <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('profile_updated_invalid') . '</p>'; ?>
      <?php endif;?>
      <?php if ($this->session->flashdata('email_send')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('email_send') . '</p>'; ?>
      <?php endif;?>
      <?php if ($this->session->flashdata('send_failed')): ?>
        <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('send_failed') . '</p>'; ?>
      <?php endif;?>

      <?php if ($this->session->flashdata('post_created')): ?>
        <?php echo '<div class="alert alert-success">' . $this->session->flashdata('post_created') . '</div>'; ?>
      <?php endif;?>

      <?php if ($this->session->flashdata('post_updated')): ?>
        <?php echo '<div class="alert alert-success">' . $this->session->flashdata('post_updated') . '</div>'; ?>
      <?php endif;?>

      <?php if ($this->session->flashdata('category_created')): ?>
        <?php echo '<div class="alert alert-success">' . $this->session->flashdata('category_created') . '</div>'; ?>
      <?php endif;?>

      <?php if ($this->session->flashdata('post_deleted')): ?>
        <?php echo '<div class="alert alert-success">' . $this->session->flashdata('post_deleted') . '</div>'; ?>
      <?php endif;?>

      <?php if ($this->session->flashdata('login_failed')): ?>
        <?php echo '<div class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</div>'; ?>
      <?php endif;?>

      <?php if ($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<div class="alert alert-success">' . $this->session->flashdata('user_loggedin') . '</div>'; ?>
      <?php endif;?>

       <?php if ($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<div class="alert alert-success">' . $this->session->flashdata('user_loggedout') . '</div>'; ?>
      <?php endif;?>

      <?php if ($this->session->flashdata('category_deleted')): ?>
        <?php echo '<div class="alert alert-success">' . $this->session->flashdata('category_deleted') . '</div>'; ?>
      <?php endif;?>

    </div>
    </body>
</html>
