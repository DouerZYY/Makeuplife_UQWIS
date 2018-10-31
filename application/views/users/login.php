<html>

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


<body style="overflow-x: hidden">

<!-- <?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</div>
	</div>
<?php echo form_close(); ?> -->

<?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div id="messages"></div>
			<div class="form-group">
				<label for="username">Username</label>
				<div class="balnk10"></div>

			    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus>
			    <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
		    </div>
			<div class="form-group">
			<label for="password">Password</label>
			<div class="balnk10"></div>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required autofocus>
		    </div>
		    <div class="blank50"></div>
			<button type="submit" class="btn btn-primary btn-block">Log in</button>
		</div>
	</div>
<?php echo form_close(); ?>

	</div>
</div>

	<script type="text/javascript" src="<?php echo base_url() ?>assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>custom/js/login.js"></script>

<div class="blank50"></div>
</body>
</html>
