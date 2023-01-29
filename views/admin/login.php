<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Portal Login</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/icofont/css/icofont.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css');?>">
</head>
<body>

<section class="login">

	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
				<?php echo form_open('admin/Login',['name'=>'adminsignup','class'=>'md-float-material']);?>
						<div class="text-center">
							<h3>Admin Portal</h3>
						</div>
						<!--error message -->
						<?php if($this->session->flashdata('error')){?>
                <p style="color:red"><?php  echo $this->session->flashdata('error');?></p>	
                <?php } ?>
						<div class="row">
							<div class="col-md-12">
								<div class="md-input-wrapper">
									<input type="email" name="email" id="email" class="md-form-control" required="required"/>
									<label>Email</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="md-input-wrapper">
									<input type="password" name="password" id="password" class="md-form-control" required="required"/>
									<label>Password</label>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-xs-15 offset-xs-5">
							
								<input type="submit" id="submit" name="submit" class="btn btn-primary" value="submit">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</html>
