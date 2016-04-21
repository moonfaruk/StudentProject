<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Department</title>
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
</head>
<body>

	<br><br><br>
<?php echo validation_errors(); ?>
	<div class="container">
		<a href="<?php echo base_url();?>index.php/departments/add" class="pull-right btn btn-primary ">Add New Department</a>
		<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th>SL No</th>
					<th>Department Code</th>
					<th>Department Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php $serial_no=1; foreach($department_info as $value) {?>
				<tr>
					<td><?php echo $serial_no; ?></td>
					<td><?php echo $value->department_code;?></td>
					<td><?php echo $value->department_name;?></td>
                                        <td>
                                            
                                            <a href="<?php echo base_url();?>index.php/departments/edit/<?php echo $value->id;?>">Edit</a> |
                                            <a href="<?php echo base_url();?>index.php/departments/delete_department/<?php echo $value->id;?>">Delete</a>
                                        </td>
					
				</tr>
				<?php $serial_no++ ;}?>
			</tbody>
		</table>
	</div>
	
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>