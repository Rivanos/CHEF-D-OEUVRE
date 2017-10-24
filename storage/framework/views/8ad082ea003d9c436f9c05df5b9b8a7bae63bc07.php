<?php echo $__env->make('admin/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container" id="tourpackages-carousel">
  <div class="row">
    <div class="col-lg-12">
      <?php if(Session::has('succes.destroy')): ?>
        <div class="alert alert-succes">
          <?php echo e(Session::get('succes.destroy')); ?>

        </div>
      <?php endif; ?>
      <h1>Mes articles<a class="btn icon-btn btn-primary pull-right" href="./articles/create"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle"></span>Ajouter un nouvel article</a></h1></div>
      <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="thumbnail">
            <div class="caption">
              <div class='col-lg-12'>
                <form action="<?php echo e(route('articles.destroy', $article)); ?>" method="POST" >
                  <?php echo e(csrf_field()); ?>

                  <?php echo e(method_field('DELETE')); ?>

                  <div class="form-group vers-le-haut">
                    <button class="no-btn pull-right" type="submit" name="button" value="">
                      <i class="fa fa-trash pull-right text-primary" aria-hidden="true"></i>
                    </button>
                  </div>
                </form>
              </div>
              <div class='col-lg-12 well well-add-card'>
                <img src="<?php echo e(URL::asset($article->path_img)); ?>" class="img-repsonsive col-md-5"alt="">
                <h4><?php echo e($article->name); ?></h4>
              </div>
              <div class='col-lg-12'>
                <p><?php echo e($article->content); ?></p>
                <p class"text-muted"><?php echo e($article->under_content); ?></p>
                <p class"text-muted"><?php echo e($article->category); ?></p>
                <p class"text-muted"><?php echo e($article->price); ?>€</p>
                <?php if($article->heart_attack == 1): ?>
                  <?php echo $__env->make('client/design/design_coup_de_coeur', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endif; ?>
                <?php if($article->most_sell == 1): ?>
                  <?php echo $__env->make('client/design/design_most_sells', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endif; ?>
              </div>
              <a class="btn btn-primary btn-xs btn-update btn-add-card" href="<?php echo e(route('articles.edit', $article)); ?>">Modifier</a>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-12"><a href="#">Voir les articles supprimés</a></div>
    </div><!-- End row -->
  </div><!-- End container -->
  <?php echo $__env->make('admin/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
