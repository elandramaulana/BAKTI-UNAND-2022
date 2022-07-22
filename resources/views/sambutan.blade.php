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

    <section class="first-img" id="sambutan">
      <nav class="navbar navbar-expand-lg" style="background-color: #daefca;">
        <div class="container-fluid" style="background-color: #daefca;">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color: #daefca;"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="background-color: #daefca;">
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
        <button class="uk-button uk-button-default uk-button-large info">Sambutan</button>
    </p>

    <div class="uk-child-width-expand@s uk-text-center" uk-grid style="margin:10px 50px">
        <div>
            <div class="uk-card mt-5">
                <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" width="400" height="300" loop muted playsinline uk-video="autoplay: inview"></video>
            </div>
            <div class="ket">
                <h4 class="mt-5"><b>Prof. Dr. Yuliandri, SH, MH<br>Rektor Universitas Andalas</h4>
            </div>
        </div>
        <div>
            <div class="uk-card mt-5">
                <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" width="400" height="300" loop muted playsinline uk-video="autoplay: inview"></video>
            </div>
            <div class="ket">
                <h4 class="mt-5"><b>Agib Zainuranda<br>Ketua Pelaksana BAKTI 2022</h4>
            </div>
        </div>
    </div>
    </section>

    <script src="https://kit.fontawesome.com/ddc2e77247.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   </body>
</html>
