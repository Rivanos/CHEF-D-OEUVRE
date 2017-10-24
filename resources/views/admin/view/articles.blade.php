@include('admin/header')
<div class="container" id="tourpackages-carousel">
  <div class="row">
    <div class="col-lg-12">
      @if (Session::has('succes.destroy'))
        <div class="alert alert-succes">
          {{ Session::get('succes.destroy') }}
        </div>
      @endif
      <h1>Mes articles<a class="btn icon-btn btn-primary pull-right" href="./articles/create"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle"></span>Ajouter un nouvel article</a></h1></div>
      @foreach ($articles as $article)
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="thumbnail">
            <div class="caption">
              <div class='col-lg-12'>
                <form action="{{ route('articles.destroy', $article)}}" method="POST" >
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <div class="form-group vers-le-haut">
                    <button class="no-btn pull-right" type="submit" name="button" value="">
                      <i class="fa fa-trash pull-right text-primary" aria-hidden="true"></i>
                    </button>
                  </div>
                </form>
              </div>
              <div class='col-lg-12 well well-add-card'>
                <img src="{{ URL::asset($article->path_img) }}" class="img-repsonsive col-md-5"alt="">
                <h4>{{ $article->name }}</h4>
              </div>
              <div class='col-lg-12'>
                <p>{{$article->content}}</p>
                <p class"text-muted">{{$article->under_content}}</p>
                <p class"text-muted">{{$article->category}}</p>
                <p class"text-muted">{{$article->price}}€</p>
                @if ($article->heart_attack == 1)
                  @include ('client/design/design_coup_de_coeur')
                @endif
                @if ($article->most_sell == 1)
                  @include ('client/design/design_most_sells')
                @endif
              </div>
              <a class="btn btn-primary btn-xs btn-update btn-add-card" href="{{ route('articles.edit', $article)}}">Modifier</a>
            </div>
          </div>
        </div>
      @endforeach
      <div class="col-lg-12"><a href="#">Voir les articles supprimés</a></div>
    </div><!-- End row -->
  </div><!-- End container -->
  @include('admin/footer')
