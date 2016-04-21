<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Student</title>
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
</head>
<body>

	<br><br><br>

	<div class="container">
		<a href="<?php echo base_url();?>index.php/courses/add" class="pull-right btn btn-primary ">Add New Course</a>
		<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th>SL No</th>
					<th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Action</th>
				</tr>
			</thead>
                        <tbody>
                            <?php $serialNo = 1; foreach ($course_info AS $value) {?>
                            <tr>
                                <td><?php echo $serialNo;?></td>
                                <td><?php echo $value->course_code;?></td>
                                <td><?php echo $value->course_name;?></td>
                                <td>
                                    
                                    <a href="<?php echo base_url();?>index.php/courses/edit/<?php echo $value->id;?>">Edit</a> |
                                    <a href="<?php echo base_url();?>index.php/courses/delete/<?php echo $value->id;?>">Delete</a>
                                </td>
                            </tr>
                            <?php $serialNo++;}?>
                        </tbody>
		</table>
	</div>
	
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>