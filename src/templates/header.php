<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thomas ROGER</title>

    <link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/web/css/prez.css" />

    <script type="text/javascript" src="/lib/jquery/jquery.js"></script>
    <script type="text/javascript" src="/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/web/js/prez.js"></script>

    <meta name="robots" content="all, index, follow" />

</head>
<body>

    <div class="navbar navbar-inverse navbar-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="<?php echo $path == '/' ? 'active' : '' ; ?>">
                <a href="/" class="brand">Thomas ROGER : CV</a>
              </li>
              <li class="<?php echo $path == '/experiences' ? 'active' : '' ; ?>">
               <a href="/experiences" class="brand">Expériences</a>
              </li>
              <li class="<?php echo $path == '/skills' ? 'active' : '' ; ?>">
               <a href="/skills" class="brand">Compétences</a>
              </li>
              <li class="<?php echo $path == '/training' ? 'active' : '' ; ?>">
               <a href="/training" class="brand">Formations</a>
              </li>
              <li class="<?php echo $path == '/others' ? 'active' : '' ; ?>">
               <a href="/others" class="brand">Loisirs</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<div id="wrap">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span4">
                <div class="span11">
                    <div class="thumbnail">
                        <div class="caption">
                            <ul class="nav nav-list">
                                <li class="nav-header">Thomas ROGER</li>
                                <?php $age = date('Y')-1987; ?>
                                <li><i class="icon-user"></i> <?php echo $age ?> ans </li>
                                <li><i class="icon-heart"></i> marié, 2 enfants </li>
                                <li><i class="icon-hand-right"></i> permis B </li>
                                <li><i class="icon-globe"></i> Saint Pierre du Perray, France</li>
                                <li class="nav-header">Social</li>
                                <li><a href="/contact"><i class="icon-envelope"></i> contact</a></li>
                                <li><a href="https://github.com/thomaroger" target="_blank"><i class="icon-tags"></i> Github</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="span11">
                    <div class="thumbnail">
                        <div class="caption">
                            <ul class="nav nav-list">
                                <li class="nav-header">Situation actuelle</li>
                                <li><i class="icon-user"></i> Responsable des Etudes</li>
                                <li><i class="icon-map-marker"></i> I@D Digital</li>
                                <li><i class="icon-globe"></i> Lieusaint, France</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span8">
