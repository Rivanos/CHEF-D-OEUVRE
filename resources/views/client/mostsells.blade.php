<div class="container">
  <div class="row">
    @if (sizeof($articles_sells) == 3)
      <div class="col-md-1 col-md-1-5 invisible"></div>
      @foreach ($articles_sells as $article_sell)
        <div class="col-md-3">
          <div class="content_aricle">
            @include ('client/design/design_most_sells')
            <div class="name">
              {{ $article_sell->name }}
            </div>
            <div data-modal="#modal1" class="thumbnail">
              <img src="{{ URL::asset($article_sell->path_img) }}" alt="">
            </div>
            <div class="row">
              <div class="col-md-3 text-center">
                {{ $article_sell->price }}€
              </div>
              <div class="col-md-9">
                {{ $article_sell->content }}
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @elseif (sizeof($articles_sells) == 4)
      @foreach ($articles_sells as $article_sell)
        <div class="col-md-3">
          <div class="content_aricle">
            @include ('client/design/design_most_sells')
            <div class="name">
              {{ $article_sell->name }}
            </div>
            <div data-modal="#modal1" class="thumbnail">
              <img src="{{ URL::asset($article_sell->path_img) }}" alt="">
            </div>
            <div class="row">
              <div class="col-md-3 text-center">
                {{ $article_sell->price }}€
              </div>
              <div class="col-md-9">
                {{ $article_sell->content }}
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @elseif (sizeof($articles_sells) == 5)
      <div class="col-md-1 invisible"></div>
      @foreach ($articles_sells as $article_sell)
        <div class="col-md-2">
          <div class="content_aricle">
            @include ('client/design/design_most_sells')
            <div class="name">
              {{ $article_sell->name }}
            </div>
            <div data-modal="#modal1" class="thumbnail">
              <img src="{{ URL::asset($article_sell->path_img) }}" alt="">
            </div>
            <div class="row">
              <div class="col-md-3 text-center">
                {{ $article_sell->price }}€
              </div>
              <div class="col-md-9">
                {{ $article_sell->content }}
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @endif
  </div>
</div>
