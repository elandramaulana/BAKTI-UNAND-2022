@extends('layouts.main')

@section('landing-page')
{{-- Landing Page --}}
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
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Of landing Page --}}

@endsection



@section('about')

<div uk-parallax="target: #test-target; y: -10,200">
  <img class="aboutImg uk-position-right" src="image/ApaItuBakti.png" alt="">
  <div class="col-sm-12">
    <p id="test-target" class=" text-center uk-flex-center@m about-content uk-height-large uk-background-cover uk-light uk-flex " uk-parallax="target: #test-target; y: 100,40">
      BAKTI (Bimbingan Aktivitas Kemahasiswaan dalam Tradisi Ilmiah) adalah<br> kegiatan pengenalan terhadap program pendidikan, tradisi ilmiah dan <br> pembinaan kegiatan kemahasiswaan di perguruan tinggi bagi mahasiswa <br> baru Universitas Andalas
    </p>
  </div>

  <div class="col-sm-12">
    <div class="container">
      <div class="">
        <div class="uk-position-bottom uk-visible-toggle uk-light" tabindex="-1" uk-slider>

          <ul class="uk-slider-items uk-child-width-1-3@m" uk-grid uk-height-match="target: > div > div > div > .uk-card-small; row: false">
            <li>
              <div class="uk-panel">
                <div class="uk-card uk-card-small uk-height-medium uk-card-hover uk-card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-2">
                        <h1>1</h1>
                      </div>
                      <div class="col">
                        <p>Setiap mahasiswa atau mahasiswi baru Universitas Andalas wajib mengikuti rangkaian kegiatan ini.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="uk-panel">
                <div class="uk-card uk-card-small uk-height-medium uk-card-hover uk-card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-2">
                        <h1>2</h1>
                      </div>
                      <div class="col">
                        <p>Mahasiswa atau mahasiswi baru Universitas Andalas akan didampingi oleh uda dan uni mentor yang siap membantu serta mendampingi dalam rangkaian kegiatan BAKTI berlangsung.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="uk-panel">
                <div class="uk-card uk-card-small uk-height-medium uk-card-hover uk-card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-2">
                        <h1>3</h1>
                      </div>
                      <div class="col">
                        <p>Setiap mahasiswa baru Universitas Andalas akan diberikan penugasan selama rangkaian kegiatan BAKTI Universitas Andalas tahun 2021.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="uk-panel">
                <div class="uk-card uk-card-small uk-height-medium uk-card-hover uk-card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-2">
                        <h1>4</h1>
                      </div>
                      <div class="col">
                        <p>Menanamkan nilai-nilai Andalasian Character kepada mahasiswa baru.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>

          <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
          <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>
      </div>
    </div>
  </div>

</div>
@endsection


@section('timeline')
{{-- Timeline --}}
<div id="test-target" class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: 20">
  <div class="col-sm-12">
    <div class="third-img container-fluid">
      <div uk-parallax="target: #test-target; y: -10,200">
        <img class="timelineImg uk-position-left" src="image/TimelineJudul.png" alt="">

        <div class="col-sm-12">
          <div class="container d-flex justify-content-center">
            <img uk-parallax="opacity: 0,1; scale: 1.5,1; end: 50vh + 50%;" class="timeline-tree" src="image/tree.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

{{-- End Timeline --}}
@endsection