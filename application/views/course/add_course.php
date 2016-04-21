<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Course</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    </head>
    <body>

        <?php echo form_open('', array('class' => 'form-horizontal'));?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<h2 class="control-label col-md-7" >Add Course Form</h2>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<label class="control-label col-md-6">Code</label>
						<div class="col-md-6">
                                                    <input type="text" class="form-control" name="course_code" value="<?php echo $course_code;?>" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-6">Name</label>
						<div class="col-md-6">
                                                    <input type="text" class="form-control" name="course_name" value="<?php echo $course_name;?>"/>
						</div>
					</div>
					<div class="form-group">
					
						<div class="col-md-offset-6 col-md-6">
                                                    <input type="submit" name="btn" value="<?php echo $value;?>" class="btn btn-primary" />
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php echo form_close();?>
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>