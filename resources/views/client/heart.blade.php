
<div class="container">
  <div class="row">
    @if (sizeof($articles_hearts) == 3)
      <div class="col-md-1 col-md-1-5 invisible"></div>
      @foreach ($articles_hearts as $articles_heart)
        <div class="col-md-3">
          <div class="content_aricle">
            @include ('client/design/design_coup_de_coeur')
            <div class="name">
              {{ $articles_heart->name }}
            </div>
            <div data-modal="#modal1" class="thumbnail">
              <img src="{{ URL::asset($articles_heart->path_img) }}" alt="">
            </div>
            <div class="row">
              <div class="col-md-3 text-center">
                {{ $articles_heart->price }}€
              </div>
              <div class="col-md-9">
                {{ $articles_heart->content }}
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @elseif (sizeof($articles_hearts) == 4)
      @foreach ($articles_hearts as $articles_heart)
        <div class="col-md-3">
          <div class="content_aricle">
            @include ('client/design/design_coup_de_coeur')
            <div class="name">
              {{ $articles_heart->name }}
            </div>
            <div data-modal="#modal1" class="thumbnail">
              <img src="{{ URL::asset($articles_heart->path_img) }}" alt="">
            </div>
            <div class="row">
              <div class="col-md-3 text-center">
                {{ $articles_heart->price }}€
              </div>
              <div class="col-md-9">
                {{ $articles_heart->content }}
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @elseif (sizeof($articles_hearts) == 5)
      <div class="col-md-1 invisible"></div>
      @foreach ($articles_hearts as $articles_heart)
        <div class="col-md-2">
          <div class="content_aricle">
            @include ('client/design/design_coup_de_coeur')
            <div class="name">
              {{ $articles_heart->name }}
            </div>
            <div data-modal="#modal1" class="thumbnail">
              <img src="{{ URL::asset($articles_heart->path_img) }}" alt="">
            </div>
            <div class="row">
              <div class="col-md-3 text-center">
                {{ $articles_heart->price }}€
              </div>
              <div class="col-md-9">
                {{ $articles_heart->content }}
              </div>
            </div>
          </div>
        </div>
      @endforeach
      <div class="col-md-1 invisible"></div>
    @endif
  </div>
</div>
