<div class="form-group">
    {{ Form::label('file', 'Séléctionner une image: ')}}
    {{ Form::file('file')}}
    {{ Form::hidden('path_img','test') }}
  </div>
  <div class="form-group">
    <img src="{{ URL::asset($article->path_img) }}" class="img-responsive col-md-12" alt="">
  </div>
