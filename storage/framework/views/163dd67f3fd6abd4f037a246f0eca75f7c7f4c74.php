<?php $__env->startSection('titre'); ?>
  La pause s'impose !
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <a  href="machineACafe"><img class="imageCafe" alt="image tasse a café"  src="../img/imgcafe.jpg" /></a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>