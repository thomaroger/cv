<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thomas ROGER</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/web/css/prez.css" />
    <meta name="robots" content="all, index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://cv.thomaroger.fr<?php echo $path?>" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand <?php echo $path == '/' ? 'active' : '' ; ?>" href="/">Thomas ROGER : CV </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo $path == '/experiences' ? 'active' : '' ; ?>">
        <a class="nav-link" href="/experiences">Expériences</a>
      </li>
      <li class="nav-item <?php echo $path == '/skills' ? 'active' : '' ; ?>">
        <a class="nav-link" href="/skills">Compétences</a>
      </li>
      <li class="nav-item <?php echo $path == '/training' ? 'active' : '' ; ?>">
        <a class="nav-link" href="/training">Formations</a>
      </li>
      <li class="nav-item <?php echo $path == '/others' ? 'active' : '' ; ?>">
        <a class="nav-link" href="/others">Loisirs</a>
      </li>
  </div>
</nav>

<div class="row">
  <div class="col-4">
      <div class="card-body">
          <div class="list-group">
            <div href="#" class="list-group-item list-group-item-action flex-column align-items-start list-group-item-light">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Thomas ROGER</h5>
              </div>
            </div>
            <div class="list-group-item list-group-item-action flex-column align-items-start">
              <?php $age = date('Y')-1987; ?>
              <p class="mb-1"> <i class="fas fa-user"></i> <?php echo $age ?> ans</p>
            </div>
            <div href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1"><i class="fas fa-heart"></i> marié, 2 enfants</p>
            </div>
            <div href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1"><i class="fas fa-car"></i> permis B</p>
            </div>
            <div href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1"><i class="fas fa-globe"></i> Bogève, France</p>
            </div>
            <div href="#" class="list-group-item list-group-item-action flex-column align-items-start list-group-item-light">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Social</h5>
              </div>
            </div>
            <a href="/contact" class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1"><i class="fas fa-envelope"></i> contact</p>
            </a>
            <a href="https://github.com/thomaroger" class="list-group-item list-group-item-action flex-column align-items-start" target="_blank">
              <p class="mb-1"><i class="fas fa-tags"></i> Github</p>
            </a>
      </div>
    </div>
       <div class="card-body">
          <div class="list-group">
            <div href="#" class="list-group-item list-group-item-action flex-column align-items-start list-group-item-light">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Situation actuelle</h5>
              </div>
            </div>
            <div class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1"> <i class="fa fa-user"></i> Responsable des Etudes</p>
            </div>
            <div href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1"><i class="fa fa-building"></i> I@D Digital</p>
            </div>
            <div href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1"><i class="fa fa-map-marked"></i> Lieusaint, France</p>
            </div>
        </div>
  </div>
</div>
  <div class="col-8">
