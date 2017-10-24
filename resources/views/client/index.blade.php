@include('../header')
<!-- menu image -->
<div id="sous-menu" class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-4	col-lg-4	col-xl-4">
      <a href="./catalogue/méditation" class="thumbnail">
        <img src="./image/meditation.jpg" alt="home page méditation" class="img-responsive">
        <p class="title right">Méditation</p>
      </a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-4	col-lg-4	col-xl-4">
      <a href="./catalogue/bijoux" class="thumbnail">
        <img src="./image/bijoux.jpg" alt=" home page bijoux" class="img-responsive">
        <p class="title middlebot">Bijoux</p>
      </a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-4	col-lg-4	col-xl-4">
      <a href="./catalogue/oracle" class="thumbnail">
        <img src="./image/oracle.jpg" alt="home page oracle" class="img-responsive">
        <p class="title lefttop">Oracle</p>
      </a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-8	col-lg-8	col-xl-8">
      <a href="./catalogue/lithothérapie" class="thumbnail">
        <img src="./image/lithotherapie.jpg" alt="home page lithothérapie" class="img-responsive">
      </a>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4	col-lg-4	col-xl-4">
      <a href="./catalogue/radiesthésie" class="thumbnail">
        <img src="./image/pendule.jpg" alt="home page pendule" class="img-responsive">
        <p class="titlepinky lefttop">Pendules</p>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-1 col-md-1-5 invisible"></div>
    <div class="col-xs-4 col-sm-4 col-md-3	col-lg-3	col-xl-3">
      <a href="./catalogue/thé" class="thumbnail">
        <img src="./image/thé.jpg" alt="home page thé" class="img-responsive">
        <p class="title right">Thé</p>
      </a>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-3	col-lg-3	col-xl-3">
      <a href="./catalogue/bien-être" class="thumbnail">
        <img src="./image/Bien-être.jpg" alt="home page bien-être" class="img-responsive">
        <p class="title right">Bien-être</p>
      </a>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-3	col-lg-3	col-xl-3">
      <a href="./catalogue/encens" class="thumbnail">
        <img src="./image/encens.jpg" alt="home page encens" class="img-responsive">
        <p class="title right">Encens</p>
      </a>
    </div>
  </div>
</div>
<!-- fin menu image -->
<!-- début ribbon -->
<div id="ribbon-rouge" class="intersection_ribbon">
  <div class="ribbon"><div class="ribbon-stitches-top"></div><strong class="ribbon-content"><h1>Nos coups de coeurs</h1></strong><div class="ribbon-stitches-bottom"></div></div>
</div>
<!-- fin ribbon -->
<!-- début listing article -->
@include('client/heart')
<!-- début ribbon -->
<div id="ribbon-vert" class="intersection_ribbon">
  <div class="ribbon_vert"><div class="ribbon-stitches-top"></div><strong class="ribbon-content"><h1>Nos plus vendus</h1></strong><div class="ribbon-stitches-bottom"></div></div>
</div>
<!-- fin ribbon -->
<!-- fin listing article -->
@include('client/mostsells')
@include('../footer')
