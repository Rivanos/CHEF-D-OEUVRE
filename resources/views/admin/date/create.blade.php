@include('admin/header')

<div class="container">
  <h1>Ajouter une date Zen@home</h1>
  @if (Session::has('succes.destroy'))
    <div class="alert alert-succes">
      {{ Session::get('succes.destroy') }}
    </div>
  @endif
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        {{ Form::open(['url' => route('date.store')]) }}
        <div class="form-group">
          {{ Form::label('nom_jour', 'Nom du jour :')}}
          {{ Form::select('nom_jour', ["Lundi" => "Lundi", "Mardi" =>"Mardi", "Mercredi" => "Mercredi", "Jeudi" => "Jeudi", "Vendredi" => "Vendredi", "Samedi" => "Samedi", "Dimanche" => "Dimanche"],0, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::label('nb_jour', 'Numéro du jour :')}}
          {{ Form::select('nb_jour', ["1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10", "11" => "11", "12" => "12", "13" => "13", "14" => "14", "15" => "15", "16" => "16", "17" => "17", "18" => "18", "19" => "19", "20" => "20", "21" => "21", "22" => "22", "23" => "23", "24" => "24", "25" => "25", "26" => "26", "27" => "27", "28" => "28", "29" => "29", "30" => "30", "31" => "31"],0, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::label('mois', 'Mois :')}}
          {{ Form::select('mois', ["Janvier" => "Janvier", "Février" =>"Février", "Mars" => "Mars", "Avril" => "Avril", "Mai" => "Mai", "Juin" => "Juin", "Juillet" => "Juillet", "Aout" => "Aout", "Septembre" => "Septembre", "Octobre" => "Octobre", "Novembre" => "Novembre", "Décembre" => "Décembre"],0, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::label('year', 'Année :')}}
          {{ Form::select('year', ["2017" => "2017", "2018" =>"2018", "2019" => "2019", "2020" => "2020", "2021" => "2021"],0, ['class' => 'form-control']) }}
        </div>
        {{ Form::hidden('date','test') }}
        {{ Form::button('Ajouter', ['type' => 'submit', 'class' => 'btn btn-primary'])}}
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>

@include('admin/footer')
