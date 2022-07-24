@extends('layouts.main')

@section('anthem')
<section class="ninth-img" id="anthem">

  <div class="col-sm-12">
    <div class="container-fluid">
      <img class="anthem-label uk-position-left" src="image/anthem-label.png" alt="">
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-sm-12 d-flex justify-content-center">
        <div class="card anthem-pos uk-width-2xlarge ">
          <div class="card-body">
            <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" width="1800" height="1200" loop muted playsinline uk-video="autoplay: inview"></video>
            <!-- <div class="anthem-judul text-center">
              <h4>Bakti Anthem</h4>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>


</section>

@endsection