<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <?php echo $__env->make('client/sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="col-md-9">
      <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 espacement">
          <div class="content_aricle">
            <?php if($article->heart_attack == 1): ?>
              <?php echo $__env->make('client/design/design_coup_de_coeur', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
            <?php if($article->most_sell == 1): ?>
              <?php echo $__env->make('client/design/design_most_sells', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
            <div class="name">
              <?php echo e($article->name); ?>

            </div>
            <div class="thumbnail">
              <img src="<?php echo e(URL::asset($article->path_img)); ?>" alt="">
            </div>
            <div class="row">

              <div class="col-md-9">
                <?php echo e($article->content); ?>

              </div>
            </div>
            <div class="row">
              <div class="intersection"></div>
              <div class="col-md-offset-6 col-md-3 text-center">
                <p class="prix" ><?php echo e($article->price); ?><span class="euro">€</span></p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php echo e($articles->links()); ?>

  </div>
</div>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
