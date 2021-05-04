<?php error_reporting(0);?>
<!-- Loader -->
<?php if(Route::is(['map-grid','map-list'])): ?>
<div id="loader">
		<div class="loader">
			<span></span>
			<span></span>
		</div>
	</div>
	<?php endif; ?>
	<!-- /Loader  -->
<div class="main-wrapper">
<!-- Header -->
<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index" class="navbar-brand logo">
							<img src="assets/img/logo.png" style="height:65px" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="<?php echo e(Request::is('index') ? 'active' : ''); ?>">
								<a href="index">Home</a>
							</li>
							<li class="has-submenu <?php if($page=="review" || $page=="register" || $page=="doctor-dashboard" || $page=="appointments" || $page=="schedule-timings" || $page=="my-patients" || $page=="patient-profile" || $page=="chat-doctor" || $page=="invoices" || $page=="doctor-profile-settings") { echo 'active'; } ?>">
								<a href="">Doctors <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="<?php if($page=="doctor-dashboard") { echo 'active'; } ?>"><a href="doctor-dashboard">Doctor Dashboard</a></li>
									<li class="<?php if($page=="appointments") { echo 'active'; } ?>"><a href="appointments">Appointments</a></li>
									<li class="<?php if($page=="schedule-timings") { echo 'active'; } ?>"><a href="schedule-timings">Schedule Timing</a></li>
									<li class="<?php if($page=="my-patients") { echo 'active'; } ?>"><a href="my-patients">Patients List</a></li>
									<li class="<?php if($page=="patient-profile") { echo 'active'; } ?>"><a href="patient-profile">Patients Profile</a></li>
									<li class="<?php if($page=="chat-doctor") { echo 'active'; } ?>"><a href="chat-doctor">Chat</a></li>
									<li class="<?php if($page=="invoices") { echo 'active'; } ?>"><a href="invoices">Invoices</a></li>
									<li class="<?php if($page=="doctor-profile-settings") { echo 'active'; } ?>"><a href="doctor-profile-settings">Profile Settings</a></li>
									<li class="<?php if($page=="review") { echo 'active'; } ?>"><a href="reviews">Reviews</a></li>
									<li class="<?php if($page=="register") { echo 'active'; } ?>"><a href="doctor-register">Doctor Register</a></li>
								</ul>
							</li>		
							<li class="has-submenu <?php if($page=="map-grid" || $page=="map-list" || $page=="search1" || $page=="doctor-profile" || $page=="booking" || $page=="checkout" || $page=="booking-success" || $page=="patient-dashboard" || $page=="favourites" || $page=="chat" || $page=="profile-settings" || $page=="change-password") { echo 'active'; } ?>">
								<a href="">Patients <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu <?php if($page=="map-grid" || $page=="map-list") { echo 'active'; } ?>">
										<a href="#">Doctors</a>
										<ul class="submenu">
											<li class="<?php if($page=="map-grid") { echo 'active'; } ?>"><a href="map-grid">Map Grid</a></li>
											<li class="<?php if($page=="map-list") { echo 'active'; } ?>"><a href="map-list">Map List</a></li>
										</ul>
									</li>
									<li class="<?php if($page=="search1") { echo 'active'; } ?>"><a href="search">Search Doctor</a></li>
									<li class="<?php if($page=="doctor-profile") { echo 'active'; } ?>"><a href="doctor-profile">Doctor Profile</a></li>
									<li class="<?php if($page=="booking") { echo 'active'; } ?>"><a href="booking">Booking</a></li>
									<li class="<?php if($page=="checkout") { echo 'active'; } ?>"><a href="checkout">Checkout</a></li>
									<li class="<?php if($page=="booking-success") { echo 'active'; } ?>"><a href="booking-success">Booking Success</a></li>
									<li class="<?php if($page=="patient-dashboard") { echo 'active'; } ?>"><a href="patient-dashboard">Patient Dashboard</a></li>
									<li class="<?php if($page=="favourites") { echo 'active'; } ?>"><a href="favourites">Favourites</a></li>
									<li class="<?php if($page=="chat") { echo 'active'; } ?>"><a href="chat">Chat</a></li>
									<li class="<?php if($page=="profile-settings") { echo 'active'; } ?>"><a href="profile-settings">Profile Settings</a></li>
									<li class="<?php if($page=="change-password") { echo 'active'; } ?>"><a href="change-password">Change Password</a></li>
								</ul>
							</li>












							<li class="has-submenu <?php if($page=="voice-call" || $page=="video-call" || $page=="search" || $page=="calendar" || $page=="components" || $page=="invoices1" || $page=="invoice-view" || $page=="blank-page" || $page=="login" || $page=="register1" || $page=="forgot-pswd") { echo 'active'; } ?>">
								<a href="">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="<?php if($page=="voice-call") { echo 'active'; } ?>"><a href="voice-call">Voice Call</a></li>
									<li class="<?php if($page=="video-call") { echo 'active'; } ?>"><a href="video-call">Video Call</a></li>
									<li class="<?php if($page=="search") { echo 'active'; } ?>"><a href="search">Search Doctors</a></li>
									<li class="<?php if($page=="calendar") { echo 'active'; } ?>"><a href="calendar">Calendar</a></li>
									<li class="<?php if($page=="components") { echo 'active'; } ?>"><a href="components">Components</a></li>
									<li class="has-submenu <?php if($page=="invoices1" || $page=="invoice-view") { echo 'active'; } ?>">
										<a href="invoices">Invoices</a>
										<ul class="submenu">
											<li class="<?php if($page=="invoices1") { echo 'active'; } ?>"><a href="invoices">Invoices</a></li>
											<li class="<?php if($page=="invoice-view") { echo 'active'; } ?>"><a href="invoice-view">Invoice View</a></li>
										</ul>
									</li>
									<li class="<?php if($page=="blank-page") { echo 'active'; } ?>"><a href="blank-page">Starter Page</a></li>
									<li class="<?php if($page=="login") { echo 'active'; } ?>"><a href="login">Login</a></li>
									<li class="<?php if($page=="register1") { echo 'active'; } ?>"><a href="register">Register</a></li>
									<li class="<?php if($page=="forgot-pswd") { echo 'active'; } ?>"><a href="forgot-password">Forgot Password</a></li>
								</ul>
							</li>
							<li class="has-submenu <?php if($page=="blog-list" || $page=="blog-grid" || $page=="blog-details") { echo 'active'; } ?>">
                            <a href="blog-grid">Blog <!--<i class="fas fa-chevron-down"></i>--></a>
                            <!--<ul class="submenu">
                                <li class="<?php if($page=="blog-list") { echo 'active'; } ?>"><a href="blog-list">Blog List</a></li>
                                <li class="<?php if($page=="blog-grid") { echo 'active'; } ?>"><a href="blog-grid">Blog Grid</a></li>
                                <li class="<?php if($page=="blog-details") { echo 'active'; } ?>"><a href="blog-details">Blog Details</a></li>
                            </ul>-->
                        </li>
						<!--<li>
								<a href="<?php echo e(route('pagee')); ?>" target="_blank">Admin</a>
							</li>-->
						</ul>		 
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +91 74xxx xxx209</p>
							</div>
							<?php if(Route::is(['page','blank-page','term-condition','privacy-policy','blog-details','blog-grid','blog-list','forgot-password','register','login','invoice-view','doctor-register','components','calendar','map-grid','map-list','search','doctor-profile','booking','checkout','booking-success'])): ?>
							<li class="nav-item">
							<a class="nav-link header-login" href="login">login / Signup </a>
							</li>
							<?php endif; ?>
						</li>
						<?php if(Route::is(['patient-dashboard','favourites','video-call','profile-settings','change-password','voice-call'])): ?>
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/patients/patient.jpg" width="31" alt="Shailesh Patel">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="assets/img/patients/patient.jpg" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>Richard Wilson</h6>
										<p class="text-muted mb-0">Patient</p>
									</div>
								</div>
								<a class="dropdown-item" href="patient-dashboard">Dashboard</a>
								<a class="dropdown-item" href="profile-settings">Profile Settings</a>
								<a class="dropdown-item" href="login">Logout</a>
							</div>
						</li>
						<?php endif; ?>
						<?php if(!Route::is(['page','blank-page','term-condition','privacy-policy','blog-details','blog-grid','blog-list','forgot-password','register','login','calendar','invoice-view','components','change-password','video-call','doctor-register','voice-call','favourites','map-grid','profile-settings','map-list','search','patient-dashboard','doctor-profile','booking','checkout','booking-success'])): ?>
						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" width="31" alt="Darren Elder">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>Darren Elder</h6>
										<p class="text-muted mb-0">Doctor</p>
									</div>
								</div>
								<a class="dropdown-item" href="doctor-dashboard">Dashboard</a>
								<a class="dropdown-item" href="doctor-profile-settings">Profile Settings</a>
								<a class="dropdown-item" href="login">Logout</a>
							</div>
						</li>
						<!-- /User Menu -->
						<?php endif; ?>
						
					</ul>
				</nav>
			</header>
			<!-- /Header --><?php /**PATH C:\laragon\www\doctor-plus\resources\views/layout/partials/header.blade.php ENDPATH**/ ?>