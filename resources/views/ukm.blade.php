<<<<<<< HEAD
@extends('layouts.main')

@section('ukm')

<section class="first-img" id="ukm">

    <div class="col-sm-12">
        <div class="container-fluid">
            <img class="ukm-label uk-position-left" src="image/ukm-label.png" alt="">
        </div>
    </div>


    <div class="uk-position-ralative uk-visible-toggle uk-light" tabindex="-1" uk-slider="clsActivated: uk-transition-active; center: true">

        <ul class="ukm-pos uk-slider-items" uk-grid>
            <li class="uk-child-width-1-1@s">
                <div class="uk-panel">
                    <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" width="800" height="1200" loop muted playsinline uk-video="autoplay: inview"></video>
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                        <h3 class="uk-margin-remove">UKM NEOTELEMETRI</h3>
                    </div>
                </div>
            </li>
            <li class="uk-child-width-1-1@s">
                <div class="uk-panel">
                    <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" width="800" height="1200" loop muted playsinline uk-video="autoplay: inview"></video>
=======
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="image/logo.png" type="image" sizes="20x20">
        <title>BAKTI UNAND 2022</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/app.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
      </head>

   <body> 

    <section class="first-img" id="sambutan">
        <div id="nav-page">
            <div class="container-fluid">
              <nav class="uk-navbar uk-navbar-container uk-navbar-transparent uk-margin" uk-navbar>
                <a class="navbar-brand" href="#">
                  <img src="image/logo.png" alt="" width="70" height="50">
                </a>
                <div class="uk-navbar-right">
        
                  <ul class="uk-navbar-nav">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/logo">Logo</a></li>
                    <li><a href="/maskot">Maskot</a></li>
                    <li><a href="/peta">Peta</a></li>
                  </ul>
        
        
                  <a class="uk-navbar-toggle uk-navbar-toggle-animate" uk-navbar-toggle-icon href="#"></a>
                  <div class="uk-navbar-dropdown nav-backs">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                      <li><a href="/sambutan">Sambutan</a></li>
                      <li><a href="/fakultas">Fakultas dan Jurusan</a></li>
                      <li><a href="/ukm">Unit Kegiatan Mahasiswa</a></li>
                      <li><a href="/anthem">Bakti Anthem Player</a></li>
                      <li><a href="/merch">Merchendise</a></li>
                      <li><a href="/tugas">Tugas</a></li>
                      <li><a href="/gallery">Gallery</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
        
            </div>
        
          </div>

    <p uk-margin>
        <button class="uk-button uk-button-default uk-button-large info">Pengenalan UKM</button>
    </p>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="clsActivated: uk-transition-active; center: true"  style="margin:0 30px; padding:40px 40px">

        <ul class="uk-slider-items uk-grid">
            <li class="uk-width-1-2">
                <div class="uk-panel">
                    <img src="image/example.png" width="700" height="100" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                        <h3 class="uk-margin-remove">UKM NEO TEMELETRI</h3>
                    </div>
                </div>
            </li>
            <li class="uk-width-1-2">
                <div class="uk-panel">
                    <img src="image/example.png" width="700" height="100" alt="">
>>>>>>> 99c6002c77cb12cb15b422c4137438f5decee21e
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                        <h3 class="uk-margin-remove">UKM PRAMUKA</h3>
                    </div>
                </div>
            </li>
<<<<<<< HEAD
            <li class="uk-child-width-1-1@s">
                <div class="uk-panel">
                    <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" width="800" height="1200" loop muted playsinline uk-video="autoplay: inview"></video>
=======
            <li class="uk-width-1-2">
                <div class="uk-panel">
                    <img src="image/example.png" width="700" height="100" alt="">
>>>>>>> 99c6002c77cb12cb15b422c4137438f5decee21e
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                        <h3 class="uk-margin-remove">UKM UKS</h3>
                    </div>
                </div>
            </li>
<<<<<<< HEAD
            <li class="uk-child-width-1-1@s">
                <div class="uk-panel">
                    <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" width="800" height="1200" loop muted playsinline uk-video="autoplay: inview"></video>
=======
            <li class="uk-width-1-2">
                <div class="uk-panel">
                    <img src="image/example.png" width="700" height="100" alt="">
>>>>>>> 99c6002c77cb12cb15b422c4137438f5decee21e
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                        <h3 class="uk-margin-remove">UKM MAPALA</h3>
                    </div>
                </div>
            </li>
<<<<<<< HEAD
            <li class="uk-child-width-1-1@s">
                <div class="uk-panel">
                    <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" width="800" height="1200" loop muted playsinline uk-video="autoplay: inview"></video>
=======
            <li class="uk-width-1-2">
                <div class="uk-panel">
                    <img src="image/example.png" width="700" height="100" alt="">
>>>>>>> 99c6002c77cb12cb15b422c4137438f5decee21e
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                        <h3 class="uk-margin-remove">UKM PMR</h3>
                    </div>
                </div>
            </li>
        </ul>
<<<<<<< HEAD

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>
</section>

@endsection
=======
    
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
    
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>  
</body>
</html>
>>>>>>> 99c6002c77cb12cb15b422c4137438f5decee21e
