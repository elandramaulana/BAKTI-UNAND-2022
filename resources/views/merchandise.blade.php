<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<<<<<<< HEAD

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

    <section class="fifth-img" id="sambutan">
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
            <button class="uk-button uk-button-default uk-button-large info4">Merchandise</button>
        </p>

        <h4 style="margin-left:20px"><b>Pilihan Paket</h4>
        <div class="uk-slider-container-offset" uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" style="margin:0 30px">

                <ul class="uk-slider-items uk-child uk-grid">
                    <li>
                        <div class="uk-card uk-card-default" style="border-radius:20px">
                            <div class="uk-card-media-top">
                                <img src="image/paket1.png" width="350" height="100" style="border-radius:20px" alt="">
=======
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

    <section class="third-img" id="sambutan">
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
        <button class="uk-button uk-button-default uk-button-large info4" >Merchandise</button>
    </p>

    <h5 style="margin-left:20px"><b>Pilihan Paket</h5>
        <div class="uk-slider-container-offset" uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" style="margin:0 30px">
        
                <ul class="uk-slider-items uk-child uk-grid">
                    <li>
                        <div class="uk-card uk-card-default"  style="border-radius:20px">
                            <div class="uk-card-media-top">
                                <img src="image/paket1.png" width="350" height="100"  style="border-radius:20px" alt="">
>>>>>>> 99c6002c77cb12cb15b422c4137438f5decee21e
                            </div>
                        </div>
                    </li>
                    <li>
<<<<<<< HEAD
                        <div class="uk-card uk-card-default" style="border-radius:20px">
                            <div class="uk-card-media-top">
                                <img src="image/paket2.png" width="350" height="100" style="border-radius:20px" alt="">
=======
                        <div class="uk-card uk-card-default"  style="border-radius:20px">
                            <div class="uk-card-media-top">
                                <img src="image/paket2.png" width="350" height="100"  style="border-radius:20px" alt="">
>>>>>>> 99c6002c77cb12cb15b422c4137438f5decee21e
                            </div>
                        </div>
                    </li>
                    <li>
<<<<<<< HEAD
                        <div class="uk-card uk-card-default" style="border-radius:20px">
                            <div class="uk-card-media-top">
                                <img src="image/paket3.png" width="350" height="100" style="border-radius:20px" alt="">
=======
                        <div class="uk-card uk-card-default"  style="border-radius:20px">
                            <div class="uk-card-media-top">
                                <img src="image/paket3.png" width="350" height="100"  style="border-radius:20px" alt="">
>>>>>>> 99c6002c77cb12cb15b422c4137438f5decee21e
                            </div>
                        </div>
                    </li>
                    <li>
<<<<<<< HEAD
                        <div class="uk-card uk-card-default" style="border-radius:20px">
                            <div class="uk-card-media-top">
                                <img src="image/paket4.png" width="350" height="100" style="border-radius:20px" alt="">
=======
                        <div class="uk-card uk-card-default"  style="border-radius:20px">
                            <div class="uk-card-media-top">
                                <img src="image/paket4.png" width="350" height="100"  style="border-radius:20px" alt="">
>>>>>>> 99c6002c77cb12cb15b422c4137438f5decee21e
                            </div>
                        </div>
                    </li>
                </ul>
<<<<<<< HEAD

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>



        <h4 style="margin-left:20px"><b>Koleksi Merchandise</h4>
=======
        
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        
            </div>
        
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
        
        </div>


        
    <h5 style="margin-left:20px"><b>Koleksi Merchandise</h5>
>>>>>>> 99c6002c77cb12cb15b422c4137438f5decee21e
        <div class="uk-child-width-expand@s" uk-grid style="margin:0 20px;">
            <div>
                <div class="uk-flex mt-3">
                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;margin-left:70px">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="image/item1.png" style="border-radius:20px" width="170px" height="120px" alt="">
                    </div>
                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;margin-left:40px">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="image/item2.png" style="border-radius:20px" width="170px" height="120px" alt="">
                    </div>
                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;margin-left:40px">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="image/item3.png" style="border-radius:20px" width="170px" height="120px" alt="">
                    </div>
                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;margin-left:40px">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="image/item4.png" style="border-radius:20px" width="170px" height="120px" alt="">
                    </div>
                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;margin-left:40px">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="image/item5.png" style="border-radius:20px" width="170px" height="120px" alt="">
                    </div>
                </div>
                <div class="uk-flex mt-3">
                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;margin-left:170px">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="image/item6.png" style="border-radius:20px" width="170px" height="120px" alt="">
                    </div>
                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;margin-left:40px">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="image/item7.png" style="border-radius:20px" width="170px" height="120px" alt="">
                    </div>
                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;margin-left:40px">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="image/item8.png" style="border-radius:20px" width="170px" height="120px" alt="">
                    </div>
                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;margin-left:40px">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="image/item9.png" style="border-radius:20px" width="170px" height="120px" alt="">
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD

=======
    
>>>>>>> 99c6002c77cb12cb15b422c4137438f5decee21e
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
<<<<<<< HEAD

</html>
=======
</html>
>>>>>>> 99c6002c77cb12cb15b422c4137438f5decee21e
