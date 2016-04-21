<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Department</title>
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
</head>
<body>
	<form action="<?php echo base_url();?>index.php/departments/update_data" method="post" role="form" class="form-horizontal"><br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<h2 class="control-label col-md-7" >Update Department Form</h2>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-8">
					
					<div class="form-group">
						<label class="control-label col-md-6">Code</label>
						<div class="col-md-6">
                                                    <input type="text" class="form-control" name="department_code" value="<?php echo $department_info->department_code;?>" />
                                                    <input type="hidden" class="form-control" name="department_id" value="<?php echo $department_info->id;?>" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-6">Name</label>
						<div class="col-md-6">
                                                    <input type="text" class="form-control" name="department_name" value="<?php echo $department_info->department_name;?>" />
						</div>
					</div>
					<div class="form-group">
					
						<div class="col-md-offset-6 col-md-6">
							<input type="submit" name="btn" value="Update" class="btn btn-primary" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>