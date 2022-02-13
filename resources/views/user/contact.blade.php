@extends('layouts.user')

@section('header')
<style>
  #hero {
    background: url('{{asset('user/images/contact.jpg')}}') top center;
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
  }
</style>
@endsection

@section('hero')
<h1>Hubungi Kami</h1>
<h2>Hubungi Kami Sekarang Juga!</h2>
@endsection

@section('content')

<section id="contact">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h3 class="section-title">Kontak</h3>
      {{-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      <p class="section-description"></p> --}}
    </div>
  </div>

  {{-- <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div> --}}

  <div class="container wow fadeInUp kontak">
    <div class="row justify-content-center">

      <div class="col-lg-3 col-md-4">

        <div class="info">
          <div>
            <i class="fa fa-map-marker social-links"></i>
            <p> Daerah Istimewa Yogyakarta</p>
          </div>

          <div>
            <i class="fa fa-envelope social-links"></i>
            <p><a href="mailto:admin@touche.id" target="_blank"> admin@touche.id</a></p>
          </div>

          <div>
            <i class="fa fa-phone"></i>
            <p><a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent=" target="_blank"> 0813-2828-3875</a></a></p>
          </div>
        </div>

        <div class="social-links">
          <a href="https://twitter.com/toucheid" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/toucheid/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://open.spotify.com/show/7FRDkeRmefEX0cLCNgb7Y1?si=hNHZO1GTQBGvCJEc4LGOOg&dl_branch=1" target="_blank" class="google-plus"><i class="fab fa-spotify"></i></a>
          <a href="https://vt.tiktok.com/ZSJcRKen8/" target="_blank" class="google-plus"><i class="fab fa-tiktok"></i></i></a>
          <a href="https://www.linkedin.com/company/touch%C3%A9-development-center/" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a>
        </div>

      </div>

      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSezgS1fPW85mnOlC4oDZqBrESSFpdHs8VsAXNokpc_jGicm_A/viewform?embedded=true" width="640" height="855" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>


    </div>

  </div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</section><!-- #contact -->
@endsection