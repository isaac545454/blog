<?php 
    include_once("helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@300;700&family=Pacifico&display=swap" rel="stylesheet">
  
    <title>blog codar</title>
  </head>
  <body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
    <img src="<?= $BASE_URL ?>/img/logo.svg" alt="blog codar" >
    </a>
      <nav>
          <ul id="navbar">
              <li><a href="<?= $BASE_URL ?>" class="nav-link">home</a></li>
              <li><a href="#" class="nav-link">categorias</a></li>
              <li><a href="#" class="nav-link">sobre</a></li>
              <li><a href="<?= $BASE_URL ?>contato.php"  class="nav-link">contato</a></li>
          </ul>
      </nav>
    </header>
