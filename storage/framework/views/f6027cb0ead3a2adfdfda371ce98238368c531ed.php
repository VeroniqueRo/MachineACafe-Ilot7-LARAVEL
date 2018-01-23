<?php $__env->startSection('titre'); ?>
  La liste des recettes 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class = "container">
	<div class="tableauRecette ">
		<table class = "table table-hover">	
			<tr>
				<th><b>NomBoisson</b></th> 
				<th><b>Ingrédients</b></th>
				<th><b>Quantité</b></th>
				<th><b>Ingrédients</b></th>
				<th><b>Quantité</b></th>
				<th><b>Ingrédients</b></th>
				<th><b>Quantité</b></th>
			</tr>
		</tr>
					<?php $__currentLoopData = $recette; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nomboisson=>$rec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<td><?php echo e($nomboisson); ?></td>

					<?php $__currentLoopData = $rec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingredient=>$quantite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					<td><?php echo e($ingredient); ?></td>
					<td>  <?php echo e($quantite); ?></td>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	</div> 
	<?php echo $__env->make("template.boutonAddRemoveModif", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
<?php $__env->stopSection(); ?>






<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>