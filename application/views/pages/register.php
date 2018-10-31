<!-- <?php echo validation_errors(); ?> -->

<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?=$title;?></h1>
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Name">
				<?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Zipcode</label>
				<input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
				<?php echo form_error('zipcode', '<div class="text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
				<?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
				<?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
				<?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
				<?php echo form_error('password2', '<div class="text-danger">', '</div>'); ?>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>
<?php echo form_close(); ?>
