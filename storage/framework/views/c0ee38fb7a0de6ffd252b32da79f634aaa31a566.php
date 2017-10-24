<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Zen@Home</title>

  <!-- Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

  <!-- font awesome -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('/font-awesome/css/font-awesome.min.css')); ?>">

  <!-- bootstrap -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('/css/bootstrap.min.css')); ?>">

  <!-- animate.css -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('/css/animate.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(URL::asset('/css/set.css')); ?>" />

  <!-- formulaire css -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('/css/style_formulaire.css')); ?>" />


  <!-- gallery -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('/css/blueimp-gallery.min.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(URL::asset('/css/index.css')); ?>">

  <link rel="shortcut icon" href="<?php echo e(URL::asset('/image/favicon.ico')); ?>" type="image/x-icon">
  <link rel="icon" href="<?php echo e(URL::asset('/image/favicon.ico')); ?>" type="image/x-icon">
  <link href="<?php echo e(URL::asset('/css/set.css')); ?>" rel="stylesheet" type="text/css">

</head>

<body>
  <div class="topbar animation fadeinleftBig"></div>

  <!-- Header Starts -->
  <div id="menu" class="Menu-wrapper">
    <div class="container">

      <div class="Menu Menu-default Menu-fixed-top" role="Navigigation" id="top-Navig">
        <div class="container">
          <div class="Menu-header">
            <!-- Logo Starts -->
            <a class="Menu-logo" href="#home"><img src="<?php echo e(URL::asset('/image/logo-compressor.png')); ?>" alt="logo"></a>
            <!-- #Logo Ends -->


            <button type="button" class="Menu-toggle cold" data-toggle="col" data-target=".Menu-col">
              <span class="sr-only">Toggle Navigigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>


          <!-- Navig Starts -->
          <div class="Menu-col  col">
            <ul class="Navig Menu-Navig Menu-right scroll">
              <li class="active"><a href="#home">Home</a></li>
              <li ><a href="#HomeParty">Home Party</a></li>
              <li ><a href="#Articles">Articles</a></li>
              <li ><a href="#Création">Contact</a></li>
              <li ><a href="./catalogue">Catalogue</a></li>
            </ul>
          </div>
          <!-- #Navig Ends -->

        </div>
      </div>

    </div>
  </div>
  <!-- #Header Starts -->




  <div id="home">
    <!-- Acceuil Starts -->
    <div class="Acceuil">
      <img src="<?php echo e(URL::asset('/image/colton.jpg')); ?>" class="superbg"/>
      <div class="carousel-caption">
        <div class="imageblock">
          <div class="imageinfo">
            <h1 class="animation bounceInLeft">Partager un moment de bien-être avec vos amis, famille, collègues
en vous inscrivant à notre Home Party (réunion à domicile) Zen@Home</h1>
            <p class="animation bounceInRight"></p>
            <a href="./catalogue" class="bounceInLeft animation bouton bouton-default">Catalogue</a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Acceuil Ends -->

  <!-- HomeParty Starts -->
  <div id="HomeParty"  class="container spacer HomeParty">
    <div class="row">
      <div class="tab50-50 centrage">
        <h2 class="text-center wowload fadeInUp">Home Party</h2>
        <p class="text-left wowload fadeInUp">Réalisons une soirée Zen@Home</p>
        <p class="text-left wowload fadeInUp">Cocréons un moment convivial avec vos amis, collègues et/ou connaissances</p>
        <p class="text-left wowload fadeInUp">Vous bénéficierez de nos conseils personnalisés sur les articles de notre catalogue et plus</p>
        <p class="text-left wowload fadeInUp">Les articles pourront être emmenés directement à la fin de la présentation</p>
      </div>

      <div class="tab50-50 wowload fadeInRight">
        <img src="<?php echo e(URL::asset('/image/meditation.jpg')); ?>" class="img-HomeParty wowload img-responsive"></img>
      </div>
    </div>
  </div>
  <!-- HomeParty Ends -->


  <!-- Articles -->
  <div id="Articles"  class="clearfix grid">
    <figure class="effect-oscar  wowload fadeinup">
      <img src="<?php echo e(URL::asset('/image/meditation.jpg')); ?>" class="img-responsive"/>
      <figcaption>
        <h6>Méditation</h6>
        <p>Zen@home et sa multitude de choix bien-être<br>
          <a href="./catalogue/meditation">En voir plus...</a></p>
        </figcaption>
      </figure>
      <figure class="effect-oscar  wowload fadeinup">
        <img src="<?php echo e(URL::asset('/image/oracle.jpg')); ?>" class="img-responsive"/>
        <figcaption>
          <h6>Oracle</h6>
          <p>Zen@home et sa multitude de choix bien-être<br>
            <a href="./catalogue/oracle">En voir plus...</a></p>
          </figcaption>
        </figure>
        <figure class="effect-oscar  wowload fadeinup">
          <img src="<?php echo e(URL::asset('/image/oracle.jpg')); ?>" class="img-responsive"/>
          <figcaption>
            <h6>Radiesthésie</h6>
            <p>Zen@home et sa multitude de choix bien-être<br>
              <a href="./catalogue/radiestésie">En voir plus...</a></p>
            </figcaption>
          </figure>
          <figure class="effect-oscar  wowload fadeinup">
            <img src="<?php echo e(URL::asset('/image/Bien-être.jpg')); ?>" class="img-responsive"/>
            <figcaption>
              <h6>Thé</h6>
              <p>Zen@home et sa multitude de choix bien-être<br>
                <a href="./catalogue/thé">En voir plus...</a></p>
              </figcaption>
            </figure>
            <figure class="effect-oscar  wowload fadeinup">
              <img src="<?php echo e(URL::asset('/image/thé.jpg')); ?>" class="img-responsive"/>
              <figcaption>
                <h6>lithothérapie</h6>
                <p>Zen@home et sa multitude de choix bien-être<br>
                  <a href="./catalogue/lithothérapie">En voir plus...</a></p>
                </figcaption>
              </figure>

              <figure class="effect-oscar  wowload fadeinup">
                <img src="<?php echo e(URL::asset('/image/thé.jpg')); ?>" class="img-responsive"/>
                <figcaption>
                  <h6>Encens</h6>
                  <p>Zen@home et sa multitude de choix bien-être<br>
                    <a href="./catalogue/encens">En voir plus...</a></p>
                  </figcaption>
                </figure>
              </div>
              <!-- Articles -->

              <!-- Bar fondu Starts -->
              <div class="highlight-info">
                <div class="overlay spacer">
                  <div class="container">
                  </div>
                </div>
              </div>
              <!-- Bar fondu Ends -->

              <div id="Création"  class="container spacer HomeParty">
                <div class="row">
                  <div class="container wowload fadeInLeft contactform">
                    <h2 class="text-center wowload fadeInUp">Contactez nous pour créer votre Home Party</h2>
                    <form id="index" method="post" action="<?php echo e(route('sendmail')); ?>" class="form-inline">
                      <p class="text-form">Contactez-nous pour créer sur mesure votre zen@home party. Ensemble nous définirons une date, les thèmes à aborder, la liste des invités...
                        Nous vous transmettrons le lay-out des invitations et le pourcentage de la vente vous sera offert lors de la zen@home party</p>
                        <div class="form-group">
                          <label for="nom">Nom :</label>
                          <input type="text" id="nom" name="nom" tabindex="1" />
                        </div>
                        <div class="form-group">
                          <label for="prenom">Prénom :</label>
                          <input type="text" id="prenom" name="prenom" tabindex="1" />
                        </div>
                        <div class="form-group">
                          <label for="email">Email :</label>
                          <input type="text" id="email" name="email" tabindex="2" />
                        </div>
                        <div>
                          <label for="message">Message :</label>
                          <textarea id="message" name="message" tabindex="4" cols="30" rows="8"></textarea>
                        </div>
                        <div class="date">
                          <p class="like_label">Choisissez vos disponibilités :</p>
                          <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-group">
                              <label class="container_form"><?php echo e($value->nom_jour." ".$value->nb_jour." ".$value->mois." ".$value->year); ?>

                                <input type="checkbox" name="date">
                                <span class="checkmark"></span>
                              </label>
                            </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <div class="text-left">
                            <button class="bouton bouton-default" type="submit" name="envoi">Envoyer</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>






                <!-- Footer Starts -->
                <div id="footer" class="footer text-center spacer">
                  <p class="wowload flipInX">Copyright 2016 Zen@Home. Tous droits réservés.</p>
                  <a href="./catalogue" class="bouton bouton-default">Catalogue</a>
                </div>
                <!-- # Footer Ends -->
                <a id="gottothetop" href="#home" class="gototop"><img src="<?php echo e(URL::asset('/image/Arrow_up.png')); ?>" width="35px" height="35px"></a>

                <!-- jquery -->
                <script src="<?php echo e(URL::asset('/js/jquery.js')); ?>"></script>

                <!-- wow script -->
                <script src="<?php echo e(URL::asset('/js/wow.min.js')); ?>"></script>


                <!-- boostrap -->
                <script src="<?php echo e(URL::asset('/js/bootstrap.js')); ?>" type="text/javascript" ></script>

                <!-- jquery mobile -->
                <script src="<?php echo e(URL::asset('/js/respond.js')); ?>"></script>

                <!-- gallery -->
                <script src="<?php echo e(URL::asset('/js/jquery.blueimp-gallery.min.js')); ?>"></script>

                <!-- custom script -->
                <script src="<?php echo e(URL::asset('/js/script.js')); ?>"></script>

              </body>
              </html>
