<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="intersection"></div>
      <div id="imaginary_container">
        <div class="input-group stylish-input-group input-append">
          <input id="recherche" type="text" class="recherche form-control" name="search_bar"  placeholder="Recherche ..."  />
          <button id="remove" class="remove-text btn" ><i class="fa fa-times" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="col-sm-8 col-sm-offset-2">
      <div id="result" class=" ">
        <?php if(isset($articles)): ?>
          <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($article->name); ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
