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
								<a id="#button_logout" data-toggle="modal" data-target="#myModal" onclick="logout_response()">
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
	</div>
	<script type="text/javascript">
		function logout_response()
		{
			window.location.href = '<?php echo base_url('Auth/logout')?>'; 
		}

	</script>
