@include('header')
<div class="container">
  <div class="row">
    <div class="col-md-3">
      @include ('client/sidebar')
    </div>
    <div class="col-md-9">
      @foreach ($articles as $article)
        <div class="col-md-4 espacement">
          <div class="content_aricle">
            @if ($article->heart_attack == 1)
              @include ('client/design/design_coup_de_coeur')
            @endif
            @if ($article->most_sell == 1)
              @include ('client/design/design_most_sells')
            @endif
            <div class="name">
              {{ $article->name }}
            </div>
            <div class="thumbnail">
              <img src="{{ URL::asset($article->path_img) }}" alt="">
            </div>
            <div class="row">

              <div class="col-md-9">
                {{ $article->content }}
              </div>
            </div>
            <div class="row">
              <div class="intersection"></div>
              <div class="col-md-offset-6 col-md-3 text-center">
                <p class="prix" >{{ $article->price }}<span class="euro">€</span></p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{ $articles->links() }}
  </div>
</div>
@include('footer')
