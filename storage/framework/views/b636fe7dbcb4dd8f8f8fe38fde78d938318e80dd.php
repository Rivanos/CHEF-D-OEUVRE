
<div class="container">
  <div class="row">
    <?php if(sizeof($articles_hearts) == 3): ?>
      <div class="col-md-1 col-md-1-5 invisible"></div>
      <?php $__currentLoopData = $articles_hearts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles_heart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
          <div class="content_aricle">
            <?php echo $__env->make('client/design/design_coup_de_coeur', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="name">
              <?php echo e($articles_heart->name); ?>

            </div>
            <div data-modal="#modal1" class="thumbnail">
              <img src="<?php echo e(URL::asset($articles_heart->path_img)); ?>" alt="">
            </div>
            <div class="row">
              <div class="col-md-3 text-center">
                <?php echo e($articles_heart->price); ?>€
              </div>
              <div class="col-md-9">
                <?php echo e($articles_heart->content); ?>

              </div>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php elseif(sizeof($articles_hearts) == 4): ?>
      <?php $__currentLoopData = $articles_hearts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles_heart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
          <div class="content_aricle">
            <?php echo $__env->make('client/design/design_coup_de_coeur', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="name">
              <?php echo e($articles_heart->name); ?>

            </div>
            <div data-modal="#modal1" class="thumbnail">
              <img src="<?php echo e(URL::asset($articles_heart->path_img)); ?>" alt="">
            </div>
            <div class="row">
              <div class="col-md-3 text-center">
                <?php echo e($articles_heart->price); ?>€
              </div>
              <div class="col-md-9">
                <?php echo e($articles_heart->content); ?>

              </div>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php elseif(sizeof($articles_hearts) == 5): ?>
      <div class="col-md-1 invisible"></div>
      <?php $__currentLoopData = $articles_hearts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles_heart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-2">
          <div class="content_aricle">
            <?php echo $__env->make('client/design/design_coup_de_coeur', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="name">
              <?php echo e($articles_heart->name); ?>

            </div>
            <div data-modal="#modal1" class="thumbnail">
              <img src="<?php echo e(URL::asset($articles_heart->path_img)); ?>" alt="">
            </div>
            <div class="row">
              <div class="col-md-3 text-center">
                <?php echo e($articles_heart->price); ?>€
              </div>
              <div class="col-md-9">
                <?php echo e($articles_heart->content); ?>

              </div>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-1 invisible"></div>
    <?php endif; ?>
  </div>
</div>
