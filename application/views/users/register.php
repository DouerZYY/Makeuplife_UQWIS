<!-- <?php echo validation_errors(); ?> -->

<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?=$title;?></h1>
			<div class="form-group">
				<label>Name</label>
				<div class="balnk10"></div>
				<input type="text" class="form-control" name="name" placeholder="Name" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">
				<?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Zipcode</label>
				<div class="balnk10"></div>
				<input type="text" class="form-control" name="zipcode" placeholder="Zipcode" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">
				<?php echo form_error('zipcode', '<div class="text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Email</label>
				<div class="balnk10"></div>
				<input type="email" class="form-control" name="email" placeholder="Email" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">
				<?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Username</label>
				<div class="balnk10"></div>
				<input type="text" class="form-control" name="username" placeholder="Username" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">
				<?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Password</label>
				<div class="balnk10"></div>
				<input type="password" class="form-control" name="password" placeholder="Password" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">
				<?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<div class="balnk10"></div>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">
				<?php echo form_error('password2', '<div class="text-danger">', '</div>'); ?>
			</div>
			<div class="blank50"></div>
			<button type="submit" class="btn btn-primary btn-block" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">Submit</button>
		</div>
	</div>
<?php echo form_close(); ?>

<div class="blank50"></div>