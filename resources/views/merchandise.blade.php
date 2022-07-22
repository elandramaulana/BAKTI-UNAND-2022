<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="image/logo.png" type="image" sizes="20x20">
        <title>BAKTI UNAND 2022</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="style/app.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">

        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>

   <body> 

    <section class="third-img" id="sambutan" style="background-color: #d5ded5;">
      <nav class="navbar navbar-expand-lg" style="background-color: #d5ded5;">
        <div class="container-fluid" style="background-color: #d5ded5;">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color: #d5ded5;"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="background-color: #d5ded5;">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Logo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Maskot</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Peta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <p uk-margin>
        <button class="uk-button uk-button-default uk-button-large info4" >Merchandise</button>
    </p>

    <h4 style="margin-left:20px"><b>Pilihan Paket</h4>
        <div class="uk-slider-container-offset" uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" style="margin:0 30px">
        
                <ul class="uk-slider-items uk-child uk-grid">
                    <li>
                        <div class="uk-card uk-card-default"  style="border-radius:20px">
                            <div class="uk-card-media-top">
                                <img src="image/paket1.png" width="350" height="100"  style="border-radius:20px" alt="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default"  style="border-radius:20px">
                            <div class="uk-card-media-top">
                                <img src="image/paket2.png" width="350" height="100"  style="border-radius:20px" alt="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default"  style="border-radius:20px">
                            <div class="uk-card-media-top">
                                <img src="image/paket3.png" width="350" height="100"  style="border-radius:20px" alt="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default"  style="border-radius:20px">
                            <div class="uk-card-media-top">
                                <img src="image/paket4.png" width="350" height="100"  style="border-radius:20px" alt="">
                            </div>
                        </div>
                    </li>
                </ul>
        
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        
            </div>
        
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
        
        </div>


        
    <h4 style="margin-left:20px"><b>Koleksi Merchandise</h4>
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
    
    </section>

    <script src="https://kit.fontawesome.com/ddc2e77247.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   </body>
</html>
