<?php echo $__env->make('admin/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
  <h1>Modifier une date Zen@home</h1>
  <?php if(Session::has('succes.update')): ?>
    <div class="alert alert-succes">
      <?php echo e(Session::get('succes.update')); ?>

    </div>
  <?php endif; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php echo e(Form::open(['url' => route('date.store')])); ?>

        <div class="form-group">
          <?php echo e(Form::label('nom_jour', 'Nom du jour :')); ?>

          <?php echo e(Form::select('nom_jour', ["Lundi" => "Lundi", "Mardi" =>"Mardi", "Mercredi" => "Mercredi", "Jeudi" => "Jeudi", "Vendredi" => "Vendredi", "Samedi" => "Samedi", "Dimanche" => "Dimanche"], $dates->nom_jour, ['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
          <?php echo e(Form::label('nb_jour', 'Numéro du jour :')); ?>

          <?php echo e(Form::select('nb_jour', ["1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10", "11" => "11", "12" => "12", "13" => "13", "14" => "14", "15" => "15", "16" => "16", "17" => "17", "18" => "18", "19" => "19", "20" => "20", "21" => "21", "22" => "22", "23" => "23", "24" => "24", "25" => "25", "26" => "26", "27" => "27", "28" => "28", "29" => "29", "30" => "30", "31" => "31"], $dates->nb_jour, ['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
          <?php echo e(Form::label('mois', 'Mois :')); ?>

          <?php echo e(Form::select('mois', ["Janvier" => "Janvier", "Février" =>"Février", "Mars" => "Mars", "Avril" => "Avril", "Mai" => "Mai", "Juin" => "Juin", "Juillet" => "Juillet", "Aout" => "Aout", "Septembre" => "Septembre", "Octobre" => "Octobre", "Novembre" => "Novembre", "Décembre" => "Décembre"], $dates->mois, ['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
          <?php echo e(Form::label('year', 'Année :')); ?>

          <?php echo e(Form::select('year', ["2017" => "2017", "2018" =>"2018", "2019" => "2019", "2020" => "2020", "2021" => "2021"], $dates->year, ['class' => 'form-control'])); ?>

        </div>
        <?php echo e(Form::hidden('date','test')); ?>

        <?php echo e(Form::button('Modifier', ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

        <?php echo e(Form::close()); ?>

      </div>
      <div class="col-md-6 date">
        <a class="btn icon-btn btn-primary pull-right" href="<?php echo e(route('date.index')); ?>"></span>Revenir aux dates</a>
        <?php echo e($dates->nom_jour." ".$dates->nb_jour." ".$dates->mois." ".$dates->year); ?>

      </div>
    </div>
  </div>
</div>
</div>

<?php echo $__env->make('admin/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
