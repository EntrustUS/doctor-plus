<?php $page="voice-call";?>

<?php $__env->startSection('content'); ?>
	<!-- Page Content -->
    <div class="content">
				<div class="container">
				
					<!-- Call Wrapper -->
					<div class="call-wrapper">
						<div class="call-main-row">
							<div class="call-main-wrapper">
								<div class="call-view">
									<div class="call-window">
									
										<!-- Call Header -->
										<div class="fixed-header">
											<div class="navbar">
												<div class="user-details mr-auto">
													<div class="float-left user-img">
														<a class="avatar avatar-sm mr-2" href="patient-profile" title="Charlene Reed">
															<img src="assets/img/patients/patient1.jpg" alt="User Image" class="rounded-circle">
															<span class="status online"></span>
														</a>
													</div>
													<div class="user-info float-left">
														<a href="patient-profile"><span>Charlene Reed</span></a>
														<span class="last-seen">Online</span>
													</div>
												</div>
												<ul class="nav float-right custom-menu">
													<li class="nav-item dropdown dropdown-action">
														<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="javascript:void(0)" class="dropdown-item">Settings</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Call Header -->
										
										<!-- Call Contents -->
										<div class="call-contents">
											<div class="call-content-wrap">
												<div class="voice-call-avatar">
													<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image" class="call-avatar">
													<span class="username">Dr. Darren Elder</span>
													<span class="call-timing-count">00:59</span>
												</div>
												<div class="call-users">
													<ul>
														<li>
															<a href="#">
																<img src="assets/img/patients/patient1.jpg" class="img-fluid" alt="User Image">
																<span class="call-mute"><i class="fa fa-microphone-slash"></i></span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!-- /Call Contents -->
										
										<!-- Call Footer -->
										<div class="call-footer">
											<div class="call-icons">
												<ul class="call-items">
													<li class="call-item">
														<a href="#" title="Enable Video" data-placement="top" data-toggle="tooltip">
															<i class="fas fa-video camera"></i>
														</a>
													</li>
													<li class="call-item">
														<a href="#" title="Mute" data-placement="top" data-toggle="tooltip">
															<i class="fa fa-microphone microphone"></i>
														</a>
													</li>
													<li class="call-item">
														<a href="#" title="Add User" data-placement="top" data-toggle="tooltip">
															<i class="fa fa-user-plus"></i>
														</a>
													</li>
												</ul>
												<div class="end-call">
													<a href="javascript:void(0);">
														<i class="material-icons">call_end</i>
													</a>
												</div>
											</div>
										</div>
										<!-- /Call Footer -->
									
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<!-- /Call Wrapper -->
					
				</div>

			</div>		
			<!-- /Page Content -->
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\doctor-plus\resources\views/voice-call.blade.php ENDPATH**/ ?>