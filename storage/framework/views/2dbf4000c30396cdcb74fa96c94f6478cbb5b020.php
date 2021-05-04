<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <?php if(!Route::is(['appointment-list','specialities','doctor-list','patient-list','reviews','transactions-list','settings','invoice-report','profile','login','register','forgot-password','lock-screen','error-404','error-500','blank-page','components','form-basic','form-inputs','form-horizontal','form-vertical','form-mask','form-validation','tables-basic','data-tables','invoice','calendar'])): ?>
        <title>Doctor Plus - Dashboard</title>
        <?php endif; ?>
        <?php if(Route::is(['appointment-list'])): ?>
        <title>Doctor Plus - Appointment List Page</title>
        <?php endif; ?>
        <?php if(Route::is(['specialities'])): ?>
        <title>Doctor Plus - Specialities Page</title>
		<?php endif; ?>
        <?php if(Route::is(['doctor-list'])): ?>
        <title>Doctor Plus - Doctor List Page</title>
        <?php endif; ?>
        <?php if(Route::is(['patient-list'])): ?>
        <title>Doctor Plus - Patient List Page</title>
        <?php endif; ?>
        <?php if(Route::is(['reviews'])): ?>
        <title>Doctor Plus - Reviews Page</title>
        <?php endif; ?>
        <?php if(Route::is(['transactions-list'])): ?>
        <title>Doctor Plus - Transactions List Page</title>
        <?php endif; ?>
        <?php if(Route::is(['settings'])): ?>
        <title>Doctor Plus - Settings Page</title>
        <?php endif; ?>
        <?php if(Route::is(['invoice-report'])): ?>
        <title>Doctor Plus - Invoice Report Page</title>
        <?php endif; ?>
        <?php if(Route::is(['profile'])): ?>
        <title>Doctor Plus - Profile</title>
        <?php endif; ?>
        <?php if(Route::is(['login'])): ?>
        <title>Doctor Plus - Login</title>
		<?php endif; ?>
        <?php if(Route::is(['register'])): ?>
        <title>Doctor Plus - Register</title>
        <?php endif; ?>
        <?php if(Route::is(['forgot-password'])): ?>
        <title>Doctor Plus - Forgot Password</title>
        <?php endif; ?>
        <?php if(Route::is(['lock-screen'])): ?>
        <title>Doctor Plus - Lock Screen</title>
        <?php endif; ?>
        <?php if(Route::is(['error-404'])): ?>
        <title>Doctor Plus - Error 404</title>
		<?php endif; ?>
        <?php if(Route::is(['error-500'])): ?>
        <title>Doctor Plus - Error 500</title>
		<?php endif; ?>
        <?php if(Route::is(['blank-page'])): ?>
        <title>Doctor Plus - Blank Page</title>
        <?php endif; ?>
        <?php if(Route::is(['components'])): ?>
        <title>Doctor Plus - Components</title>
        <?php endif; ?>
        <?php if(Route::is(['form-basic'])): ?>
        <title>Doctor Plus - Basic Inputs</title>
        <?php endif; ?>
        <?php if(Route::is(['form-inputs'])): ?>
        <title>Doctor Plus - Form Input Groups</title>
        <?php endif; ?>
        <?php if(Route::is(['form-horizontal'])): ?>
        <title>Doctor Plus - Horizontal Form</title>
        <?php endif; ?>
        <?php if(Route::is(['form-vertical'])): ?>
        <title>Doctor Plus - Vertical Form</title>
        <?php endif; ?>
        <?php if(Route::is(['form-mask'])): ?>
        <title>Doctor Plus - Form Mask</title>
        <?php endif; ?>
        <?php if(Route::is(['form-validation'])): ?>
        <title>Doctor Plus - Form Validation</title>
        <?php endif; ?>
        <?php if(Route::is(['tables-basic'])): ?>
        <title>Doctor Plus - Tables Basic</title>
        <?php endif; ?>
        <?php if(Route::is(['data-tables'])): ?>
        <title>Doctor Plus - Data Tables</title>
        <?php endif; ?>
        <?php if(Route::is(['invoice'])): ?>
        <title>Doctor Plus - Invoice</title>
        <?php endif; ?>
        <?php if(Route::is(['calendar'])): ?>
        <title>Doctor Plus - Calendar</title>
        <?php endif; ?>
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets_admin/img/favicon.png')); ?>">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/bootstrap.min.css')); ?>">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/font-awesome.min.css')); ?>">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/feathericon.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/morris/morris.css')); ?>">
        <!-- Select2 CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/select2.min.css')); ?>">
        	<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/bootstrap-datetimepicker.min.css')); ?>">
		
		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/fullcalendar/fullcalendar.min.css')); ?>">
        <!-- Datatables CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/datatables/datatables.min.css')); ?>">
		
		<!-- <link rel="stylesheet" href="assets/plugins/morris/morris.css"> -->
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/style.css')); ?>"><?php /**PATH D:\laragon\www\doctor-1\resources\views/layout/partials/head_admin.blade.php ENDPATH**/ ?>