<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ URL::asset('/css/ribbon.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('/font-awesome-4.7.0/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('/css/search_bar.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('/css/megamenu.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('/css/Modal.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('/css/menu.css') }}">
  @include('category')
</head>
<body>
  <!-- header -->
  <div class="header_bg">
    <div class="header">
      <div class="head-t">
        <div class="logo row">
          <a href="./">
            <img src="{{ URL::asset('/image/logo.png') }}" class="img-responsive col-xs-8 col-sm-8 col-md-3">
          </a>
          <a class="toggleMenu" href="#">Menu</a>
          <ul class="nav">
            <li><a class="color1" href="">Home</a></li>
            <li><a class="color2" href="{{ url('./catalogue/méditation') }}">Méditation</a></li>
            <li><a class="color4" href="{{ url('./catalogue/oracle')}}">Oracle</a></li>
            <li><a class="color5" href="{{ url('./catalogue/radiesthésie')}}">Radiesthésie</a></li>
            <li><a class="color6" href="{{ url('./catalogue/bien-être')}}">Bien-être</a></li>
            <li><a class="color7" href="{{ url('./catalogue/lithothérapie')}}">Lithothérapie</a></li>
            <li><a class="color8" href="{{ url('./catalogue/thé')}}">Thé</a></li>
            <li><a class="color9" href="{{ url('./catalogue/encens')}}">Encens</a></li>
            <li><a class="color10" href="{{ url('./catalogue/bijoux')}}">Bijoux</a></li>
          </ul>
        </div>
        <div class="intersection"></div>
        @include ('client/search/search_bar')
        <!-- start header menu -->
        {{-- <ul class="megamenu skyblue">
        <li class="active col-md-11-11"><a class="color1" href="./">Home</a></li>
        <li class="col-md-11-11"><a class="color2" href="{{ url('./catalogue/méditation') }}">Méditation</a></li>
        <li class="col-md-11-11"><a class="color4" href="{{ url('./catalogue/oracle')}}">Oracle</a></li>
        <li class="col-md-11-11"><a class="color5" href="{{ url('./catalogue/radiesthésie')}}">Radiesthésie</a></li>
        <li class="col-md-11-11"><a class="color6" href="{{ url('./catalogue/bien-être')}}">Bien-être</a></li>
        <li class="col-md-11-11"><a class="color7" href="{{ url('./catalogue/lithothérapie')}}">Lithothérapie</a></li>
        <li class="col-md-11-11"><a class="color8" href="{{ url('./catalogue/thé')}}">Thé</a></li>
        <li class="col-md-11-11"><a class="color10" href="{{ url('./catalogue/encens')}}">Encens</a></li>
        <li class="col-md-11-11"><a class="color9" href="{{ url('./catalogue/bijoux')}}">Bijoux</a></li>
      </ul> --}}
    </div>
  </div>
</div>
<!-- finish header menu -->
<div class="intersection"></div>
