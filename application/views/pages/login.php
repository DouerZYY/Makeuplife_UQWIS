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

<!-- <?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div id="messages"></div>
			<div class="form-group">
				<label for="username">Username</label>

			    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus>
			    <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
		    </div>
			<div class="form-group">
			<label for="password">Password</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required autofocus>
		    </div>
			<div class="form-group">
	            <label>
	                <?php echo form_checkbox('remember', '1', FALSE); ?> Remember me
	            </label>
        	</div>

			<button type="submit" class="btn btn-primary btn-block">Log in</button>
		</div>
	</div>
<?php echo form_close(); ?> -->

<!DOCTYPE html>
<html>
<head>
	<!-- <title>Register & Login Tutorial</title> -->

	<link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="custom/css/style.css">

</head>
<body>

<div class="col-md-4 col-md-offset-4 col-vertical-4">
	<div class="panel panel-default">
	  <div class="panel-heading"><?php echo $title; ?></div>
	  <div class="panel-body">
	  	<div id="messages"></div>
	    <form action="'users/login'" method="post" id="loginForm">
			  <div class="form-group">
			    <label for="username">Username</label>
			    <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
	  </div>
	  <!-- <div class="panel-footer">
	  	No Account!!! <a href="index.php/register">Sign Up</a>
	  </div> -->
	</div>
</div>

	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="custom/js/login.js"></script>


</body>
</html>