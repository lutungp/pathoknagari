<style media="screen">
	.alert{
		display: none;
	}
</style>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
	<div class="page-header navbar navbar-fixed-top">
		<!-- BEGIN HEADER INNER -->
		<div class="page-header-inner ">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="<?php echo base_url('admin')?>">
					<img src="<?php echo base_url('assets/metronic_v4.5.6/theme/assets/layouts/layout/img/logo.png')?>" alt="logo" class="logo-default" /> </a>
				<div class="menu-toggler sidebar-toggler">
					<span></span>
				</div>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
				<span></span>
			</a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<img alt="" class="img-circle"
							src="<?php echo base_url('assets/img/users/' . $user_data->user_img)?>" />
							<span class="username username-hide-on-mobile"> <?php echo $user_data->user_name; ?> </span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<!-- <li>
								<a href="page_user_profile_1.html">
									<i class="icon-user"></i> My Profile </a>
							</li> -->
							<!-- <li>
								<a href="app_calendar.html">
									<i class="icon-calendar"></i> My Calendar </a>
							</li> -->
							<!-- <li>
								<a href="app_inbox.html">
									<i class="icon-envelope-open"></i> My Inbox
									<span class="badge badge-danger"> 3 </span>
								</a>
							</li> -->
							<li class="divider"> </li>
							<!-- <li>
								<a href="page_user_lock_1.html">
									<i class="icon-lock"></i> Lock Screen </a>
							</li> -->
							<li>
								<a id="#button_logout" data-toggle="modal" data-target="#myModal">
									<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
					<!-- BEGIN QUICK SIDEBAR TOGGLER -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<!-- <li class="dropdown dropdown-quick-sidebar-toggler">
						<a href="javascript:;" class="dropdown-toggle">
							<i class="icon-logout"></i>
						</a>
					</li> -->
					<!-- END QUICK SIDEBAR TOGGLER -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END HEADER INNER -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                 <h4 class="modal-title">Modal title</h4>
	            </div>
							<form id="logout_form" class="" action="" method="post">
	            	<div class="modal-body">
									<div class="alert alert-danger">
	                  <strong>Info!</strong> Indicates a neutral informative change or action.
	                </div>
	                <div class="alert alert-info">
	                  <strong>Info!</strong> Indicates a neutral informative change or action.
	                </div>
									<div class="form-group">
										<label for="">User Name</label>
										<input type="text" id="username" name="username" value="" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Password</label>
										<input type="password" id="password" name="password" value="" class="form-control">
									</div>
								</div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                <button type="submit" class="btn btn-primary">Submit</button>
		            </div>
							</form>
		        </div>
		        <!-- /.modal-content -->
		    </div>
		    <!-- /.modal-dialog -->
		</div>
	</div>
	<script type="text/javascript">
		$("#logout_form").submit(function(e) {

				var url = '<?php echo site_url('auth/check_login')?>'; // the script where you handle the form input.

				$.ajax({
							 type: "POST",
							 url: url,
							 data: $("#logout_form").serialize(), // serializes the form's elements.
							 success: function(data)
							 {
									 logout_response(data)
							 },
							 error : function (data) {
							 		 alert("Error !!");
							 }
						 });

				e.preventDefault(); // avoid to execute the actual submit of the form.
		});

		function logout_response(data)
		{
			if (data == 1) {
				$(".alert-danger").fadeOut();
				setTimeout(function(){ $(".alert-info").fadeIn(); }, 800);
				setTimeout(function(){ window.location.href = '<?php echo base_url('Auth/logout')?>'; }, 1500);
			} else {
				$(".alert-danger").fadeIn();
				$('#username').val('');
				$('#password').val('');
			}
		}

	</script>
