<?php $__env->startSection('titre'); ?>
  La liste des recettes !
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class = "container">
	<div class="tableauRecette ">
		<table class = "table table-hover">	
			<tr>
				<td><b>NomBoisson</b></td> 
				<td><b>Ingrédients</b></td>
				<td><b>Quantités</b></td>
				<td><b>Ingrédients</b></td>
				<td><b>Quantités</b></td>
				<td><b>Ingrédients</b></td>
				<td><b>Quantités</b></td>
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
	<button type="button" class='btn btn-success'>Ajouter</button>
	<button type="button" class='btn btn-default'>Modifier</button>
	<button type="button" class='btn btn-danger'>Supprimer</button>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>