@include('admin/header');

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      @if (Session::has('succes.update'))
        <div class="alert alert-succes">
          {{ Session::get('succes.update') }}
        </div>
      @endif
      <h1>Les dates Zen@home<a class="btn icon-btn btn-primary pull-right" href="{{ route('date.create')}}"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle"></span>Ajouter une nouvelle date</a></h1>
      @foreach ($dates as $date)
        <div class="col-md-6 date">
          <form action="{{ route('date.destroy', $date)}}" method="POST" >
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div class="form-group vers-le-haut">
              <button class="no-btn pull-right" type="submit" name="button" value="">
                <i class="fa fa-trash trash pull-right text-primary" aria-hidden="true"></i>
              </button>
            </div>
          </form>
          <a href="{{ route('date.edit', $date)}}" class="dates">
            {{ $date->nom_jour." ".$date->nb_jour." ".$date->mois." ".$date->year }}
          </a>
        </div>
      @endforeach
    </div>
  </div>
</div>

@include('admin/footer');
