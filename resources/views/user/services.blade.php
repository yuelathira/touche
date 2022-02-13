@extends('layouts.user')

@section('header')
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

  #hero {
    background: url('{{asset('user/images/abouts.jpg')}}') top center;
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
  }

  table tbody {
    font-weight: 500;
  }
</style>
@endsection

@section('hero')
<h1>Layanan</h1>
<h2>tou·ché</h2>
<h2>/to͞oˈSHā/ - French, noun</h3>
  <h2>English: Touch | Bahasa: Sentuhan</h2>
  @endsection

  @section('content')

  <section id="team">
    <div class="justify-content-center">
      <div class="">
        <div class="section-header" style="padding-bottom: 10px;">
          <h1 class="section-title text-center mt-5" style="color:black">Yuk, kenalan dengan psikolog kami!</h1>
          {{-- <p class="section-description pl-3 pr-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium
            doloremque</p> --}}
        </div>

        <div class="wrap__psikolog">
          <h3 class="heading__psikolog">Psikolog Klinis</h3>
          <div class="card__slider">
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/devina.jpeg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Devina P.Zabrina, M.Psi., Psikolog</strong></h4>
                  <h6 style="color:black">Clinical Psychologist, Founder of TOUCHÉ Development Center</h6>
                  <hr>
                  <p>Spesialisasi Depresi, anxiety, loneliness, developmental crisis, cognitive impairment, loss and
                    grief, personality disorders</p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/riska.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Riska Rahmananda, M. Psi., Psikolog</strong></h4>
                  <h6 style="color:black">Clinical Psychologist, Associate Psychologist</h6>
                  <hr>
                  <p>Spesialisasi Pengalaman traumatik, hubungan dan pernikahan, masalah dengan orangtua, pengembangan
                    diri (self-development), perkembangan anak dan remaja</p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/deacy.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Deacy Anindya Putri, M.Psi., Psikolog
                    </strong></h4>
                  <h6 style="color:black">Clinical Psychologist, Associate Psychologist</h6>
                  <hr>
                  <p>Spesialis Gangguan kecemasan umum, kecemasan pada kehamilan, permasalahan pada hubungan dan
                    pernikahan, self-love dan self-care.</p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/jessica.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Jessica Dhoria Arywibowo, M.Psi., Psikolog
                    </strong></h4>
                  <h6 style="color:black">Clinical Psychologist</h6>
                  <hr>
                  <p>Spesialis Stres, kecemasan, depresi, relasi interpersonal, masalah perilaku, pengembangan diri,
                    parenting</p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/yulia.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Yulia Sahaja Dewi Permatasari, M.Psi., Psikolog</strong></h4>
                  <h6 style="color:black">Clinical Psychologist</h6>
                  <hr>
                  <p>Spesialis Relationship and marriage issue, Anxiety, depression, gangguan mood, loss and grief, self
                    esteem, childhood traumatic
                  </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/syafira.png')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Syafira Putri Ekayani, M.Psi., Psikolog</strong></h4>
                  <h6 style="color:black">Clinical Psychologist</h6>
                  <hr>
                  <p>Spesialis Stres, kecemasan, trauma, kesepian, overthinking, permasalahan emosi, self-love,
                    pemaafan, quarter life crisis, self-healing, pengembangan diri.
                  </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/reza.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Reza Para Yudha, M.Psi, Psikolog</strong></h4>
                  <h6 style="color:black">Clinical Psychologist</h6>
                  <hr>
                  <p>Spesialis Quarter life crisis, self harm, loneliness, insomnia, PTSD, relationship problem, phobia,
                    anxiety, CBT, MBCT, DBT, Forgiveness Therapy.
                  </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/secundina.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Secundina Mayasari Susanti, M.Psi., Psikolog
                    </strong></h4>
                  <h6 style="color:black">Clinical Psychologist</h6>
                  <hr>
                  <p>Spesialis kecemasan, mood disorder, hubungan asmara, pengalaman traumatis, menyakiti diri/pikiran
                    bunuh diri, seksualitas & gender, karir & masa depan, kepercayaan diri, permasalahan anak, konseling
                    pasangan.
                  </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/cherla.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Cherla Tri Aztuti M.Psi, Psikolog
                    </strong></h4>
                  <h6 style="color:black">Clinical Psychologist</h6>
                  <hr>
                  <p>Spesialis Kepribadian, self love, self harm, percintaan, keluarga, pola asuh, pernikahan,
                    kecemasan, depresi, pengendalian emosi.
                  </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/rizky.jpeg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Rizky Nadya Febriyanti, S.Psi, M.Psi., Psikolog
                    </strong></h4>
                  <h6 style="color:black">Clinical Psychologist</h6>
                  <hr>
                  <p>Spesialis Area Masalah Perkembangan, Masalah Perilaku Anak, Masalah Emosi Anak & Remaja, Masalah
                    Parenting/Pengasuhan, Kecemasan, Masalah dalam Hubungan Keluarga dan Pasangan, Trauma.
                  </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/reisha.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Reisha Hermana Maurits, M.Psi., Psikolog
                    </strong></h4>
                  <h6 style="color:black">Clinical Psychologist</h6>
                  <hr>
                  <p>Spesialis Gangguan kecemasan, masalah emosi & mood, masalah relasi interpersonal & percintaan,
                    Self-injury, suicidal ideation, dan masalah terkait stress.
                  </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/smita.jpeg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Smita Dinakaramani, M.Psi, Psikolog
                    </strong></h4>
                  <h6 style="color:black">Clinical Psychologist</h6>
                  <hr>
                  <p>Spesialis Kecemasan, Dinamika Pertemanan, Self-Esteem.
                  </p>
                </div>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>


        <div class="wrap__psikolog psikolog__pendidikan">
          <h3 class="heading__psikolog">Psikolog Pendidikan</h3>
          <div class="card__slider">
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/puteri.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Puteri Qohimah, M.Psi., Psikolog</strong></h4>
                  <h6 style="color:black">Educational Psychologist, Associate Psychologist</h6>
                  <hr>
                  <p>Spesialisasi wellness conseling, child development, self-development, parenting, motivation,
                    mindfullness, school problem.</p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/nuraini.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Nuraini Estiningtyas, S.Psi., M.Psi. Psikolog</strong></h4>
                  <h6 style="color:black">Educational Psychologist, Associate Psychologist</h6>
                  <hr>
                  <p>Spesialisasi Pendidikan</p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/caesar.png')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Caesar Astria Pusphita, M.Psi., Psikolog</strong></h4>
                  <h6 style="color:black">Educational Psychologist</h6>
                  <hr>
                  <p>Spesialis Psikologi Anak dan Psikologi Perkembangan.</p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/prapti.jpeg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Prapti Madyo Ratri, S.Psi., M.Psi., Psikolog
                    </strong></h4>
                  <h6 style="color:black">Educational Psychologist</h6>
                  <hr>
                  <p>Spesialis Tumbuh Kembang Anak, Remaja, Dewasa, Kecemasan, Stress Akademik, Motivasi Belajar,
                    Prestasi Belajar, Masalah Pendidikan. </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/sofina.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Sofina Tunnajah, S.Psi., M.Psi., Psikolog </strong></h4>
                  <h6 style="color:black">Educational Psychologist</h6>
                  <hr>
                  <p>Spesialis Parenting, tumbuh kembang anak, insecurity, kesulitan belajar, kelelahan emosi, relasi
                    asmara, self development.
                  </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/alfiah.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Alfiah Nur Rohmah, S.Psi, M.Psi., Psikolog </strong></h4>
                  <h6 style="color:black">Educational Psychologist</h6>
                  <hr>
                  <p>Spesialis permasalahan anak dan remaja, pengasuhan/parenting, pemilihan jurusan, bakat minat,
                    prokastinasi, perilaku agresif, motivasi belajar, hubungan asmara/percintaan.
                  </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/amy.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Amy Novalia Esmiati, S.Psi, M.Psi, Psikolog </strong></h4>
                  <h6 style="color:black">Educational Psychologist</h6>
                  <hr>
                  <p>Spesialis Permasalahan individu, kehidupan sekolah dan pendidikan, pengembangan diri, hubungan
                    relasi asmara, kecemasan.
                  </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/nufayla.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Nufayla Fahmayanti, S. Psi, M. Psi, Psikolog.
                    </strong></h4>
                  <h6 style="color:black">Educational Psychologist</h6>
                  <hr>
                  <p>Spesialis Anak, remaja, tema-tema seputar pernikahan dan keluarga terutama poligami,
                    perselingkuhan, dan ketiadaan anak.
                  </p>
                </div>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>


        <div class="wrap__psikolog psikolog__industri">
          <h3 class="heading__psikolog">Psikolog Industri & Organisasi</h3>
          <div class="card__slider">
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/elisa.jpeg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Elisa Kristiani, M.Psi, Psikolog </strong></h4>
                  <h6 style="color:black">Industrial & Organizational Psychologist</h6>
                  <hr>
                  <p>Spesialisasi Self Development, Career Path, Stress Management, Burn-out, Self Love, Work
                    Satisfaction, Motivation, Conflict Management, Leadership, Organizational Communication. </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/citra.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Citra Indriani Mandala, M.Psi., Psikolog </strong></h4>
                  <h6 style="color:black">Industrial & Organizational Psychologist</h6>
                  <hr>
                  <p>Spesialisasi Work life balance, asesmen kompetensi, training & perencanaan karir. </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/marsya.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Marsya Oktriana Poetri, M.Psi., Psikolog </strong></h4>
                  <h6 style="color:black">Industrial & Organizational Psychologist</h6>
                  <hr>
                  <p>Spesialisasi Perencanaan dan Pengembangan Karir, Burnout, Toxic Productivity, Kebutuhan Pelatihan
                    dan Pengembangan. </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/rahma.jpeg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Rahmadhini, M.Psi., Psikolog
                    </strong></h4>
                  <h6 style="color:black">Industrial & Organizational Psychologist</h6>
                  <hr>
                  <p>Spesialisasi Self Development, Career Planning, Relationship Issues (Friendship, Romantic, and Work
                    Colleague), Self Control, Work-Life Balance, Self Confidence. </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/dzikri.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Dzikri Hijriarahmah, M. Psi., Psikolog
                    </strong></h4>
                  <h6 style="color:black">Industrial & Organizational Psychologist</h6>
                  <hr>
                  <p>Spesialisasi Self Control (Dalam Dunia Kerja). </p>
                </div>
                <div class="swiper-slide card-box text-center">
                  <div class="user-pic">
                    <img src="{{asset('user/images/dita.jpg')}}" class="img-fluid" alt="User Pic">
                  </div>
                  <h4 style="color:black"><strong>Pramudita Ardianti M.Psi, Psikolog
                    </strong></h4>
                  <h6 style="color:black">Industrial & Organizational Psychologist</h6>
                  <hr>
                  <p>Spesialisasi Job analysis, Workload analysis, Training, coaching, mentoring Organization
                    development Psychological Assessment Employee evaluation"
                  </p>
                </div>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
        {{-- <div class="psikolog__flex">
          <div class="">
            <div class="card-box text-center">
              <div class="user-pic">
                <img src="{{asset('user/images/team1.jpg')}}" class="img-fluid" alt="User Pic">
              </div>
              <h4 style="color:black"><b>Puteri Qohimah, M.Psi., Psikolog</b></h4>
              <h6 style="color:black">Educational Psychologist, Associate Psychologist</h6>
              <hr>
              <p>Concerned about wellness conseling, child development, self-development, parenting, motivation,
                mindfullness, school problem.</p>
            </div>
          </div>

          <div class="">
            <div class="card-box text-center">
              <div class="user-pic">
                <img src="{{asset('user/images/team3.jpeg')}}" class="img-fluid" alt="User Pic">
              </div>
              <h4 style="color:black"><b>Devina P.Zabrina, M.Psi., Psikolog</b></h4>
              <h6 style="color:black">Clinical Psychologist, Founder of TOUCHÉ Development Center</h6>
              <hr>
              <p>Concerned about depression, anxiety, loneliness, development crisis, cognitive impairment, loss and
                grief, personality disorder.</p>
            </div>
          </div>

          <div class="">
            <div class="card-box text-center" style="padding-bottom: 20px;">
              <div class="user-pic">
                <img src="{{asset('user/images/team2.jpg')}}" class="img-fluid" alt="User Pic">
              </div>
              <h4 style="color:black"><b>Riska Rahmananda, M. Psi., Psikolog</b></h4>
              <h6 style="color:black">Clinical Psychologist, Associate Psychologist</h6>
              <hr>
              <p>Concerned about self-development, relationship issues (friendship, romantic, and family), trust issues,
                anxiety.</p>
            </div>
          </div>
          <div class="">
            <div class="card-box text-center">
              <div class="user-pic">
                <img src="{{asset('user/images/team4.jpg')}}" class="img-fluid" alt="User Pic">
              </div>
              <h4 style="color:black"><b>Elisa Kristiani, S.Psi, M.Psi, Psikolog</b></h4>
              <h6 style="color:black">Industrial-Organizational Psychologist, Associate Psychologist</h6>
              <hr>
              <p>Concerned about self-development, career path, stress management, burnout, self-love, work
                satisfaction, motivation, conflict management, leadership, organizational communication.</p>
            </div>
          </div>

          <div class="">
            <div class="card-box text-center" style="padding-bottom: 65px;">
              <div class="user-pic">
                <img src="{{asset('user/images/team5.jpg')}}" class="img-fluid" alt="User Pic">
              </div>
              <h4 style="color:black"><b>Ainurizan Ridho, M.Psi., Psikolog</b></h4>
              <h6 style="color:black">Clinical Psychologist</h6>
              <hr>
              <p>Concerned about depression, anxiety, quarter-life ceisis, interpersonal relationships</p>
            </div>
          </div>

          <div class="">
            <div class="card-box text-center" style="padding-bottom: 65px;">
              <div class="user-pic">
                <img src="{{asset('user/images/team6.jpg')}}" class="img-fluid" alt="User Pic">
              </div>
              <h4 style="color:black"><b>Deacy Anindya Putri, M. Psi., Psikolog</b></h4>
              <h6 style="color:black">Clinical Psychologist, Associate Psychologist</h6>
              <hr>
              <p>Concerned about general anxiety disorder, pregnancy- anxiety, relationship and marriage issues,
                self-love, self- care.</p>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>

  {{-- ----------------Section FAQ------------ --}}

  <section class="faq-section">
    <div class="section-header">
      <h1 class="section-title text-center" style="color:black">Pertanyaan Seputar TOUCHÉ</h1>
      {{-- <p class="section-description">Everything you need to know about the product</p> --}}
    </div>
    <div class="accordion-section">
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Offline Konseling<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                  class="bi bi-chevron-down float-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg>
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Offline konseling adalah konseling tatap muka atau home visit (psikolog datang ke rumah). Saat ini offline
              konseling hanya tersedia di YOGYAKARTA dan SURABAYA.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Mental Health Check Up<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                  class="bi bi-chevron-down float-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg>
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Selayaknya pemeriksaan kesehatan fisik umum (Medical Check Up), Mental Health Check Up adalah pemeriksaan
              kesehatan mental umum yang merupakan layanan unggulan dari TOUCHÉ Development Center
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Layanan untuk Bisnis<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                  class="bi bi-chevron-down float-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg>
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              TOUCHÉ tidak hanya melayani klien individu,namun juga memberikan layanan psikologi kepada
              perusahaan/instansi berupa asesmen, rekrutmen, training, outbound dll.* Selain perusahaan, TOUCHÉ juga
              aktif melayani ke sekolah maupun komunitas dalam bentuk konseling siswa, asesmen, webinar dll.*
              <br><br>*custom/sesuai permintaan klien
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  {{-- -----------Section Table Pricelist----------- --}}

  <section id="contact" class="service mt-5">
    <div class="justify-content-center">
      <div class="">
        <div class="section-header pl-2 pr-2">
          <h1 class="section-title text-center" style="color:black">Layanan Kami</h1>
          {{-- <p class="section-description pl-3 pr-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium
            doloremque</p> --}}
        </div>


        <div class="keterangan-service">
          <div class="ket__title">
            <p>Keterangan :</p>
          </div>
          <div class="ket__1">
            <i class="fas fa-thumbs-up" style="color: #706C2E"></i>
            <p>Top Pick</p>
          </div>
          <div class="ket__2">
            <i class="fas fa-asterisk" style="color: #706C2E"></i>
            <p>Recommended</p>
          </div>
          <div class="ket__3">
            <i class="fas fa-asterisk" style="color: #706C2E"><i class="fas fa-asterisk" style="color: #706C2E"></i></i>
            <p>Harga Sudah Termasuk Pajak</p>
          </div>
        </div>


        <div class="tabel-responsive">
          <table class="table table-responsive-sm">
            <thead class="text-center" color="#E9E5CC">
              <tr>
                <th bgcolor="#E9E5CC" scope="col">No.</th>
                <th bgcolor="#E9E5CC" scope="col" colspan="4">Psikotest</th>
                <th bgcolor="#E9E5CC" scope="col">Prices</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <th scope="row" rowspan="2">1</th>
                <td rowspan="2" colspan="2">Mental Healt Check-Up <i class="fas fa-thumbs-up"
                    style="color: #706C2E"></i></td>
                <td colspan="2">Online</td>
                <td>Rp 59,000</td>
              <tr>
                <td colspan="2">Offline</td>
                <td>Rp 89,000</td>
              </tr>
              </tr>
              <tr>
                <th scope="row" rowspan="2">2</th>
                <td rowspan="2" colspan="2">Test kesehatan Mental/Jiwa Klinis</td>
                <td colspan="2">Online</td>
                <td>Rp 269,000</td>
              <tr>
                <td colspan="2">Offline</td>
                <td>Rp 309,000</td>
              </tr>
              </tr>
              <tr>
                <th scope="row" rowspan="2">3</th>
                <td rowspan="2" colspan="2">Test Gambar</td>
                <td colspan="2">Online</td>
                <td>Rp 119,000</td>
              <tr>
                <td colspan="2">Offline</td>
                <td>Rp 149,000</td>
              </tr>
              </tr>
              <tr>
                <th scope="row" rowspan="2">4</th>
                <td rowspan="2" colspan="2">Tes IQ</td>
                <td colspan="2">Online</td>
                <td>Rp 209,000</td>
              <tr>
                <td colspan="2">Offline</td>
                <td>Rp 239,000</td>
              </tr>
              </tr>
              <tr>
                <th scope="row" rowspan="2">5</th>
                <td rowspan="2" colspan="2">Tes Kepribadian</td>
                <td colspan="2">Online</td>
                <td>Rp 119,000</td>
              <tr>
                <td colspan="2">Offline</td>
                <td>Rp 149,000</td>
              </tr>
              </tr>
              <tr>
                <th scope="row" rowspan="2">6</th>
                <td rowspan="2" colspan="2">Tes Minat</td>
                <td colspan="2">Online</td>
                <td>Rp 129,000</td>
              <tr>
                <td colspan="2">Offline</td>
                <td>Rp 159,000</td>
              </tr>
              </tr>
              <tr>
                <th scope="row" rowspan="2">7</th>
                <td rowspan="2" colspan="2">Tes Ketahanan Kerja</td>
                <td colspan="2">Online</td>
                <td>Rp 129,000</td>
              <tr>
                <td colspan="2">Offline</td>
                <td>Rp 159,000</td>
              </tr>
              </tr>
              <tr>
                <th scope="row" rowspan="2">8</th>
                <td rowspan="2" colspan="2">Paket Tes Potensi Review</td>
                <td colspan="2">Online</td>
                <td>Rp 469,000</td>
              <tr>
                <td colspan="2">Offline</td>
                <td>Rp 509,000</td>
              </tr>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="tabel-responsive mt-5">
          <table class="table table-responsive-sm">
            <thead class="text-center" color="#E9E5CC">
              <tr>
                <th bgcolor="#E9E5CC" scope="col">No.</th>
                <th bgcolor="#E9E5CC" scope="col" colspan="4">Online Counseling Services</th>
                <th bgcolor="#E9E5CC" scope="col">Prices</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <th scope="row" rowspan="2">1</th>
                <td rowspan="2" colspan="2">Individual Counseling <i class="fas fa-thumbs-up"
                    style="color: #706C2E"></i></td>
                <td colspan="2">60 mins</td>
                <td>Rp 139,000</td>
              <tr>
                <td colspan="2">90 mins</td>
                <td>Rp 179,000</td>
              </tr>
              </tr>
              <tr>
                <th scope="row" rowspan="2">2</th>
                <td rowspan="2" colspan="2">Couple Counseling (2 pax) <i class="fas fa-asterisk"
                    style="color: #706C2E"></i></td>
                <td colspan="2">60 mins</td>
                <td>Rp 189,000</td>
              <tr>
                <td colspan="2">90 mins</td>
                <td>Rp 229,000</td>
              </tr>
              </tr>
              <tr>
                <th scope="row" rowspan="2">3</th>
                <td rowspan="2" colspan="2">Career Counseling</td>
                <td colspan="2">60 mins</td>
                <td>Rp 139,000</td>
              <tr>
                <td colspan="2">90 mins</td>
                <td>Rp 179,000</td>
              </tr>
              </tr>
              <tr>
                <th scope="row" rowspan="2">4</th>
                <td rowspan="2" colspan="2">Child Counseling</td>
                <td colspan="2">60 mins</td>
                <td>Rp 189,000</td>
              <tr>
                <td colspan="2">90 mins</td>
                <td>Rp 229,000</td>
              </tr>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td colspan="2">Mental Health Check-Up</td>
                <td colspan="2">20 mins</td>
                <td>Rp 59,000</td>
              </tr>
              <tr>
                <th scope="row" rowspan="2">6</th>
                <td rowspan="2" colspan="2">Pre-Marital Counseling (2 pax)</td>
                <td colspan="2">60 mins</td>
                <td>Rp 189,000</td>
              <tr>
                <td colspan="2">90 mins</td>
                <td>Rp 229,000</td>
              </tr>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="tabel-responsive mt-5">
          <table class="table table-responsive-sm">
            <thead class="text-center" color="#E9E5CC">
              <tr>
                <th bgcolor="#E9E5CC" scope="col">No.</th>
                <th bgcolor="#E9E5CC" scope="col" colspan="4">Offline Counseling Services</th>
                <th bgcolor="#E9E5CC" scope="col">Prices</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <th scope="row" rowspan="3">1</th>
                <td rowspan="3" colspan="2">Individual Counseling</td>
                <td colspan="2">60 mins</td>
                <td>Rp 179,000</td>
              <tr>
                <td colspan="2">90 mins</td>
                <td>Rp 219,000</td>
              </tr>
              <td colspan="2">Home Visit</td>
              <td>Rp 259,000</td>
              </tr>
              <tr>
                <th scope="row" rowspan="3">2</th>
                <td rowspan="3" colspan="2">Couple Counseling (2 pax)</td>
                <td colspan="2">60 mins</td>
                <td>Rp 229,000</td>
              <tr>
                <td colspan="2">90 mins</td>
                <td>Rp 269,000</td>
              </tr>
              <td colspan="2">Home Visit</td>
              <td>Rp 319,000</td>
              </tr>
              <tr>
                <th scope="row" rowspan="3">3</th>
                <td rowspan="3" colspan="2">Career Counseling</td>
                <td colspan="2">60 mins</td>
                <td>Rp 179,000</td>
              <tr>
                <td colspan="2">90 mins</td>
                <td>Rp 219,000</td>
              </tr>
              <td colspan="2">Home Visit</td>
              <td>Rp 269,000</td>
              </tr>
              <tr>
                <th scope="row" rowspan="3">4</th>
                <td rowspan="3" colspan="2">Child Counseling</td>
                <td colspan="2">60 mins</td>
                <td>Rp 179,000</td>
              <tr>
                <td colspan="2">90 mins</td>
                <td>Rp 229,000</td>
              </tr>
              <td colspan="2">Home Visit</td>
              <td>Rp 269,000</td>
              </tr>
              <tr>
                <th scope="row" rowspan="">5</th>
                <td rowspan="" colspan="2">Mental Health Check-Up</td>
                <td colspan="2">20 mins</td>
                <td>Rp 89,000</td>
              </tr>
              <tr>
                <th scope="row" rowspan="3">6</th>
                <td rowspan="3" colspan="2">Pre-Martial Counseling (2 px)</td>
                <td colspan="2">60 mins</td>
                <td>Rp 229,000</td>
              <tr>
                <td colspan="2">90 mins</td>
                <td>Rp 269,000</td>
              </tr>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="tabel-responsive mt-5">
          <table class="table table-responsive-lg">
            <thead class="text-center" color="#E9E5CC">
              <tr>
                <th bgcolor="#E9E5CC" scope="col">No.</th>
                <th bgcolor="#E9E5CC" scope="col" colspan="4">Counseling Package</th>
                <th bgcolor="#E9E5CC" scope="col">Prices</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <th scope="row" rowspan="">1</th>
                <td rowspan="" colspan="2">Adult Package <i class="fas fa-thumbs-up" style="color: #706C2E"></i></td>
                <td colspan="2" class="text-left">- 4 sesi (@60 menit online)<br>- Free follow up consultation 30 menit
                </td>
                <td rowspan="">Rp 549,000</td>
              </tr>
              <tr>
                <th scope="row" rowspan="">2</th>
                <td rowspan="" colspan="2">Couple/Pre-Marital Package (2 pax) <i class="fas fa-asterisk"
                    style="color: #706C2E"></i></td>
                <td colspan="2" class="text-left">- 4 sesi (@60 menit online)<br>- Free follow up consultation 30 menit
                </td>
                <td rowspan="">Rp 749,000</td>
              </tr>
              <tr>
                <th scope="row" rowspan="">3</th>
                <td rowspan="" colspan="2">Family Package (2 pax or more)</td>
                <td colspan="2" class="text-left">- 4 sesi (@60 menit online)<br>- Free follow up consultation 30 menit
                </td>
                <td rowspan="">Rp 789,000</td>
              </tr>
              <tr>
                <th scope="row" rowspan="">4</th>
                <td rowspan="" colspan="2">Child Package</td>
                <td colspan="2" class="text-left">- 4 sesi (@60 menit online)<br>- Free follow up consultation 30 menit
                </td>
                <td rowspan="">Rp 749,000</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="tabel-responsive mt-5">
          <table class="table table-responsive-sm" border="2" style="border-color: #706C2E">
            <tbody class="text-center">
              <tr>
                <td rowspan="" colspan="2">Penerbitan Laporan Tertulis</td>
                <td colspan="2">Khusus sesi konseling</td>
                <td rowspan="">Rp 30,000</td>
              </tr>
            </tbody>
          </table>
        </div>

        {{-- <div class="d-flex justify-content-center">
          <div class="mt-2">
            <h3 class="header-consultation"><strong> Konsultasi Online </strong></h3>
          </div>
        </div>
        <div class="flex__card">
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Individu</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai kenyamanan klien
                selama 60 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 125k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Individu <br> Premium</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai kenyamanan klien
                selama 90 menit, sesi follow up 10 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 160k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Anak</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai kenyamanan klien
                selama 60 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 150k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Anak <br> Premium</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai kenyamanan klien
                selama 90 menit, sesi follow up 10 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 190k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Pasangan</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai kenyamanan klien
                selama 90 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 225k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Pasangan <br> Premium</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai kenyamanan klien
                selama 120 menit, sesi follow up 15 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 260K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center konsultasi__offline">
          <div class="mt-5">
            <h3 class="header-consultation"><strong> Konsultasi Offline </strong></h3>
          </div>
        </div>
        <div class="flex__card">
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Individu</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling tatap muka selama 60 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 160K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Individu <br> Premium</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling tatap muka selama 60 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 190k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Individu <br> (Home Visit)</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konselor datang ke rumah, konseling selama 90 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 230K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Anak</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling tatap muka selama 60 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 180k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Anak <br> Premium</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling tatap muka selama 90 menit, sesi follow up 10 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 210k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Anak <br> (Home Visit)</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konselor datang ke rumah, konseling selama 90 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 250K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Pasangan</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling tatap muka selama 90 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 260K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Pasangan <br> Premium</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling tatap muka selama 120 menit, sesi follow up 15 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 290K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Pasangan <br> (Home Visit)</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konselor datang ke rumah, konseling selama 120 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 330K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
        </div> --}}

      </div>
    </div>
  </section>
  @endsection