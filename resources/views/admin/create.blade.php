@include('admin/header')
<div class="container">
  <h1>Ajouter un article</h1>
  @if (Session::has('succes.edit'))
    <div class="alert alert-succes">
      {{ Session::get('succes.edit') }}
    </div>
  @endif
  {{ Form::open(['url' => route('articles.store')]) }}
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        {{ Form::label('name', 'Nom :')}}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::label('content', 'Description :') }}
        {{ Form::textarea('content', null, ['class' => 'form-control', 'size' => '10x2.5']) }}
      </div>
      <div class="form-group">
        {{ Form::label('under_content', 'Sous-description :') }}
        {{ Form::textarea('under_content', null, ['class' => 'form-control', 'size' => '10x2.5']) }}
      </div>
      <div class="form-group">
        {{ Form::label('category', "Catégorie :")}}
        {{ Form::select('category', ["méditation", "oracle", "radiesthésie", "bien-être", "lithothérapie","thé", "bijoux"],0, ['class' => 'form-control']) }}
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          {{ Form::label('price', 'Prix :') }}
          {{ Form::number('price', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::label('heart_attack', 'Coup de coeur :')}}
          {{ Form::select('heart_attack', ["non", "oui"], 0, ['class' => 'form-control']) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::label('most_sell', 'Les plus vendus:')}}
          {{ Form::select('most_sell', ["non", "oui"] ,0, ['class' => 'form-control']) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::label('show_index', 'Affichez sur la Home :')}}
          {{ Form::select('show_index', ["non", "oui"], 0, ['class' => 'form-control']) }}
        </div>
      </div>
      {{ Form::button('Ajouter', ['type' => 'submit', 'class' => 'btn btn-primary'])}}
      {{ Form::close() }}
    </div>
  </div>
</div>
@include ('admin/footer')
