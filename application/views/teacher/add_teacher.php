<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Teacher</title>
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
</head>
<body>
	<form action="<?php echo base_url();?>index.php/teachers/add" method="post" role="form" class="form-horizontal"><br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<h2 class="control-label col-md-7" >Add Teacher Form</h2>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<label class="control-label col-md-6">Name</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="teacher_name" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-6">Email</label>
						<div class="col-md-6">
							<input type="email" class="form-control" name="teacher_email" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-6">Address</label>
						<div class="col-md-6">
							<textarea class="form-control" name="teacher_address" cols="4" rows="5"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-6">Phone Number</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="phone_number" />
						</div>
					</div>
					<div class="form-group">
					
						<div class="col-md-offset-6 col-md-6">
							<input type="submit" name="btn" value="Save" class="btn btn-primary" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>