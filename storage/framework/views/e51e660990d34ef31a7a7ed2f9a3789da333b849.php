<?php echo $__env->make('template.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="content">
  <div class="title m-b-md">
      Séléction des boissons !
  </div>
</div>

<div class="titreBoisson">

</div>
<div class = "container">
<div class="tableauBoisson ">
  <table class = "table table-hover">
    <thead>
      <tr>
        <?php $__currentLoopData = $drinkChoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeboisson=>$prix): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <td> <?php echo e($typeboisson); ?> </td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tr>
    </thead>
    <tbody>
     <tr>
        <?php $__currentLoopData = $drinkChoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeboisson=>$prix): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <td> <?php echo e($prix); ?> </td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tr>
    </tbody>
  </table>
</div>

  <div class="choixBoisson">
    <h1>Faites votre choix !</h1>
    <form method="post">
      <select name="choixBoisson">
        <option>Choissisez votre boisson</option>
        <option>Café au lait</option>
        <option>Thé</option>
        <option>Expresso</option>
        <option>Café long</option>
      </select>
      <select name="choixSucre" placeholder="Combien de sucres ?"/>
        <option>Combien de sucres?</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      <input type="submit" value="Valider"/>
    </form>
  </div>

</div>

<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>