<div class="container">
  <div class="row">
    <?php if(sizeof($articles_sells) == 3): ?>
      <div class="col-md-1 col-md-1-5 invisible"></div>
      <?php $__currentLoopData = $articles_sells; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article_sell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
          <div class="content_aricle">
            <?php echo $__env->make('client/design/design_most_sells', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="name">
              <?php echo e($article_sell->name); ?>

            </div>
            <div data-modal="#modal1" class="thumbnail">
              <img src="<?php echo e(URL::asset($article_sell->path_img)); ?>" alt="">
            </div>
            <div class="row">
              <div class="col-md-3 text-center">
                <?php echo e($article_sell->price); ?>€
              </div>
              <div class="col-md-9">
                <?php echo e($article_sell->content); ?>

              </div>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php elseif(sizeof($articles_sells) == 4): ?>
      <?php $__currentLoopData = $articles_sells; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article_sell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
          <div class="content_aricle">
            <?php echo $__env->make('client/design/design_most_sells', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="name">
              <?php echo e($article_sell->name); ?>

            </div>
            <div data-modal="#modal1" class="thumbnail">
              <img src="<?php echo e(URL::asset($article_sell->path_img)); ?>" alt="">
            </div>
            <div class="row">
              <div class="col-md-3 text-center">
                <?php echo e($article_sell->price); ?>€
              </div>
              <div class="col-md-9">
                <?php echo e($article_sell->content); ?>

              </div>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php elseif(sizeof($articles_sells) == 5): ?>
      <div class="col-md-1 invisible"></div>
      <?php $__currentLoopData = $articles_sells; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article_sell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-2">
          <div class="content_aricle">
            <?php echo $__env->make('client/design/design_most_sells', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="name">
              <?php echo e($article_sell->name); ?>

            </div>
            <div data-modal="#modal1" class="thumbnail">
              <img src="<?php echo e(URL::asset($article_sell->path_img)); ?>" alt="">
            </div>
            <div class="row">
              <div class="col-md-3 text-center">
                <?php echo e($article_sell->price); ?>€
              </div>
              <div class="col-md-9">
                <?php echo e($article_sell->content); ?>

              </div>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
  </div>
</div>
