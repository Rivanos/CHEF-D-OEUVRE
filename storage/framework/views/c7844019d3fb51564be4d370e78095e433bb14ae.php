<?php echo $__env->make('admin/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
  <h1>Modifier un articles</h1>
  <?php if(Session::has('succes.update')): ?>
    <div class="alert alert-succes">
      <?php echo e(Session::get('succes.update')); ?>

    </div>
  <?php endif; ?>
  <a class="btn icon-btn btn-primary pull-right" href="<?php echo e(route('articles.index')); ?>"></span>Revenir aux articles</a>
  <?php echo e(Form::open(['files' => true, 'method' => 'put', 'url' => route('articles.update', $article)])); ?>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <?php echo e(Form::label('name', 'Nom :')); ?>

        <?php echo e(Form::text('name', $article->name, ['class' => 'form-control'])); ?>

      </div>
      <div class="form-group">
        <?php echo e(Form::label('content', 'Description :')); ?>

        <?php echo e(Form::textarea('content', $article->content, ['class' => 'form-control', 'size' => '10x2.5'])); ?>

      </div>
      <div class="form-group">
        <?php echo e(Form::label('under_content', 'Sous-description :')); ?>

        <?php echo e(Form::textarea('under_content', $article->under_content, ['class' => 'form-control', 'size' => '10x2.5'])); ?>

      </div>
      <div class="form-group">
        <?php echo e(Form::label('category', "Catégorie :")); ?>

        <?php echo e(Form::select('category', ["méditation" => "méditation", "oracle" => "oracle", "radiesthésie" => "radiesthésie", "bien-être" =>"bien-être", "lithothérapie" => "lithothérapie","thé" => "thé", "bijoux" => "bijoux"], $article->category, ['class' => 'form-control'])); ?>

      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <?php echo e(Form::label('price', 'Prix :')); ?>

          <?php echo e(Form::number('price', $article->price, ['class' => 'form-control'])); ?>

        </div>
        <div class="form-group col-md-6">
          <?php echo e(Form::label('heart_attack', 'Coup de coeur :')); ?>

          <?php echo e(Form::select('heart_attack', ["non", "oui"], $article->heart_attack, ['class' => 'form-control'])); ?>

        </div>
        <div class="form-group col-md-6">
          <?php echo e(Form::label('most_sell', 'Les plus vendus:')); ?>

          <?php echo e(Form::select('most_sell', ["non", "oui"] , $article->most_sell, ['class' => 'form-control'])); ?>

        </div>
        <div class="form-group col-md-6">
          <?php echo e(Form::label('show_index', 'Affichez sur la Home :')); ?>

          <?php echo e(Form::select('show_index', ["non", "oui"], $article->show_index, ['class' => 'form-control'])); ?>

        </div>
      </div>
      <?php echo e(Form::button('Modifier', ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

      <?php echo e(Form::close()); ?>

    </div>
    <div class="col-md-6">
      <?php echo $__env->make('admin/view/image', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </div>
</div>
<?php echo $__env->make('admin/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
