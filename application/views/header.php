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

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6130278165783644" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/app.css">
  <script type="text/javascript" src="<?=base_url()?>assets/js/app.js"></script>
  <script type="text/javascript">
    var site_url = "<?=site_url()?>";
  </script>
<body>

  <section class="window-menu d-none d-xl-block">
    <div class="d-flex justify-content-center">          
      <a href="https://askangelblessing.com"><img width="150" src="<?=base_url()?>assets/img/logo.png" alt=""></a>
    </div>
    <nav class="navbar">
      <ul class="nav navbar-nav">
        <!-- <li class="nav-item"><a href="https://askangelblessing.com">Home</a></li> -->
        <li class="nav-item dropdown <?=$title=='Your Birthday Date Meaning.' || $title=='Your Birthday Date Meaning' ? 'active':''?>">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Birthday Date Meaning
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <li><a class="dropdown-item <?=$title=='Your Birthday Date Meaning.'?'active':''?>" href="https://www.askangelblessing.com/angel/angel-birth-month">Birth Month</a></li>
            <li ><a class="dropdown-item <?=$title=='Your Birthday Date Meaning'?'active':''?>" href="https://askangelblessing.com/angel/angel-birth-number">Birth Number</a></li>
          </ul>
        </li> 

        <li class="nav-item dropdown 
          <?=$title=="Choose Your Prayer of The Day"
          || $title=='Orders Angels' 
          || $title=='Daily Angel Message'
          || $title=='Angel\'s Guidance Message' 
          || $title=='Angel Color Doors'
          || $title=='Choose Your Angelic Aromatherapy Today'
          || $title=='Discover Your Angelic Dream Interpretation'
          || $title=='Angelic Symbols'
          || $title=='Contact with Angels Using Essential Oils'
          || $title=='Choose Your Methods To Connecting With Your Angels Today'
          || $title=='Discover Your Stories of Angels' 
          || $title=='Choose Your Aura Color Today' 
          ? 'active':''?>
        ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Daily Angel Message
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <li><a class="dropdown-item <?=$title=='Choose Your Prayer of The Day'?'active':''?>" href="https://askangelblessing.com/angel/prayer-of-the-day">Prayer of The Day</a></li>
            <li><a class="dropdown-item <?=$title=='Orders Angels'?'active':''?>" href="https://askangelblessing.com/angel/orders-angels">Angel Orders</a></li>
            
            <li><a class="dropdown-item <?=$title=='Daily Angel Message'?'active':''?>" href="https://askangelblessing.com/angel/angel-message">Daily Angel Message</a></li>
            <li ><a class="dropdown-item <?=$title=='Angel\'s Guidance Message'?'active':''?>" href="https://www.askangelblessing.com/angel-color-door/angel-number">Angel Numbers</a></li>
            <li ><a class="dropdown-item <?=$title=='Angel Color Doors'?'active':''?>" href="https://www.askangelblessing.com/angel-color-door">Angel Color Doors</a></li>
            <li ><a class="dropdown-item <?=$title=='Choose Your Angelic Aromatherapy Today'?'active':''?>" href="https://askangelblessing.com/angel/angelic-aromatherapy">Angelic Aromatherapy</a></li>
            <li><a class="dropdown-item <?=$title=='Discover Your Angelic Dream Interpretation'?'active':''?>" href="https://askangelblessing.com/angel/angelic-dream">Angelic Dream Interpretation</a></li>
            <li ><a class="dropdown-item <?=$title=='Angelic Symbols'?'active':''?>" href="https://www.askangelblessing.com/angel/angelic-symbols">Angelic Symbols</a></li>
            <li ><a class="dropdown-item <?=$title=='Contact with Angels Using Essential Oils'?'active':''?>" href="https://askangelblessing.com/angel/essential-oils">Angelic Essential Oils</a></li>
            <li ><a class="dropdown-item <?=$title=='Choose Your Methods To Connecting With Your Angels Today'?'active':''?>" href="https://askangelblessing.com/angel/connecting-angels">Connecting With Angels</a></li>
            <li ><a class="dropdown-item <?=$title=='Discover Your Stories of Angels'?'active':''?>" href="https://askangelblessing.com/angel/story-angel">Stories of Angels</a></li>
            <li ><a class="dropdown-item <?=$title=='Choose Your Aura Color Today'?'active':''?>" href="https://askangelblessing.com/angel/aura-color">Aura Color</a></li>
            
          </ul>
        </li>    

        <!-- <li class="nav-item <?=$title=='Get Your Romantic Advise Now'?'active':''?>"><a  class="nav-link" href="https://www.askangelblessing.com/angel/love-quiz">Your Love Status</a></li> -->

        <li class="nav-item dropdown <?=$title=='Get Your Romantic Advise Now' ||
        $title=='Find Your Next Soulmate'
        ? 'active':''?>">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Your Love Status
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <li><a class="dropdown-item <?=$title=='Get Your Romantic Advise Now'?'active':''?>" href="https://www.askangelblessing.com/angel/love-quiz">Your Love Status</a></li>
            <li><a class="dropdown-item <?=$title=='Find Your Next Soulmate' ? 'active':''?>" href="https://www.askangelblessing.com/angel/soulmates">Find Your Next Soulmate</a></li>
          </ul>
        </li> 

        <li class="nav-item dropdown <?=$title=='Choose Your Fortune Cookie For The Day'
        ? 'active':''?>">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fortune Cookie
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <li><a class="dropdown-item" href="https://www.askangelblessing.com/fortune-cookie">Fortune Cookie</a></li>
            <li><a class="dropdown-item <?=$title=='Choose Your Fortune Cookie For The Day' ? 'active':''?>" href="https://www.askangelblessing.com/angel/fortune-cookie-message">Fortune Cookie Message</a></li>
          </ul>
        </li> 

        <li class="nav-item dropdown <?=$title=='Daily Horoscope' 
        || $title=='Five Element Reading' 
        || $title=='Coffee Cup Reading For Letters'
        ? 'active':''?>">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Daily Horoscope
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <li><a class="dropdown-item <?=$title=='Daily Horoscope'?'active':''?>" href="https://www.askangelblessing.com/angel/daily-horoscope">Daily Horoscope</a></li>
            <li><a class="dropdown-item <?=$title=='Five Element Reading'?'active':''?>" href="https://www.askangelblessing.com/angel/five-element">Five Elements Reading</a></li>
            <li ><a class="dropdown-item" href="https://www.askangelblessing.com/12-chinese-zodiac-signs/">12 Chinese Zodiac Signs</a></li>
            <li><a class="dropdown-item" href="https://www.askangelblessing.com/coffee-cup-reading-for-numbers/">Coffee Cup Reading For Numbers</a></li>
            <li><a class="dropdown-item" href="https://www.askangelblessing.com/angel/coffee-cup-reading-for-letters/">Coffee Cup Reading For Letters</a></li>
            <li><a class="dropdown-item" href="https://www.askangelblessing.com/moon-cycle-reading/">Moon Cycle Reading</a></li>
        </ul>

        <li class="nav-item <?=$title=='Crystal Ball Reading'?'active':''?>"><a class="nav-link" href="https://www.askangelblessing.com/angel/crystal-ball">Crystal Ball Reading</a></li>
      </ul>
    </nav>
  </section>
  <section class="mobile-menu d-xl-none">
    <nav class="navbar navbar-expand-xl navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="https://askangelblessing.com"><img class="brand-img" src="<?=base_url()?>assets/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
              <a class="nav-link" aria-current="page" href="https://askangelblessing.com/angel/angelMessage">Home</a>
            </li> -->
            <li class="nav-item <?=$title=='Angel Color Doors'?'active':''?>">
              <a class="nav-link" href="https://www.askangelblessing.com/angel-color-door">Angel Color Doors</a>
            </li>
            <li class="nav-item <?=$title=='Angel\'s Guidance Message'?'active':''?>">
              <a class="nav-link" href="https://www.askangelblessing.com/angel-color-door/angel-number">Angel Numbers</a>
            </li>
            <li class="nav-item <?=$title=='Your Birthday Date Meaning.'?'active':''?>">
              <a class="nav-link" href="https://www.askangelblessing.com/angel/angel-birth-month">Birth Month</a>
            </li>
            <li class="nav-item <?=$title=='Your Birthday Date Meaning'?'active':''?>">
              <a class="nav-link" href="https://askangelblessing.com/angel/angel-birth-number">Birth Number</a>
            </li>
            <li class="nav-item <?=$title=='Orders Angels'?'active':''?>">
              <a class="nav-link" href="https://askangelblessing.com/angel/orders-angels">Angel Orders</a>
            </li>
            <li class="nav-item <?=$title=='Daily Angel Message'?'active':''?>">
              <a class="nav-link" href="https://askangelblessing.com/angel/angel-message">Daily Angel Message</a>
            </li>
            <li class="nav-item <?=$title=='Choose Your Prayer of The Day'?'active':''?>">
              <a class="nav-link" href="https://askangelblessing.com/angel/prayer-of-the-day">Prayer of The Day</a>
            </li>
            <li class="nav-item <?=$title=='Choose Your Angelic Aromatherapy Today'?'active':''?>">
              <a class="nav-link" href="https://askangelblessing.com/angel/angelic-aromatherapy">Angelic Aromatherapy</a>
            </li>
            <li class="nav-item <?=$title=='Discover Your Angelic Dream Interpretation'?'active':''?>">
              <a class="nav-link" href="https://askangelblessing.com/angel/angelic-dream">Angelic Dream Interpretation</a>
            </li>
            <li class="nav-item <?=$title=='Angelic Symbols'?'active':''?>">
              <a class="nav-link" href="https://askangelblessing.com/angel/angelic-symbols">Angelic Symbols</a>
            </li>
            <li class="nav-item <?=$title=='Contact with Angels Using Essential Oils'?'active':''?>">
              <a class="nav-link" href="https://askangelblessing.com/angel/essential-oils">Angelic Essential Oils</a>
            </li>
            <li class="nav-item <?=$title=='Choose Your Methods To Connecting With Your Angels Today'?'active':''?>">
              <a class="nav-link" href="https://askangelblessing.com/angel/connecting-angels">Connecting With Angels</a>
            </li>
            <li class="nav-item <?=$title=='Discover Your Stories of Angels'?'active':''?>">
              <a class="nav-link" href="https://askangelblessing.com/angel/story-angel">Stories of Angels</a>
            </li>
            <li class="nav-item <?=$title=='Choose Your Aura Color Today'?'active':''?>">
              <a class="nav-link" href="https://askangelblessing.com/angel/aura-color">Aura Color</a>
            </li>
            <li class="nav-item <?=$title=='Get Your Romantic Advise Now'?'active':''?>">
              <a class="nav-link" href="https://www.askangelblessing.com/angel/LoveQuiz">Your Love Status</a>
            </li>
            <li class="nav-item <?=$title=='Find Your Next Soulmate'?'active':''?>">
              <a class="nav-link" href="https://www.askangelblessing.com/angel/soulmates">Find Your Next Soulmate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.askangelblessing.com/fortune-cookie">Fortune Cookie</a>
            </li>
            <li class="nav-item <?=$title=='Choose Your Fortune Cookie For The Day'?'active':''?>">
              <a class="nav-link" href="https://www.askangelblessing.com/angel/fortune-cookie-message">Fortune Cookie Message</a>
            </li>
            <li class="nav-item <?=$title=='Daily Horoscope'?'active':''?>">
              <a class="nav-link" href="https://www.askangelblessing.com/angel/daily-horoscope">Daily Horoscope</a>
            </li>
            <li class="nav-item <?=$title=='Five Element Reading'?'active':''?>">
              <a class="nav-link" href="https://www.askangelblessing.com/angel/five-element">Five Elements Reading</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.askangelblessing.com/12-chinese-zodiac-signs/">12 Chinese Zodiac Signs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.askangelblessing.com/angel/coffee-cup-reading/">Coffee Cup Reading For The Day</a>
            </li>
            <li class="nav-item <?=$title=='Crystal Ball Reading'?'active':''?>">
              <a class="nav-link" href="https://www.askangelblessing.com/angel/crystal-ball">Crystal Ball Reading</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>