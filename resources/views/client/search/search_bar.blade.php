<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="intersection"></div>
      <div id="imaginary_container">
        <div class="input-group stylish-input-group input-append">
          <input id="recherche" type="text" class="recherche form-control" name="search_bar"  placeholder="Recherche ..."  />
          <button id="remove" class="remove-text btn" ><i class="fa fa-times" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="col-sm-8 col-sm-offset-2">
      <div id="result" class=" ">
        @isset($articles)
          @foreach ($articles as $article)
            {{ $article->name }}
          @endforeach
        @endisset
      </div>
    </div>
  </div>
</div>
