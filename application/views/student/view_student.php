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
		<a href="<?php echo base_url();?>index.php/students/create" class="pull-right btn btn-primary ">Add New Student</a>
		<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th>SL No</th>
					<th>Student Name</th>
					<th>Email</th>
					<th>Student Address</th>
					<th>Phone Number</th>
                                        <th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($student_info as $value) {?>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->student_name;?></td>
					<td><?php echo $value->student_email;?></td>
					<td><?php echo $value->student_address;?></td>
					<td><?php echo $value->student_phone;?></td>
                                        <td>
                                            <a href="<?php echo base_url();?>index.php/students/update_student/<?php echo $value->id?>">Edit</a> |
                                            <a href="<?php echo base_url();?>index.php/students/delete/<?php echo $value->id;?>">Delete</a>
                                        </td>
				</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
	
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>