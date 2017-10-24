  <title>Zen@home - <?php echo e($category); ?></title>
</head>
<body>
    <h2><?php echo e($category); ?></h2>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <h1><?php echo e($article->name); ?></h1>
      <p><?php echo e($article->content); ?></p>
      <h5><?php echo e($article->price); ?>€</h5>
      <p><?php echo e($article->path_img); ?></p>
      <p><a href="<?php echo e(route('administration.{category}.edit', $article)); ?>" class="btn btn-primary">Éditer</a>

      </button></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>

<?php echo $__env->make('../header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>