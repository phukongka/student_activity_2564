<?php 
// session_start();
// include "includes/config.inc.php";
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM general_user WHERE user_id = '$user_id'";
$qu = $conn->query($sql);
$row = $qu->fetch_array();
$title =$row['title'];
$user_name =$row['user_name'];
$user_lastname = $row['user_lastname'];
?>
<script src="includes/sweetalert2.all.min.js"></script>
  <nav class="navbar top-navbar bg-white box-shadow">
            	<div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                			<a class="navbar-brand" href="dashboard.php">
                			    Activity | User
                			</a>
                            <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                				<span class="sr-only">Toggle navigation</span>
                				<i class="fa fa-ellipsis-v"></i>
                			</button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                				<i class="fa fa-bars"></i>
                			</button>
                		</div>
                        <!-- /.navbar-header -->

                		<div class="collapse navbar-collapse" id="navbar-collapse-1">
                			<ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
								<li class="hidden-sm hidden-xs dropdown">
									<a href="#" class="user-info-handle dropdown-toggle" id="AdminChange" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"> </i><span class="caret"></span></a>
									<div class="dropdown-menu" aria-labelledby="AdminChange">
										<a href="change_profile_user.php" class="dropdown-item btn"><i class="fa fa fa-users"></i> <span> User Change Profile</span></a>
										<a href="change-password-user.php" class="dropdown-item btn"><i class="fa fa fa-server"></i> <span> User Change Password</span></a>
									</div>
								</li>
                                <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>

                				<li class="hidden-xs hidden-xs"><a href="#"><?php echo $title." ".$user_name." ".$user_lastname;?></a></li>
                               
                			</ul>
                            <!-- /.nav navbar-nav -->

                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                             
                				
                				    <li>
										<a onclick="LogoutConfirm()" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a>
										<script>
											function LogoutConfirm(){
												Swal.fire({
													icon: 'warning',
													title: 'Log out',
													text: 'Are you sure you want to logout?',
													showConfirmButton: true,
													showCancelButton: true,
													confirmButtonText: 'Log out'
												}).then((result) => {
													if (result.isConfirmed) {
														window.open("logout.php","_self");
													}
												})
											}
										</script>
									</li>
                					
                		
                            
                			</ul>
                            <!-- /.nav navbar-nav navbar-right -->
                		</div>
                		<!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
            	</div>
            	<!-- /.container-fluid -->
            </nav>
