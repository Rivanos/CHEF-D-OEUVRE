@include('admin/header')
<div class="container">
  <h1>Modifier un articles</h1>
  @if (Session::has('succes.update'))
    <div class="alert alert-succes">
      {{ Session::get('succes.update') }}
    </div>
  @endif
  <a class="btn icon-btn btn-primary pull-right" href="{{ route('articles.index')}}"></span>Revenir aux articles</a>
  {{ Form::open(['files' => true, 'method' => 'put', 'url' => route('articles.update', $article)]) }}
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        {{ Form::label('name', 'Nom :')}}
        {{ Form::text('name', $article->name, ['class' => 'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::label('content', 'Description :') }}
        {{ Form::textarea('content', $article->content, ['class' => 'form-control', 'size' => '10x2.5']) }}
      </div>
      <div class="form-group">
        {{ Form::label('under_content', 'Sous-description :') }}
        {{ Form::textarea('under_content', $article->under_content, ['class' => 'form-control', 'size' => '10x2.5']) }}
      </div>
      <div class="form-group">
        {{ Form::label('category', "Catégorie :")}}
        {{ Form::select('category', ["méditation" => "méditation", "oracle" => "oracle", "radiesthésie" => "radiesthésie", "bien-être" =>"bien-être", "lithothérapie" => "lithothérapie","thé" => "thé", "bijoux" => "bijoux"], $article->category, ['class' => 'form-control']) }}
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          {{ Form::label('price', 'Prix :') }}
          {{ Form::number('price', $article->price, ['class' => 'form-control']) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::label('heart_attack', 'Coup de coeur :')}}
          {{ Form::select('heart_attack', ["non", "oui"], $article->heart_attack, ['class' => 'form-control']) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::label('most_sell', 'Les plus vendus:')}}
          {{ Form::select('most_sell', ["non", "oui"] , $article->most_sell, ['class' => 'form-control']) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::label('show_index', 'Affichez sur la Home :')}}
          {{ Form::select('show_index', ["non", "oui"], $article->show_index, ['class' => 'form-control']) }}
        </div>
      </div>
      {{ Form::button('Modifier', ['type' => 'submit', 'class' => 'btn btn-primary'])}}
      {{ Form::close() }}
    </div>
    <div class="col-md-6">
      @include('admin/view/image')
    </div>
  </div>
</div>
@include('admin/footer')
