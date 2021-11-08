<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="styles/style.css">


  <title>Grozio Paslaugos</title>
</head>

<body>

  <nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">Grožio paslaugos</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-trigger  extrawidth" href="#" data-target="dropdown1">Paslaugos</a></li>
        <li><a href="kainorastis.php">Kainoraštis</a></li>
        <li><a href="gallery.php">Darbų galerija</a></li>
        <li><a href="atsiliepimai.php">Atsiliepimai</a></li>
        <li><a href="contacts.php">Kontaktai</a></li>
      </ul>
    </div>
  </nav>
  
  <ul class="sidenav" id="mobile-demo">
    <li><a href="index.php"><i class="small material-icons">home</i>Pagrindinis</a></li>
    <li><a class="dropdown-trigger" href="#" data-target="dropdown2">Paslaugos</a></li>
    <li><a href="kainorastis.php">Kainorastis</a></li>
    <li><a href="gallery.php">Darbu galerija</a></li>
    <li><a href="atsiliepimai.php">Atsiliepimai</a></li>
    <li><a href="contacts.php">Kontaktai</a></li>
  </ul>



  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="proginesSukuosenos.php">Proginės šukuosenos</a></li>
    <li><a href="makiazas.php">Makiažas</a></li>
    <li><a href="manikiurasPedikiuras.php">Manikiūras/
        Pedikiūras</a></li>
    <li><a href="depiliacija.php">Depiliacija</a></li>
  </ul>

  <ul id="dropdown2" class="dropdown-content">
    <li><a href="proginesSukuosenos.php">Proginės šukuosenos</a></li>
    <li><a href="makiazas.php">Makiažas</a></li>
    <li><a href="manikiurasPedikiuras.php">Manikiūras/
        Pedikiūras</a></li>
    <li><a href="depiliacija.php">Depiliacija</a></li>
  </ul>