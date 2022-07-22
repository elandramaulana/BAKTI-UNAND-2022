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

    <section class="six-img" id="sambutan" style="background-color: #d4e0d4;">
      <nav class="navbar navbar-expand-lg" style="background-color: #d4e0d4;">
        <div class="container-fluid" style="background-color: #d4e0d4;">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color: #d4e0d4;"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="background-color: #d4e0d4;">
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
        <button class="uk-button uk-button-default uk-button-large info3">Fakultas dan Jurusan</button>
    </p>

    <div class="uk-child-width-expand@s uk-text-center" uk-grid style="margin:0 20px; margin-top:120px">
        <div>
            <div class="uk-flex mt-3">
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0">
                    <img  src="image/cover.png" width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png" width="250px" height="160px" alt="">
                    <p>Faperta<p>
                </div>
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                    <img  src="image/cover.png" width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png" width="250px" height="160px" alt="">
                    <p>Farmasi<p>
                </div>
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                    <img  src="image/cover.png" width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png" width="250px" height="160px" alt="">
                    <p>Fateta<p>
                </div>
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                    <img  src="image/cover.png" width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png" width="250px" height="160px" alt="">
                    <p>Faterna<p>
                </div>
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                    <img  src="image/cover.png" width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png" width="250px" height="160px" alt="">
                    <p>FEB<p>
                </div>
            </div>
            <div class="uk-flex mt-3">
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0">
                    <img  src="image/cover.png"  width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png"  width="250px" height="160px" alt="">
                    <p>FH<p>
                </div>
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                    <img  src="image/cover.png"  width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png"  width="250px" height="160px" alt="">
                    <p>FIB<p>
                </div>
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                    <img  src="image/cover.png"  width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png"  width="250px" height="160px" alt="">
                    <p>FISIP<p>
                </div>
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                    <img  src="image/cover.png"  width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png"  width="250px" height="160px" alt="">
                    <p>FK<p>
                </div>
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                    <img  src="image/cover.png"  width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png"  width="250px" height="160px" alt="">
                    <p>FKEP<p>
                </div>
            </div>
            <div class="uk-flex mt-3">
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0">
                    <img  src="image/cover.png"  width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png" width="270px" height="160px" alt="">
                    <p>FKG<p>
                </div>
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                    <img  src="image/cover.png"  width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png"  width="250px" height="160px" alt="">
                    <p>FKM<p>
                </div>
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                    <img  src="image/cover.png"  width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png"  width="250px" height="160px" alt="">
                    <p>FMIPA<p>
                </div>
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                    <img  src="image/cover.png"  width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png"  width="250px" height="160px" alt="">
                    <p>FT<p>
                </div>
                <div class="uk-card uk-card-default mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                    <img  src="image/cover.png"  width="250px" height="160px" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="image/peta.png"  width="250px" height="160px" alt="">
                    <p>FTI<p>
                </div>
            </div>
        </div>
    </div>

    </section>

    <script src="https://kit.fontawesome.com/ddc2e77247.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   </body>
</html>
