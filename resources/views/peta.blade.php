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

    <section class="sec-img" id="sambutan" style="background-color: #d6e7cf;">
      <nav class="navbar navbar-expand-lg" style="background-color: #d6e7cf;">
        <div class="container-fluid" style="background-color: #d6e7cf;">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color: #d6e7cf;"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="background-color: #d6e7cf;">
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
        <button class="uk-button uk-button-default uk-button-large info" >Peta Unand</button>
    </p>

      <div class="uk-child-width-1-2@m" uk-grid style="margin-left:460px">
        <div>
            <div class="uk-cardt">
                <div class="uk-media-bottom" uk-toggle="target: #modal-close-default">
                    <img src="image/map.png" width="1200" height="600" alt="">
                </div>
            </div>
        </div>

        <div id="modal-close-default" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <img src="image/map.png" width="1200" height="600" alt="">
            </div>
        </div>
    </div>
    </section>

    <script src="https://kit.fontawesome.com/ddc2e77247.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   </body>
</html>
