@extends('layouts.main')

@section('sambutan')

<section class="first-img" id="sambutan">

  <div class="col-sm-12">
    <div class="container-fluid">
      <img class="sambutan-label uk-position-left" src="image/sambutan-label.png" alt="">
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class=" card card1">
          <div class=" card-body">
            <button class="uk-button uk-button-default uk-margin-bottom" type="button" uk-toggle="target: +">Tonton Video</button>
            <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
            <div class="nama-sambutan text-center">
              <h4>Prof. Dr. Yuliandri, SH, MH</h4>
              <h6>Rektor Universitas Andalas</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card card2">
          <div class="card-body">
            <button class="uk-button uk-button-default uk-margin-bottom" type="button" uk-toggle="target: +">Tonton Video</button>
            <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
            <div class="nama-sambutan text-center">
              <h4>Agib Zainuranda</h4>
              <h6>Ketua Pelaksana BAKTI 2022</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection