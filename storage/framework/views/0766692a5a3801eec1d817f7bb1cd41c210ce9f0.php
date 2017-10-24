<?php echo $__env->make('admin/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <?php if(Session::has('succes.update')): ?>
        <div class="alert alert-succes">
          <?php echo e(Session::get('succes.update')); ?>

        </div>
      <?php endif; ?>
      <h1>Les dates Zen@home<a class="btn icon-btn btn-primary pull-right" href="<?php echo e(route('date.create')); ?>"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle"></span>Ajouter une nouvelle date</a></h1>
      <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 date">
          <form action="<?php echo e(route('date.destroy', $date)); ?>" method="POST" >
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <div class="form-group vers-le-haut">
              <button class="no-btn pull-right" type="submit" name="button" value="">
                <i class="fa fa-trash trash pull-right text-primary" aria-hidden="true"></i>
              </button>
            </div>
          </form>
          <a href="<?php echo e(route('date.edit', $date)); ?>" class="dates">
            <?php echo e($date->nom_jour." ".$date->nb_jour." ".$date->mois." ".$date->year); ?>

          </a>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>

<?php echo $__env->make('admin/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
