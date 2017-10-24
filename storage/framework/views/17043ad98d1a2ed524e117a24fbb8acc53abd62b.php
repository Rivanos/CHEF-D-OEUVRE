<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo e(URL::asset('/css/ribbon.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('/font-awesome/css/font-awesome.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('/css/search_bar.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('/css/megamenu.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('/css/Modal.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('/css/main.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('/css/menu.css')); ?>">
  <?php echo $__env->make('category', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
  <!-- header -->
  <div class="header_bg">
    <div class="header">
      <div class="head-t">
        <div class="logo row">
          <a href="./">
            <img src="<?php echo e(URL::asset('/image/logo.png')); ?>" class="img-responsive col-xs-8 col-sm-8 col-md-3">
          </a>
          <a class="toggleMenu" href="#">Menu</a>
          <ul class="nav">
            <li><a class="color1" href="">Home</a></li>
            <li><a class="color2" href="<?php echo e(url('./catalogue/méditation')); ?>">Méditation</a></li>
            <li><a class="color4" href="<?php echo e(url('./catalogue/oracle')); ?>">Oracle</a></li>
            <li><a class="color5" href="<?php echo e(url('./catalogue/radiesthésie')); ?>">Radiesthésie</a></li>
            <li><a class="color6" href="<?php echo e(url('./catalogue/bien-être')); ?>">Bien-être</a></li>
            <li><a class="color7" href="<?php echo e(url('./catalogue/lithothérapie')); ?>">Lithothérapie</a></li>
            <li><a class="color8" href="<?php echo e(url('./catalogue/thé')); ?>">Thé</a></li>
            <li><a class="color9" href="<?php echo e(url('./catalogue/encens')); ?>">Encens</a></li>
            <li><a class="color10" href="<?php echo e(url('./catalogue/bijoux')); ?>">Bijoux</a></li>
          </ul>
        </div>
        <div class="intersection"></div>
        <?php echo $__env->make('client/search/search_bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- start header menu -->
        
    </div>
  </div>
</div>
<!-- finish header menu -->
<div class="intersection"></div>
