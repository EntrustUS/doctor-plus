<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('layout.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <?php if(Route::is(['map-grid'])): ?>
  <body class="map-page">
  <?php endif; ?>
<?php echo $__env->make('layout.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php if(!Route::is(['chat-doctor','map-grid','map-list','chat','voice-call','video-call'])): ?>
<?php echo $__env->make('layout.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php echo $__env->make('layout.partials.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<script>
$(document).ready(function(){
  // alert(1);
 /*$('.submenu li a').click(function(){
   $(.submenu li a).removeClass("active");
   $(this).addClass("active");
   $('.has-submenu a').removeClass("active");
   $('.has-submenu a').addClass("active");
   
   //$(this).toggleClass("active");
 });*/
});
</script><?php /**PATH D:\laragon\www\doctor-plus\resources\views/layout/mainlayout.blade.php ENDPATH**/ ?>