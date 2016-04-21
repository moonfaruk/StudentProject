<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Department</title>
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php echo validation_errors(); ?>
            <?php echo form_open('', array('class' => 'form-horizontal'));?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<h2 class="control-label col-md-7" >Add Department Form</h2>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-8">
					
					<div class="form-group">
						<!--<label class="control-label col-md-6">Code</label>-->
                                                <?php
                                                    
                                                
                                                echo form_label('Department Code', 'department_code', array('class' => 'control-label col-md-6'));?>
						<div class="col-md-6">
                                                    <input type="text" class="form-control" name="department_code" value="<?php echo $department_code;?>" />
                                                        <?php
//                                                        $form_input = array(
//                                                            'name' => 'department_code',
//                                                            'value' => $department_code,
//                                                            'type' => 'text', 
//                                                            'class' => 'form-control',
//                                                            
//                                                            'placeholder' => 'Code here'
//                                                            );
//                                                        echo form_input($form_input);
//                                                        echo form_error('department_code');
//                                                        ?>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-6">Name</label>
						<div class="col-md-6">
                                                    <!--<input type="text" class="form-control" name="department_name" required=""/>-->
                                                    <?php
                                                        $form_input = array(
                                                            'name' => 'department_name',
                                                            'value' => $department_name,
                                                            'type' => 'text', 
                                                            'class' => 'form-control',
                                                            
                                                            'placeholder' => 'Name here'
                                                            );
                                                        echo form_input($form_input);
                                                        ?>
						</div>
					</div>
					<div class="form-group">
					
						<div class="col-md-offset-6 col-md-6">
							<!--<input type="submit" name="btn" value="Save" class="btn btn-primary" />-->
                                                        <?php 
                                                            $form_submit=array(
                                                                'name' => 'btn',
                                                                'class' => 'btn btn-primary',
                                                                'value' => $value
                                                            );
                                                        echo form_submit($form_submit);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!--</form>-->
        <?php echo form_close();?>
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>