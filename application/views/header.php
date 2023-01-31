<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no'>
  
  <title><?=$title?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="icon" href="<?=base_url()?>assets/img/favicon.ico" sizes="32x32">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <script type="text/javascript" src="<?=base_url()?>assets/plugin/js/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/app.css">
  <script type="text/javascript" src="<?=base_url()?>assets/js/app.js"></script>
  <script type="text/javascript">
    var site_url = "<?=site_url()?>";
  </script>
<body>

  <section class="window-menu d-none d-xl-block">
    <div class="d-flex justify-content-center">          
      <a href="https://angelgraceblessing.com"><img width="150" src="<?=base_url()?>assets/img/logo.png" alt=""></a>
    </div>
    <nav class="navbar">
      <ul class="nav navbar-nav">
        <!-- <li class="nav-item"><a href="https://askangelblessing.com">Home</a></li> -->
        <li class="nav-item <?=$title=='Angel Color Doors'?'active':''?>"><a href="https://www.askangelblessing.com/angel-color-door">Angel Color Doors</a></li>
        <li class="nav-item <?=$title=='Angel\'s Guidance Message'?'active':''?>"><a href="https://www.askangelblessing.com/angel-color-door/angel-number">Angel Numbers</a></li>
        <li class="nav-item <?=$title=='Your Birthday Date Meaning.'?'active':''?>"><a href="https://www.askangelblessing.com/angel/angel-birth-month">Birth Month</a></li>
        <li class="nav-item <?=$title=='Your Birthday Date Meaning'?'active':''?>"><a href="https://askangelblessing.com/angel/angel-birth-number">Birth Number</a></li>
        <li class="nav-item <?=$title=='Daily Angel Message'?'active':''?>"><a href="https://askangelblessing.com/angel/angel-message">Daily Angel Message</a></li>
        <li class="nav-item <?=$title=='Get Your Romantic Advise Now'?'active':''?>"><a href="https://www.askangelblessing.com/angel/love-quiz">Your Love Status</a></li>
        <li class="nav-item"><a href="https://www.askangelblessing.com/fortune-cookie">Fortune Cookie</a></li>
        <li class="nav-item <?=$title=='Daily Horoscope'?'active':''?>"><a href="https://www.askangelblessing.com/angel/daily-horoscope">Daily Horoscope</a></li>
      </ul>
    </nav>
  </section>
  <section class="mobile-menu d-xl-none">
    <nav class="navbar navbar-expand-xl navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="https://angelgraceblessing.com"><img class="brand-img" src="<?=base_url()?>assets/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
              <a class="nav-link" aria-current="page" href="https://askangelblessing.com/angel/angelMessage">Home</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="https://www.askangelblessing.com/angel-color-door">Angel Color Doors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.askangelblessing.com/angel-color-door/angel-number">Angel Numbers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.askangelblessing.com/angel/angel-birth-month">Birth Month</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://askangelblessing.com/angel/angel-birth-number">Birth Number</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://askangelblessing.com/angel/angel-message">Daily Angel Message</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.askangelblessing.com/angel/LoveQuiz">Your Love Status</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.askangelblessing.com/fortune-cookie">Fortune Cookie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.askangelblessing.com/angel/daily-horoscope">Daily Horoscope</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>