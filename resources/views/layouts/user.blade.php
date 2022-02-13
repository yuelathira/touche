<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Touché Development Center</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('user/images/logo.png')}}" rel="icon">
  <link href="{{asset('user/images/logo.png')}}" rel="apple-touch-icon">

  {{-- Remix Icon --}}
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <!-- Swiper js -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('user/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <!-- Owl Carousel File -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Libraries CSS Files -->
  <link href="{{asset('user/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('user/lib/animate/animate.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('user/css/styles.css')}}" rel="stylesheet">

  @yield('header')


</head>

<body>

  @php
  $url = request()->segment(1);
  @endphp

  <!--========================== Header ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="/home">
          <img src="{{asset('user/images/logo.png')}}"></img>
        </a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="{{$url=='home'?'menu-active':''}}"><a href="{{url('home')}}">Beranda</a></li>
          <li class="{{$url=='article'?'menu-active':''}}"><a href="{{url('article')}}">Artikel</a></li>
          <li class="{{$url=='services'?'menu-active':''}}"><a href="{{url('services')}}">Layanan</a></li>
          <li class="{{$url=='contact'?'menu-active':''}}"><a href="{{url('contact')}}">Kontak</a></li>
          {{-- <li class="{{$url=='contact'?'menu-active':''}}"><a href="{{url('contact')}}">Coba Artikel </a></li> --}}
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <a class="btn-whatsapp" href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
    target="_blank">
    <i class="ri-whatsapp-fill"></i></a>
  <!--========================== Hero Section ============================-->
  <section id="hero">
    <div class="hero-container">
      @yield('hero')
    </div>
  </section>

  <main id="main">

    @yield('content')

  </main>

  {{-- <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent=" target="_blank"
    class="float">
    <i class="fab fa-whatsapp fa-3x my-float" aria-hidden="true"></i>
  </a> --}}



  <!-- Swiper js -->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.swiper', {
  grabCursor:true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
  },
  speed: 1000,
  loop:true,
  autoplay:{
    delay:4000,
  },
  breakpoints:{
    576:{
      slidesPerView: 1,
      spaceBetween: 0,
      slidesPerGroup:1,
      centeredSlides:false,
    },
    768:{
      slidesPerView: 2,
      spaceBetween: 10,
      slidesPerGroup:1,
      centeredSlides:false,
    },
    992:{
      slidesPerView: 2,
      spaceBetween: 25,
      slidesPerGroup:1,
      centeredSlides:false,
    },
    1200:{
      slidesPerView: 3,
      spaceBetween: 10,
      slidesPerGroup:3,
      centeredSlides:true,
    },
    1600:{
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup:3,
      centeredSlides:true,
    }
  },
});
  </script>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
  </script>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- OWL carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin: 10,
      nav:false,
      autoplay:true,
      dots:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:3
          }
      }
  })
  </script>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright &copy;2021 All Rights Reserved TOUCHÉ
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('user/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('user/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('user/lib/wow/wow.min.js')}}"></script>

  <script src="{{asset('user/lib/superfish/superfish.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  {{-- <script src="{{asset('user/contactform/contactform.js')}}"></script> --}}

  <!-- Template Main Javascript File -->
  <script src="{{asset('user/js/main.js')}}"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</body>

</html>