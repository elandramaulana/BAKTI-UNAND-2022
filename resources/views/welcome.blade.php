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
        <link rel="stylesheet" href="style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">


        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
   <body>

    
    {{-- Landing Page --}}

    <section class="main-img" id="landing-page">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="image/logo.png" alt="BAKTI 2022" width="80" height="80">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="row">
        <div class="col-sm-6"></div>

        <div class="col-sm-6">
          <div id="welcome-info">
            <div class="container text-center">
                <h1>
                    BAKTI
                </h1>
                <h2>
                    UNIVERSITAS ANDALAS
                </h2>
                <h4>
                    2022
                </h4>
            </div>
          </div>
        </div>
      </div>

        
    </section>

    {{-- End Of landing Page --}}

    {{-- About --}}

    <section class="second-img">
      <div id="test-target" class="uk-height-large uk-background-cover uk-light uk-flex " uk-parallax="bgy: -55">
        <div class="col-sm-12">
        <div class="container-fluid">
          <div uk-parallax="target: #test-target; y: -10,40">
            <img class="aboutImg uk-position-right" src="image/ApaItuBakti.png" alt="">
          </div>
        </div>
        <div class="container">
          <p id="test-target" class="text-center about-content uk-height-large uk-background-cover uk-light uk-flex " uk-parallax="target: #test-target; y: 100,40">
            BAKTI (Bimbingan Aktivitas Kemahasiswaan dalam Tradisi Ilmiah) adalah<br> kegiatan pengenalan terhadap program pendidikan, tradisi ilmiah dan <br> pembinaan kegiatan kemahasiswaan di perguruan tinggi bagi mahasiswa <br> baru Universitas Andalas 
          </p>
        </div>  
        </div> 
        
    </div>
    </section>

    {{-- End About --}}


    {{-- Timeline --}}
    {{-- <section>
      <div id="test-target" class="third-img uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: -80">

        <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="target: #test-target; y: -100,10">Headline</h1>
    
    </div>
    </section> --}}
    {{-- End Timeline --}}
   
    <script src="https://kit.fontawesome.com/ddc2e77247.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   </body>
</html>
