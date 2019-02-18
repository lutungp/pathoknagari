<script type="text/javascript">
        function judul_detail(id) {
            elem = 'image_berita_' + id
            elem = document.getElementById(elem)
            berita_detail(elem)
        }

        function berita_detail(elem) {
            val = $(elem).attr('value')
            var mapForm = document.createElement("form");
             mapForm.target = "Map";
             mapForm.method = "POST"; // or "post" if appropriate
             mapForm.action = "<?php echo base_url('berita-detail') ?>";

             var mapInput = document.createElement("input");
             mapInput.type = "text";
             mapInput.name = "message";
             mapInput.value = val;
             mapInput.style.display = "none";
             mapForm.appendChild(mapInput);

             document.body.appendChild(mapForm);

             map = window.open("", "Map");

          if (map) {
             mapForm.submit();
          } else {
             alert('You must allow popups for this map to work.');
          }
        }

</script>
<style media="screen">
  #profil {
    padding-top: 170px;
  }

  @media (max-width: 760px) {
     .news-slide-summary {
       display: none;
     }

     .header-on-mobile {
       padding-top: 10px;
     }

     .galeri-on-mobile {
       padding-top :25px;
       padding-bottom: 15px;
     }

     #ipib_row {
       height: 500px;
       padding-top: 100px
     }

     .berita-slide {
       margin-top: 15px;
     }

     .header-on-mobile {
       padding-top: 0px;
     }

     .galeri-on-mobile {
       padding-top :125px;
     }

     #ipib_row {
       height: 680px;
       padding-top: 70px
     }

     #profil {
       padding-top: 100px;
     }
  }

  @media (max-width: 700px) {
     #img_organisasi {
       display: none;
     }

     #popular-no-mobile {
       display: none;
     }

     #berita {
       padding-top: 100px!important;
     }
  }

  .full-content {
    height: 600px;
  }

  .Qs-Muhammad {
    text-align: center;
    font-size: 30px;
  }

  h5 {
    font-family: "Roboto Condensed",sans-serif;
      font-weight: 700;
      margin: 0 0 13px;
      color: #606068;
  }

  h5 {
      font-size: 14px;
  }

  .post-meta a {
    color: #b0b0b8;
    font-family: "Roboto Condensed","Arial Narrow",Arial,sans-serif;
    font-size: 13px;
    line-height: 1;
    display: inline-block;
  }

  #popular-no-mobile {
    padding-left: 40px;
    padding-right: 40px;
  }

  .tab-content > .fade {
    opacity: 1!important;
  }

</style>

<!--Ful Screen Section Video with caption-->
<section class="full-screen parallax-video parallaxie center-block bg-video-container"  id="beranda">
   <div class="container">
      <div class="row">
         <div class="col-md-2 col-sm-1"></div>
            <div class="col-md-8 col-sm-10">
                <div class="center-item text-center video-content">

                  <h2 class="text-capitalize bottom10 whitecolor">
                  <span class="block fontbold wow fadeIn" data-wow-delay="300ms">MASJID</span>
                  <span class="block fontbold wow fadeIn" data-wow-delay="400ms">PATHOK NAGARI</span>
                  </h2>
                  <h3 class="text-capitalize bottom20 whitecolor">
                  <span class="hero-text wow fadeIn" data-wow-delay="500ms">- Official Website -</span></h3> </span>

                  <a href="#berita" class="button btnwhite pagescroll wow fadeInUp" data-wow-delay="600ms">Jelajahi</a>
                </div>
            </div>
      </div>
   </div>
   <video class="my-background-video jquery-background-video" loop autoplay muted poster="assets/video/end.jpg"></video>
</section>

<!-- CONTENT -->
<section id="berita" class="padding" style="padding-top: 130px;padding-bottom: 40px;">
    <div id="content">
       <div class="container">
           <div class="row">
               <!-- MAIN CONTENT -->
               <main id="main-content" class="col-md-8">
                   <!-- BREAKING NEWS -->
                   <section class="breaking-news">
                       <header>
                           <h4>Breaking News</h4>
                           <i class="triangle"></i>
                       </header>
                       <div class="content">
                           <ul>
                               <li><a href="#"><i class="fa fa-angle-double-right"></i> Angkiran Dakwah Masjasrot</a></li>
                               <li><a href="#"><i class="fa fa-angle-double-right"></i> Kampung Wisata Religi</a></li>
                               <li><a href="#"><i class="fa fa-angle-double-right"></i> Masih Tersimpan Toleransi</a></li>
                               <li><a href="#"><i class="fa fa-angle-double-right"></i> Kyai Muthohar : Sosok Inspiratif</a></li>
                           </ul>
                       </div>
                   </section>

                   <!-- CAROUSEL  -->
                   <section class="widget no-mobile berita-slide">
                     <div class="frame thick">
                         <div id="carousel-medium" class="carousel caption-slide slide carousel-medium" data-ride="carousel">
                             <!-- Carousel contents -->
                             <div class="carousel-inner">
                                  <!-- detail berita sekilas -->
                                  <?php
                                        $kilasberita = "";
                                        foreach ($slide_berita['data'] as $key => $value) {
                                            $active = "";
                                            if ($key == 0) {
                                              $active = "active";
                                            }

                                            $kilasberita .= " <div class='item $active'>
                                                <div class='item-inner'>
                                                    <div data-src='" . $slide_berita['img_url'] . $value['berita_photo'] . "' data-alt='" . $value['berita_photo'] . "'
                                                     onclick='berita_detail(this)' value='" . $value['berita_id'] . "'></div>
                                                    <div class='carousel-caption'>
                                                        <div><a href='javascript:void(0)' onclick='berita_detail(this)' value='" . $value['berita_id'] . "'><h3>" . $value['berita_nama'] . "</h3></a></div>
                                                        <div class='hidden-xs news-slide-summary'>
                                                            <p>
                                                                " . $value['berita_summary'] . "
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> ";
                                        }

                                        echo $kilasberita;
                                   ?>

                             </div>
                             <div class="image-light"></div>

                             <!-- Carousel Controls -->
                             <a class="left carousel-control" href="#carousel-medium" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
                             <a class="right carousel-control" href="#carousel-medium" data-slide="next"><span class="fa fa-chevron-right"></span></a>
                         </div>
                     </div>
                   </section>

                   <!-- ARTICLES V1 WIDGET -->
                   <section class="widget articles-v1">
                     <header class="clearfix">
                         <h4>Kabar Nasional</h4>
                     </header>
                       <?php
                            $kilasberita = "";
                            foreach ($kilas_berita['data'] as $key => $value) {
                                $kilasberita .= " <div class='article-medium' style='padding: 10px 0 10px 0;'>
                                                    <div class='row'>
                                                        <div class='col-sm-6'>
                                                            <div class='frame'>
                                                                <a class='image' href='javascript:void(0)'>
                                                                    <figure class='image-holder' style='margin-bottom: 0px;'>
                                                                        <img src='" . $kilas_berita['img_url'] . $value['berita_photo'] . "'  alt='" . $value['berita_nama'] . "'
                                                                         onclick='berita_detail(this)' value='" . $value['berita_id'] . "' id='image_berita_" . $value['berita_id'] . "'>
                                                                    </figure>
                                                                    <div class='image-light'></div>
                                                                    <span class='dashicons dashicons-format-audio'></span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class='col-sm-6'>
                                                            <h4 class='custom-dio-hover'>
                                                              <a href='javascript:void(0)' onclick='judul_detail(" . $value['berita_id'] . ")'>" . $value['berita_nama'] . "</a></h4>
                                                            <p class='post-meta'>
                                                                <a href='#'><span class='fa fa-clock-o'></span> " . $value['berita_tanggal'] . "</a> &nbsp;
                                                                <a href='#'><span class='fa fa-folder'></span> Bussiness</a> &nbsp;
                                                                <a href='#'><span class='fa fa-comments'></span> 17</a> &nbsp;
                                                                <a href='#'><span class='fa fa-eye'></span> 1,324</a>
                                                            </p>
                                                            <p>" . $value['berita_summary'] . "</p>
                                                        </div>
                                                    </div>
                                                </div> ";
                            }
                        ?>

                       <div id="list_berita">
                          <div id="berita_loading" class="fa fa-refresh fa-spin fa-3x fa-fw margin-bottom" style="display:none;position: absolute;
                          z-index: 2; margin-left: auto; margin-right: auto; top: 35%; left: 50%; color: forestgreen; font-size: 100px;">

                          </div>
                          <?php echo $kilasberita ?>
                       </div>

                       <div class="row">
                         <div class="col-md-12" style="top: 10px;">
                           <!--Pagination-->
                           <center>
                             <ul class="pagination justify-content-center top50" id="pagination_news">

                             </ul>
                           </center>
                         </div>
                       </div>

                   </section>

               </main><!--#main-content-->

               <!-- SIDEBAR -->
               <aside class="col-md-4">
                   <div class="row">

                      <!-- CAROUSEL SMALL WIDGET -->
                      <section class="col-sm-6 col-md-12 widget no-mobile" style="display: block;padding-left: 0px;padding-right: 0px;margin-bottom: 20px;">
                          <header class="clearfix">
                              <h4>Kajian Islami</h4>
                          </header>

                          <div id="carousel-small" class="carousel slide carousel-small frame" data-ride="carousel">
                            <div class='carousel-inner'>

                              <?php
                                  $html_kajian = "";
                                  foreach ($slide_kajian['data'] as $key => $value) {
                                      $active = "";
                                      if ($key == 0) {
                                        $active = "active";
                                      }
                                      $html_kajian .= "<a class='item $active' href='javascript:void(0)' onclick='kajian_detail(this)' value='" . $value['kajian_id'] . "'>
                                                          <div class='item-inner'>
                                                            <div data-src='" . $kilas_berita['img_url'] . $value['kajian_photo'] . "'
                                                            data-alt='" . $value['kajian_nama'] . "'></div>
                                                            <div class='image-light'></div>
                                                            <div class='caption'>
                                                              <h5>" . $value['kajian_nama'] . "</h5>
                                                            </div>
                                                          </div>
                                                        </a>";
                                  }
                               ?>

                               <?php echo $html_kajian; ?>
                               </div>
                               <!--.carousel-inner-->
                          </div><!--.carousel-->
                      <!-- <img src="assets_2/img/shadow.png" class="shadow" alt="shadow"> -->
                      </section>

                      <!-- WIDGET CUSTOM -->

                      <section class="col-md-12">
                        <!-- Tab contents -->
                          <div class="tab-content">
                              <div class="tab-pane active">
                                <?php
                                    $html_kajian = "";
                                    foreach ($kilas_kajian['data'] as $key => $value) {
                                        $html_kajian .= "<div class='row' style='height: 100px;'>
                                                            <div class='article-tiny'>
                                                              <a href='javascript:void(0)' class='image'>
                                                                <figure class='image-holder'>
                                                                  <img src='" . $kilas_berita['img_url'] . $value['kajian_photo'] . "' alt='" . $value['kajian_nama'] . "'
                                                                   onclick='kajian_detail(this)' value='" . $value['kajian_id'] . "'>
                                                                </figure>
                                                              </a>
                                                              <h4 class='custom-dio-hover'>
                                                                <a href='javascript:void(0)' onclick='kajian_detail(this)' value='" . $value['kajian_id'] . "'>
                                                                " . $value['kajian_nama'] . "
                                                                </a>
                                                              </h4>
                                                            </div>
                                                            <hr>
                                                        </div>";
                                    }
                                 ?>

                                 <?php echo $html_kajian; ?>
                              </div>
                          </div>
                      </section>
                  </div>
                  <!-- Brosur -->
                  <div class="row">
                    <section class="col-sm-6 col-md-12 widget no-mobile" style="display: block;padding-left: 0px;padding-right: 0px;margin-bottom: 20px;">
                        <header class="clearfix">
                            <h4>Kabar Agenda</h4>
                        </header>

                        <div id="kabar_agenda" class="carousel slide carousel-small frame" data-ride="carousel">
                          <div class='carousel-inner'>
                            <a class='item active' href='javascript:void(0)'><img src="assets_2/img/IPIB-tsunami-aceh.jpeg" tppabs="" alt="Banner image" style="width: 80%;height: auto;"></a>
                            <a class='item' href='javascript:void(0)'><img src="assets_2/img/Agenda-Jogja-lurik.jpeg" tppabs="" alt="Banner image" style="width: 80%;height: auto;"></a>
                            <a class='item' href='javascript:void(0)'><img src="assets_2/img/pengajian-ahad-pagi.jpeg" tppabs="" alt="Banner image" style="width: 80%;height: auto;"></a>
                            <a class='item' href='javascript:void(0)'><img src="assets_2/img/Ust-Rahmat-Baequni.jpeg" tppabs="" alt="Banner image" style="width: 80%;height: auto;"></a>
                          </div>
                        </div>
                    </section>
                  </div>
              </aside>
          </div>
        </div>
    </div>

    <div class="row" style="height: 280px;margin-right: 5px;margin-left: 5px;">
        <div class="container" style="padding: 0px;">
          <section id="slider-tabs" class="col-sm-6 col-md-12 widget no-mobile">
              <header class="widget articles-v1">
                  <h4>Kabar Ad-Darojat</h4>
                  <ul>
                      <li class="control current">
                          <a href="javascript:void(0)" data-href="#popular" data-slide="next">
                            <span class="fa fa-chevron-right"></span>
                          </a>
                      </li>
                      <li class="control current">
                          <a href="javascript:void(0)" data-href="#popular" data-slide="prev">
                            <span class="fa fa-chevron-left"></span>
                          </a>
                      </li>
                  </ul>
              </header>
              <div class="tab-content">
                  <!--Popular-->
                  <div class="tab-pane active fade in " id="popular">
                    <div class="slider-container article">
                       <ul>
                         <?php
                             $html_kabar = "";
                             foreach ($kabar_details['data'] as $key => $value) {
                                $html_kabar .= " <li class='article-small'>
                                                    <a href='javascript:void(0)' class='image'>
                                                      <figure class='image-holder'>
                                                        <div data-src='" . $kilas_berita['img_url'] . $value['kabar_photo'] . "' data-alt='" . $value['kabar_nama'] . "'></div>
                                                      </figure>
                                                      <div class='image-light'></div>
                                                      <span class='dashicons dashicons-format-quote'></span>
                                                    </a>
                                                    <h5 class='kabar-ad-darojat'><a href='javascript:void(0)'>" . $value['kabar_nama'] . "</a></h5>
                                                    <p class='post-meta'>
                                                      <a href='javascript:void(0)'><span class='fa fa-clock-o'></span> " . date('M d, Y', strtotime($value['kabar_tanggal'])) . "</a> &nbsp;
                                                      <a href='javascript:void(0)'><span class='fa fa-folder'></span> ".$value['kabar_nama']."</a>
                                                    </p>
                                                  </li> ";
                             }
                         ?>
                         <?php echo $html_kabar; ?>
                       </ul>
                     </div>
                  </div>
              </div>
          </section>
        </div>
    </div>

</section>
<!-- CONTENT -->

<!-- Agenda -->
<section id="agenda" class="padding bg-counter-light parallaxie">
   <div class="container"><br><br>
      <div class="row">
        <div class="col-md-12 col-sm-12 text-center">
          <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
            <span>Jadwal Kegiatan Rutin</span>
            <h2 class="whitecolor bottom20 wow fadeInUp" data-wow-delay="400ms">MAJELIS ILMU</h2>
          </div>
        </div>
      </div>
      <div class="row our-process">
        <?php
          $majelisilmu_html = "";
          $number = 1;
          foreach ($majelisilmu_details['data'] as $key => $value) {
            $colclass = "col-md-1";
            if ($number > 3) {
                $colclass = "col-md-3";
            }

            $fadein = "";
            if ($number == 1 || $number == 4) {
                $fadein = "fadeInLeft";
            }

            if ($number == 3 || $number == 6) {
                $fadein = "fadeInRight";
            }

            if ($number == 2) {
                $fadein = "fadeInUp";
            }

            if ($number == 4) {
                $fadein = "fadeInUp";
            }


            $majelisilmu_html .= "<div class='col-lg-4 $colclass'>
                                  <div class='process-number top60 even wow $fadein' data-wow-delay='400ms'>
                                    <span class='pro-step'>" . $number . "</span>
                                    <h3 class='font-light darkcolor top20 bottom20'>" . $value['majelisilmu_judul'] . "</h3>
                                    <h4 class='font-light darkcolor top10 bottom10'>" . $value['majelisilmu_narasumber'] . "</h4>
                                    <p>" . $value['majelisilmu_keterangan'] . "</p>
                                  </div>
                                </div>";
            $number++;
          } ?>
        <?php echo $majelisilmu_html; ?>
      </div>
   </div>
</section>
<!--Agenda Ends-->

<!--profil masjid-->
<section id="profil" class="padding">
   <div class="container">
      <div class="row full-content">
        <div class="col-md-5 col-sm-12">
           <div class="image hover-effect wow fadeInLeft" data-wow-delay="300ms"><img src="assets/images/32.jpg"
             alt="masjid" class="equalheight"></div>
        </div>
         <div class="col-md-7 col-sm-12">
            <div class="split-box center-block equalheight container-padding">
               <div class="heading-title padding_half header-on-mobile">
               <span class="wow fadeInRight" data-wow-delay="350ms">Biografi Sejarah</span>
               <h2 class="darkcolor bottom25 wow fadeInRight" data-wow-delay="400ms">Masjid Ad-Darojat</h2>
               <p class="bottom30 wow fadeInRight" data-wow-delay="400ms">Masjid Ad-Darojat Kauman Babadan adalah salah satu masjid Pathok Nagari
               yang didirikan oleh Sultan Hamengku Buwono I pada tahun 1774 di atas tanah mutihan atau Sultan ground seluas 120 meter persegi.</p>
               <a href="sejarah" class="button btnprimary wow fadeIn" data-wow-delay="500ms">Selengkapnya</a>
                </div>
            </div>
         </div>
      </div>
    </div>
</section>
<!--Beranda ends-->

<!-- Video -->
<section id="video-parallax" class="video-parallax padding parallaxie">
   <div class="container">
      <div class="row">
         <div class="col-md-7 col-sm-7">
            <div class="heading-title whitecolor text-md-left text-center wow fadeIn" data-wow-delay="500ms">
               <span>Perjalanan yang luar biasa</span>
               <h2 class="fontregular">Lihat Video Kami</h2>
               <a data-fancybox href="https://youtu.be/wWBB-3E7F-4"
              class="button btnprimary fontmedium top20"><i class="fa fa-play"></i> &nbsp;Putar Video</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Video Ends-->

<section id="Qs-Muhammad">
   <div class="col-sm-12">
     <div class="split-box center-block equalheight container-padding">
       <div class="heading-title padding_half">
         <h2 class="Qs-Muhammad darkcolor bottom25 wow fadeInLeft" data-wow-delay="350ms">
           <img class="" src="assets_2/img/Al-Quran.png" alt="Al-Quran" style="width: 70px;">
           <br>
           <br>
           يَا أَيُّهَا الَّذِينَ آمَنُوا إِنْ تَنْصُرُوا اللَّهَ يَنْصُرْكُمْ وَيُثَبِّتْ أَقْدَامَكُمْ
         </h2>
         <p class="bottom30 wow fadeInLeft" data-wow-delay="400ms" style="text-align: center">
           Hai orang-orang mukmin, jika kamu menolong (agama) Allah, niscaya Dia akan menolongmu dan meneguhkan kedudukanmu
           <br>
           <b><font style="font-size: 15px;">Qs: Muhammad Ayat. 7</font></b>
         </p>
       </div>
      </div>
    </div>
</section>

<!--Live Streaming section-->
<section id="streaming" class="padding testimonial-bg"><br><br>
  <div class="container-fluid w-100 m-0 p-0 homeprofil pb-5">
    <div class="col-md-8 offset-md-2 col-sm-12 text-center">
      <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
         <span>Masjid Ad-Darojat</span>
         <h2 class="whitecolor wow fadeInUp bottom30" data-wow-delay="350ms">LIVE STREAMING</h2>
      </div>
    </div>
    <div class="col-md-12">
      <div class="profile-video wow fadeInUp" data-wow-delay="450ms">
        <iframe width="80%" class="youtubeembed" src="https://www.youtube.com/embed/live_stream?channel=UCP-tWGFUAmVWFz4XyHDz07A&feature=oembed&autoplay=1&rel=0&controls=0&showinfo=0&modestbranding=0"
        frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="container wow fadeInUp" data-wow-delay="500ms">
         <h3 class="invisible">hidden</h3>
         <div class="row">
            <div class="col-md-12 col-sm-12">
               <div id="partners-slider" class="owl-carousel">
                 <div class="item">
                    <div class="logo-item"> <img alt="pathoknagari-sponsor" src="assets/images/patner/logo-1.png" ></div>
                 </div>
                 <div class="item">
                    <div class="logo-item"><img alt="pathoknagari-sponsor" src="assets/images/patner/logo-2.png"></div>
                 </div>
                 <div class="item">
                    <div class="logo-item"><img alt="pathoknagari-sponsor" src="assets/images/patner/logo-3.png"></div>
                 </div>
                 <div class="item">
                    <div class="logo-item"><img alt="pathoknagari-sponsor" src="assets/images/patner/logo-4.png"></div>
                 </div>
                 <div class="item">
                    <div class="logo-item"><img alt="pathoknagari-sponsor" src="assets/images/patner/logo-5.png"></div>
                 </div>
                 <div class="item">
                    <div class="logo-item"><img alt="pathoknagari-sponsor" src="assets/images/patner/logo-6.png"></div>
                 </div>
               </div>
            </div>
         </div>
      </div>
    </div>
  </div>
</section>
<!--Live Streaming ends-->

<script type="text/javascript">

    $( document ).ready(function() {
        var jml_berita = '<?php echo $kilas_berita['nbrows'] ?>'
        var pageval = 1
        var leftrow = '<li class="page-item left-arrow"><a href="javascript:void(0)" class="page-link"><i class="fa fa-angle-left"></i></a></li>'
        var rightrow = '<li class="page-item right-arrow"><a href="javascript:void(0)" class="page-link"><i class="fa fa-angle-right"></i></a></li>'
        var page    = '<li class="page-item"><a href="javascript:void(0)" class="page-link">' + pageval + '</a></li>'
        page = ''
        pagebullet = 1;
        if (jml_berita > 5) {
            for (var i = 0; i < jml_berita; i++) {
                aktif = ''
                if (i % 5 == 0) {
                    if (pagebullet == 1) {
                        aktif = 'active'
                    }
                    page += '<li class="page-item berita-col ' + aktif + '" value="' + pagebullet + '"><a class="page-link">' + pagebullet + '</a></li>'
                    pagebullet++
                }
            }
            $('#pagination_news').append(leftrow + page + rightrow)
        }

        $('.page-item').on('click', function () {
            $('#list_berita').css('opacity', '0.4')
            $('#list_berita').css('pointer-events', 'none')
            $('#berita_loading').css('display', 'block')

            var page_bullet = this

            if ($(this).hasClass('berita-col')) {
                /* reset bullet yang aktif jadi non-aktif */
                for (var i = 0; i < $('.berita-col').length; i++) {
                  var bullets = $('.berita-col')[i]
                  $(bullets).removeClass('active')
                }

                $(page_bullet).addClass('active')

                var pagenumber = $(page_bullet).attr('value')
                getBeritaDetail(pagenumber)
            } else {
              if ($(this).hasClass('left-arrow')) {

                  /* bullet kiri yg akan diaktifkan */
                  var non_aktif = 0
                  for (var iBerita = 0; iBerita < $('.berita-col').length; iBerita++) {
                      var bullets = $('.berita-col')[iBerita]
                      if ($(bullets).hasClass('active')) {
                          non_aktif = iBerita

                          if (iBerita-1 > (-1)) {
                              $(bullets).removeClass('active')
                              /* jika posisi berada di page 1 page tidak perlu digerakkan lagi */
                              var aktif = $('.berita-col')[iBerita-1]
                              $(aktif).addClass('active')

                              var pagenumber = $(aktif).attr('value')
                              getBeritaDetail(pagenumber)
                          }

                          break;
                      }
                  }

              }

              if ($(this).hasClass('right-arrow')) {
                  for (var iBerita = 0; iBerita < $('.berita-col').length; iBerita++) {
                      var bullets = $('.berita-col')[iBerita]
                      if ($(bullets).hasClass('active')) {
                          non_aktif = iBerita

                          if ((iBerita + 1) < $('.berita-col').length) {
                              $(bullets).removeClass('active')
                              /* jika posisi berada di page terakhir page tidak perlu digerakkan lagi */
                              var aktif = $('.berita-col')[iBerita+1]
                              $(aktif).addClass('active')

                              var pagenumber = $(aktif).attr('value')
                              getBeritaDetail(pagenumber)
                          }

                          break;
                      }
                  }
              }
            }

            $('#pagination_news').focus()
        })

        function getBeritaDetail(pagenumber) {
            if (pagenumber > 1) {
                endCol   = 4 * pagenumber
                startCol = endCol - 4
            } else {
                startCol = 0
                endCol   = 4
            }

            startCol = parseInt(startCol)
            endCol   = parseInt(endCol)
            $.ajax ({
                type: "POST",
                url: '<?php echo base_url('get_berita')?>',
                dataType: 'json',
                async: false,
                data:{
                  start : startCol,
                  end : endCol
                },
                success: function (response) {
                    $('#list_berita').css('opacity', '1')
                    $('#list_berita').css('pointer-events', 'auto')
                    $('#berita_loading').css('display', 'none')
                    $('#Column_berita').html('')
                    addBerita(response)
                }
            })
        }

        function addBerita(response) {
            $('#list_berita').html('')
            var list_berita_html = ""

            data = response.data
            for (var i = 0; i < data.length; i++) {
                list_berita_html +="<div class='article-medium' style='padding: 10px 0 10px 0;'>"
                list_berita_html +="<div class='row'>"
                list_berita_html +="<div class='col-sm-6'>"
                list_berita_html +="<div class='frame'>"
                list_berita_html +="<a class='image' href='javascript:void(0)'>"
                list_berita_html +="<figure class='image-holder' style='margin-bottom: 0px;'>"
                list_berita_html +="<img id='image_berita_" + data[i].berita_id + "' src='" + response.img_url + data[i].berita_photo + "'  alt='" + data[i].berita_photo + "' onclick='berita_detail(this)' value='" + data[i].berita_id + "'>"
                list_berita_html +="</figure>"
                list_berita_html +="<div class='image-light'></div>"
                list_berita_html +="<span class='dashicons dashicons-format-audio'></span>"
                list_berita_html +="</a>"
                list_berita_html +="</div>"
                list_berita_html +="</div>"
                list_berita_html +="<div class='col-sm-6'>"
                list_berita_html +="<h4 class='custom-dio-hover'>"
                list_berita_html +="<a href='javascript:void(0)' onclick='judul_detail(" + data[i].berita_id + ")'>" + data[i].berita_nama + "</a></h4>"
                list_berita_html +="<p class='post-meta'>"
                list_berita_html +="<a href='javascript:void(0)'><span class='fa fa-clock-o'></span> " + data[i].berita_tanggal + " </a> &nbsp;"
                list_berita_html +="<a href='javascript:void(0)'><span class='fa fa-folder'></span> Bussiness</a> &nbsp;"
                list_berita_html +="<a href='javascript:void(0)'><span class='fa fa-comments'></span> 17</a> &nbsp;"
                list_berita_html +="<a href='javascript:void(0)'><span class='fa fa-eye'></span> 1,324</a>"
                list_berita_html +="</p>"
                list_berita_html += data[i].berita_summary
                list_berita_html +="</div>"
                list_berita_html +="</div>"
                list_berita_html +="</div>"
            }

            $('#list_berita').html(list_berita_html)

        }

    })

    function kajian_detail(elem) {
          val = $(elem).attr('value')
          var mapForm = document.createElement("form");
           mapForm.target = "Map";
           mapForm.method = "POST"; // or "post" if appropriate
           mapForm.action = "<?php echo base_url('kajian-detail') ?>";

           var mapInput = document.createElement("input");
           mapInput.type = "text";
           mapInput.name = "message";
           mapInput.value = val;
           mapForm.appendChild(mapInput);

           document.body.appendChild(mapForm);

           map = window.open("", "Map");

        if (map) {
           mapForm.submit();
        } else {
           alert('You must allow popups for this map to work.');
        }
    }

</script>
