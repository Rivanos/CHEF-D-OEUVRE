<div class="form-group">
    <?php echo e(Form::label('file', 'Séléctionner une image: ')); ?>

    <?php echo e(Form::file('file')); ?>

    <?php echo e(Form::hidden('path_img','test')); ?>

  </div>
  <div class="form-group">
    <img src="<?php echo e(URL::asset($article->path_img)); ?>" class="img-responsive col-md-12" alt="">
  </div>
