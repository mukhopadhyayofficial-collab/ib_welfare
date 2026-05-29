<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login | Police Personnel Health Portal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="bg-animated">
			<div class="blob one"></div><div class="blob two"></div><div class="blob three"></div>
		</div>
		<div class="container">
			<div class="card card-glass login-card">
				<div class="card-body p-5">
					<!-- Flash messages — controller uses setFlashdata() so getFlashdata() is correct -->
					<?php $session = session(); ?>
					<?php if ($session->getFlashdata('successMsg')): ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Success!</strong> <?= esc($session->getFlashdata('successMsg')) ?>
						<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
						</div>
					<?php endif; ?>
					<?php if ($session->getFlashdata('errorMsg')): ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Error!</strong> <?= esc($session->getFlashdata('errorMsg')) ?>
						<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
						</div>
					<?php endif; ?>
					<div class="text-center mb-4">
						<div class="brand-icon mx-auto mb-3">
							<i class="bi bi-heart-pulse fs-4"></i>
						</div>
						<h3 class="gradient-title">Police Personnel Health Portal</h3>
					</div>
					<form name="signIn-Frm" id="signIn-Frm" action="valid-user-check" method="POST">
					<?= csrf_field() ?>
						<div class="mb-3">
							<label class="form-label">Username / Employee ID</label>
							<input type="text" class="form-control" name="employee_id" id="employee_id" placeholder="Enter username or employee ID" required />
						</div>
						<div class="mb-3">
							<label class="form-label">Password</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" required />
						</div>
						<button class="btn quick-btn bg-purple w-100" type="button" id="login-btn">Login</button>
					</form>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#login-btn').click(function(){
					var employee_id = $('#employee_id').val();
					var password = $('#password').val();
					if(employee_id == ''){
						toastr.error('Please enter employee ID');
						return false;
					}
					if(password == ''){
						toastr.error('Please enter password');
						return false;
					}
					$('#signIn-Frm').submit();
				});
			});
		</script>
	</body>
</html>