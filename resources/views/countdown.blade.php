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
  
<section id="landing-page">
    <div class="main-img">
      <div class="back-container">
        <div class="container text-center">
          <div class="col-sm-12">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6"></div>
  
                <div class="col-sm-6">
                  <div class="welcome-info">
                    <div class="text-center">
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

                <a class="uk-button uk-button-default" href="#modal-center" uk-toggle>Open</a>

                <div id="modal-center" class="uk-flex-top" uk-modal width="800">
                    <div class="uk-modal-dialog uk-modal-body uk-auto-vertical"  align="center">

                        <button class="uk-modal-close-default" type="button" uk-close></button>

                        <h3 style="color:#54744F;font-weight:800">COMING SOON</h3>
                        <h3 style="color:#FF6A3B;font-weight:800">BAKTI UNAND 2022</h3>
                        <h6 style="color:#54744F">14 Agustus 2022</h6>

                        <div class="uk-grid-small uk-child-width-auto" uk-grid uk-countdown="date: 2022-08-14T02:42:08+00:00" style="margin-left:16px;margin-top:40px">
                          <div style="background-color:#54744F;padding:8px 8px 8px 8px;border-radius:10px">
                              <div class="uk-countdown-number uk-countdown-days" style="background-color:#54744F;color:white;margin-bottom:10px;font-size:80px"></div>
                              <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s" style="background-color:#91C789;color:white;margin-top:10px;border-radius:10px">DAYS</div>
                          </div>
                          <div class="uk-countdown-separator" style="margin-right:10px">:</div>
                          <div style="background-color:#54744F;padding:8px 8px 8px 8px;border-radius:10px">
                              <div class="uk-countdown-number uk-countdown-hours"style="background-color:#54744F;color:white;margin-bottom:10px;font-size:80px"></div>
                              <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s" style="background-color:#91C789;color:white;margin-top:10px;border-radius:10px">HOURS</div>
                          </div>
                          <div class="uk-countdown-separator" style="margin-right:10px">:</div>
                          <div style="background-color:#54744F;padding:8px 8px 8px 8px;border-radius:10px">
                              <div class="uk-countdown-number uk-countdown-minutes" style="background-color:#54744F;color:white;margin-bottom:10px;font-size:80px"></div>
                              <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s" style="background-color:#91C789;color:white;margin-top:10px;border-radius:10px">MINUTES</div>
                          </div>
                          <div class="uk-countdown-separator" style="margin-right:10px">:</div>
                          <div style="background-color:#54744F;padding:8px 8px 8px 8px;border-radius:10px">
                              <div class="uk-countdown-number uk-countdown-seconds" style="background-color:#54744F;color:white;margin-bottom:10px;font-size:80px"></div>
                              <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s" style="background-color:#91C789;color:white;margin-top:10px;border-radius:10px">SECONDS</div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

  </body>
</html>