<?php echo $__env->make('admin/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
  <h1>Ajouter un article</h1>
  <?php if(Session::has('succes')): ?>
    <div class="alert alert-succes">
      <?php echo e(Session::get('succes')); ?>

    </div>
  <?php endif; ?>
  <?php echo e(Form::open(['url' => route('articles.store')])); ?>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <?php echo e(Form::label('name', 'Nom :')); ?>

        <?php echo e(Form::text('name', null, ['class' => 'form-control'])); ?>

      </div>
      <div class="form-group">
        <?php echo e(Form::label('content', 'Description :')); ?>

        <?php echo e(Form::textarea('content', null, ['class' => 'form-control', 'size' => '10x2.5'])); ?>

      </div>
      <div class="form-group">
        <?php echo e(Form::label('under_content', 'Sous-description :')); ?>

        <?php echo e(Form::textarea('under_content', null, ['class' => 'form-control', 'size' => '10x2.5'])); ?>

      </div>
      <div class="form-group">
        <?php echo e(Form::label('category', "Catégorie :")); ?>

        <?php echo e(Form::select('category', ["méditation", "oracle", "radiesthésie", "bien-être", "lithothérapie","thé", "bijoux"],0, ['class' => 'form-control'])); ?>

      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <?php echo e(Form::label('price', 'Prix :')); ?>

          <?php echo e(Form::number('price', null, ['class' => 'form-control'])); ?>

        </div>
        <div class="form-group col-md-6">
          <?php echo e(Form::label('heart_attack', 'Coup de coeur :')); ?>

          <?php echo e(Form::select('heart_attack', ["non", "oui"], 0, ['class' => 'form-control'])); ?>

        </div>
        <div class="form-group col-md-6">
          <?php echo e(Form::label('most_sell', 'Les plus vendus:')); ?>

          <?php echo e(Form::select('most_sell', ["non", "oui"] ,0, ['class' => 'form-control'])); ?>

        </div>
        <div class="form-group col-md-6">
          <?php echo e(Form::label('show_index', 'Affichez sur la Home :')); ?>

          <?php echo e(Form::select('show_index', ["non", "oui"], 0, ['class' => 'form-control'])); ?>

        </div>
      </div>
      <?php echo e(Form::button('Ajouter', ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

      <?php echo e(Form::close()); ?>

    </div>
  </div>
</div>
<?php echo $__env->make('admin/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
