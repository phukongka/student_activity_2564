<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark">
		<div class="container">
			<a href="#" class="navbar-brand" style="font-size: 28px;"><strong>ระบบกิจกรรมนักเรียน นักศึกษา</strong></a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapse1">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapse1">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<button class="btn btn-sm btn-warning" data-target="#mylogin" data-toggle="modal">เข้าสู่ระบบ</button>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="container">
		<div class="row">
			<div class="col-md-6" style="margin-top: 10px;">
				<center><p style="font-size: 55px;"><strong>ระบบกิจกรรม</strong>
						<strong><p style="font-size: 58px; margin-top: -20px;">นักเรียน นักศึกษา</p></strong>
						<strong><p style="font-size: 22px; margin-top: -20px;">Chaiyaphum Technical Colleges</p></strong>
						<img src="images/P1000504.JPG" class="rounded img-fluid">
				</center>
			</div>
			<div class="col-md-6" style="margin-top: 90px;">
				<div class="card">
					<div class="card-header">
						<strong>
							<p style="font-size: 40px;">สร้างบัญชีใหม่</p>
							<p style="font-size: 25px; margin-top: -20px;">ง่ายและเร็ว</p>
						</strong>
					</div>
					<div class="card-body">
						<form method="post">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
										<input class="form-control" type="text" name="user_name" placeholder="ชื่อ" required>
										<input class="form-control" type="text" name="user_lastname" placeholder="นามสกุล" required>
							</div><br>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
										<input class="form-control" pattern=".{6,}" type="password" name="user_pass" placeholder="รหัสผ่าน"required>
							</div><br>
							<div class="input-group border-5">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
									</div>
										<input class="form-control" type="text" name="user_email" placeholder="Email" required>
								</div><br>
								<div class="input-group border-5">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-globe"></i></span>
									</div>
										<select class="form-control" name="user_country">
											<option>Pakistan</option>
											<option>Thailand</option>
										</select>
								</div><br>
								<div class="input-group border-5">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
									</div>
										<select class="form-control" name="user_gender">
											<option>ชาย</option>
											<option>หญิง</option>
											<option>ไม่ระบุ</option>
										</select>
								</div><br>
								<button type="submit" name="reg" class="btn btn-info form-control">สมัคร</button>
								<?php include("user-signup.php"); ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

		<!-- modal login -->
		<div class="modal fade" id="mylogin">
			<div class="modal-dialog modal-sm modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">เข้าสู่ระบบ</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body">
							<form method="post">
								<div class="input-group">
									<div class="input-group-prepend">
								      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
								    </div>
									<input class="form-control" type="text" name="user_email" placeholder="Enter Email">
								</div><br>
								<div class="input-group">
									<div class="input-group-prepend">
								      <span class="input-group-text"><i class="fas fa-key"></i></span>
								    </div>
									<input class="form-control" type="password" name="user_pass" placeholder="Enter Password">
								</div>
						</div>
					<div class="modal-footer">
						<button type="submit" name="login" class="btn btn-block btn-info">Login</button>
						<!-- <button class="btn btn-danger" data-dismiss="modal">Close</button> -->
					</form>
					</div>
					<?php include("login.php"); ?>
				</div>
			</div>
		</div>
		
</body>
</html>