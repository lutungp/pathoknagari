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
  @media (max-width: 760px) {
     .news-slide-summary {
       display: none;
     }

     .heading-title {
       padding-top: 10px;
     }
  }

  @media (min-width: 760px) {
     .berita-slide {
       margin-top: 15px;
     }

     .heading-title {
       padding-top :125px;
     }
  }

  @media (max-width: 700px) {
     #img_organisasi {
       display: none;
     }
  }

  .full-content {
    height: 600px;
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

                  <a href="#profil" class="button btnwhite pagescroll wow fadeInUp" data-wow-delay="600ms">Jelajahi</a>
                </div>
            </div>
      </div>
   </div>
   <video class="my-background-video jquery-background-video" loop autoplay muted poster="assets/video/end.jpg"></video>
</section>

<!--Beranda section-->
<section id="profil" class="padding">
   <div class="container">
      <div class="row full-content">
        <div class="col-md-5 col-sm-12">
           <div class="image hover-effect wow fadeInLeft" style="padding-top :70px;" data-wow-delay="300ms"><img src="assets/images/32.jpg"
             alt="masjid" class="equalheight"></div>
        </div>
         <div class="col-md-7 col-sm-12">
            <div class="split-box center-block equalheight container-padding">
               <div class="heading-title padding_half">
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
    <!-- <div class= "text-center">
        <a href="galeri" class="button btnprimary top60 wow fadeIn" data-wow-delay="500ms">Lihat Galeri masjid</a>
    </div> -->
</section>
<!--Beranda ends-->

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
        <div class="col-lg-4 col-md-1">
           <div class="process-number top60 even wow fadeInLeft" data-wow-delay="400ms">
               <span class="pro-step">1</span>
             <h3 class="font-light darkcolor top20 bottom20">KAJIAN TAHSIN QUR'AN</h3>
			   <h4 class="font-light darkcolor top10 bottom10">Zaenal Syarifudin M.Ag.</h4>
               <p>Setiap Hari Ahad, Ba'da Maghrib Bertempat di Masjid Ad-Darojat Kauman Babadan</p>
            </div>
        </div>
		  <div class="col-lg-4 col-md-1">
           <div class="process-number top60 wow fadeInUp" data-wow-delay="450ms">
              <span class="pro-step">2</span>
               <h3 class="font-light darkcolor top20 bottom20">KAJIAN TAFSIR QUR'AN</h3>
			   <h4 class="font-light darkcolor top10 bottom10">Dr. H. Nurkholis, M.Ag.</h4>
               <p>Setiap Hari Rabu, Ba'da Maghrib Bertempat di Masjid Ad-Darojat Kauman Babadan</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-1">
           <div class="process-number top60 even wow fadeInRight" data-wow-delay="500ms">
               <span class="pro-step">3</span>
              <h3 class="font-light darkcolor top20 bottom20">TADARUS QUR'AN BAPAK-BAPAK</h3>
			   <h4 class="font-light darkcolor top10 bottom10">Jama'ah Masjid</h4>
               <p>Setiap Hari Senin, Selasa, Rabu, Jum'at dan Sabtu Ba'da Maghrib di Masjid Ad-Darojat</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-3">
           <div class="process-number top60 wow fadeInLeft" data-wow-delay="550ms">
              <span class="pro-step">4</span>
               <h3 class="font-light darkcolor top20 bottom20">PENGAJIAN AHAD PAGI</h3>
			   <h4 class="font-light darkcolor top10 bottom10">Warga Babadan & Umum</h4>
               <p>Setiap Hari Ahad Pagi, 2 Pekan Sekali Bertempat di Masjid Ad-Darojat Kauman Babadan</p>
            </div>
        </div>
		<div class="col-lg-4 col-md-3">
           <div class="process-number top60 even wow fadeInUp" data-wow-delay="600">
               <span class="pro-step">5</span>
               <h3 class="font-light darkcolor top20 bottom20">KAJIAN PEMUDA ISLAM</h3>
			   <h4 class="font-light darkcolor top10 bottom10">IPIB & FOKRI</h4>
               <p>Setiap Hari Ahad, 2 Pekan Sekali Bertempat di Masjid Ad-Darojat Kauman Babadan</p>
            </div>
        </div>
		<div class="col-lg-4 col-md-3">
           <div class="process-number top60 wow fadeInRight" data-wow-delay="650ms">
              <span class="pro-step">6</span>
               <h3 class="font-light darkcolor top20 bottom20">TADARUS & PENGAJIAN ANAK</h3>
			   <h4 class="font-light darkcolor top10 bottom10">IPMADA</h4>
               <p>Setiap Hari Kamis, Ba'da Maghrib Bertempat di Masjid Ad-Darojat Kauman Babadan</p>
            </div>
        </div>
      </div>
   </div>
</section>
<!--Agenda Ends-->

<!-- Kabar Ad-Darojat -->
<section id="galeri" class="padding">
   <div class="container">
      <div class="row">
         <div class="col-md-7 col-sm-12">
            <div class="split-box center-block equalheight container-padding">
               <div class="heading-title padding_half" style="padding-top :130px;">
               <!-- <span class="wow fadeInLeft" data-wow-delay="350ms">Berita Terbaru</span> -->
               <h2 class="darkcolor bottom25 wow fadeInLeft" data-wow-delay="400ms">Galeri Masjid</h2>
               <p class="bottom30 wow fadeInLeft" data-wow-delay="450ms">Kami selalu berusaha untuk menghadirkan kabar berita terbaru
                yang komperhensif, berimbang dan terpercaya yang bertujuan memberikan informasi dan
                mengedukasi sahabat kaum muslimin di seluruh nusantara.</p>
               <a href="#berita" class="nav-link pagescroll button btnprimary wow fadeIn" data-wow-delay="600ms">LIHAT GALERI MASJID</a>
                </div>
            </div>
         </div>
         <div class="col-md-5 col-sm-12">
            <div class="image hover-effect wow fadeInRight" style="padding-top:40px;" data-wow-delay="500ms"><img src="assets/images/Berita/1.png"
              alt="masjid-logo" class="equalheight"></div>
         </div>
      </div>
   </div>
</section>

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


<!-- CONTENT -->
<section id="berita" class="padding" style="padding-top: 120px;padding-bottom: 40px;">
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
                    <!-- <img src="assets_2/img/shadow.png" class="shadow" alt="shadow">
                    <img src="assets_2/img/shadow.png" class="shadow" alt="shadow"> -->
                   </section>

                   <!-- ARTICLES V1 WIDGET -->
                   <section class="widget articles-v1">
                       <?php
                            $kilasberita = "";
                            foreach ($kilas_berita['data'] as $key => $value) {
                                $kilasberita .= " <div class='article-medium'>
                                                    <div class='row'>
                                                        <div class='col-sm-6'>
                                                            <div class='frame'>
                                                                <a class='image' href='javascript:void(0)'>
                                                                    <figure class='image-holder'>
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
                                                                <a href='#'><span class='fa fa-clock-o'></span> " . date('d M Y', strtotime($value['berita_tanggal'])) . "</a> &nbsp;
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
                              <?php
                                  $html_kajian = "";
                                  foreach ($slide_kajian['data'] as $key => $value) {
                                      $active = "";
                                      if ($key == 0) {
                                        $active = "active";
                                      }
                                      $html_kajian .= "<div class='carousel-inner'>
                                                        <a class='item $active' href='javascript:void(0)' onclick='kajian_detail(this)' value='" . $value['kajian_id'] . "'>
                                                          <div class='item-inner'>
                                                            <div data-src='" . $kilas_berita['img_url'] . $value['kajian_photo'] . "'
                                                            data-alt='" . $value['kajian_nama'] . "'></div>
                                                            <div class='image-light'></div>
                                                            <div class='caption'>
                                                              <h5>" . $value['kajian_nama'] . "</h5>
                                                            </div>
                                                          </div>
                                                        </a>
                                                      </div>";
                                  }
                               ?>

                               <?php echo $html_kajian; ?>
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
                                                              </a></h4>
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
              </aside>
            </div>
        </div>
    </div>
</section>
<!-- CONTENT -->

<!--Merchandise-->
<section id="merchandise" class="padding bglight">
   <div class="container"><br>
      <div class="row">
         <div class="col-md-8 offset-md-2 col-sm-12 text-center">
            <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
               <h2 class="darkcolor bottom10 wow fadeIn" data-wow-delay="350ms">Merchandise</h2>
               <p>Kami menyediakan merchandise untuk para jamaah. Anda bisa mendapatkannya langsung dimasjid. Sebagian dari hasil penjualan kami
          produk kamin akan didonasikan untuk kegiatan umat.</p>
            </div>
         </div>
      </div><br>
      <div class="row">
           <div class="col-md-8 offset-md-2 col-sm-12 text-center">
              <div id="flat-filters" class="cbp-l-filters dark wow fadeInUp bottom30" data-wow-delay="400ms">
                 <div data-filter="*" class="cbp-filter-item">
                    <span>Semua</span>
                 </div>
                 <div data-filter=".shirt" class="cbp-filter-item">
                    <span>T-Shirt</span>
                 </div>
                 <div data-filter=".mug" class="cbp-filter-item">
                    <span>Mug</span>
                 </div>
                 <div data-filter=".topi" class="cbp-filter-item">
                    <span>Topi</span>
                 </div>
              </div>
           </div>
        </div>
        <div id="flat-gallery" class="cbp">
  	       <div class="cbp-item shirt">
              <img src="assets/images/merchandise/2.jpg" alt="">
              <div class="overlay center-block whitecolor">
                 <a class="plus" data-fancybox="gallery" href="assets/images/merchandise/2.jpg"></a>
                 <h4 class="top30">Klik +</h4>
                 <p>Lihat Lebih Detail</p>
              </div>
           </div>
           <div class="cbp-item topi">
              <img src="assets/images/merchandise/top.jpg" alt="">
              <div class="overlay center-block whitecolor">
                 <a class="plus" data-fancybox="gallery" href="assets/images/merchandise/top.jpg"></a>
                 <h4 class="top30">Klik +</h4>
                 <p>Lihat Lebih Detail</p>
              </div>
           </div>
           <div class="cbp-item mug">
              <img src="assets/images/merchandise/mug1.png" alt="">
              <div class="overlay center-block whitecolor">
                 <a class="plus" data-fancybox="gallery" href="assets/images/merchandise/mug1.png"></a>
                 <h4 class="top30">Klik +</h4>
                 <p>Lihat Lebih Detail</p>
              </div>
           </div>
           <div class="cbp-item mug">
              <img src="assets/images/merchandise/mug2.png" alt="">
              <div class="overlay center-block whitecolor">
                 <a class="plus" data-fancybox="gallery" href="assets/images/merchandise/mug2.png"></a>
                 <h4 class="top30">Klik +</h4>
                 <p>Lihat Lebih Detail</p>
              </div>
           </div>
        </div>
      <div class= "text-center">
        <a target="_blank" href="https://wa.me/+628562898979" class="button btnprimary top50 wow fadeIn" data-wow-delay="400ms">Pesan Sekarang</a>
      </div>
   </div>
</section>
<!--Merchandise ends-->

<section id="organisasi">
  <div id="ipib" class="container">
     <div class="row" style="height:680px; padding-top: 70px">
        <div class="col-md-8 col-sm-12">
           <div class="split-box center-block equalheight container-padding">
              <div class="heading-title padding_half" style="padding-top :130px;">
              <span class="wow fadeInLeft" data-wow-delay="300ms">Organisasi Masjid</span>
              <h2 class="darkcolor bottom25 wow fadeInLeft" data-wow-delay="350ms">Ikatan Pemuda Islam Babadan</h2>
              <p class="bottom30 wow fadeInLeft" data-wow-delay="400ms">Ikatan Pemuda Islam Babadan adalah organisasi dibawah
               naungan Masjid Pathok Nagari Ad-Darojat. Organisasi ini berdiri pada tahun 1970 yang diawali dengan
               nama “IPIB”.</p>
              <a href="organisasi" class="button btnprimary wow fadeIn" data-wow-delay="700ms">Selengkapnya</a>
               </div>
           </div>
        </div>
        <div class="col-md-4 col-sm-12">
           <div class="image hover-effect wow fadeInRight" style="padding-top:100px;" data-wow-delay="450ms"><img id="img_organisasi" src="assets/images/ipib.jpg"
             alt="ipib-logo" class="equalheight"></div>
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
                endCol   = 5 * pagenumber
                startCol = endCol - 5
            } else {
                startCol = 0
                endCol   = 5
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
                list_berita_html +="<div class='article-medium'>"
                list_berita_html +="<div class='row'>"
                list_berita_html +="<div class='col-sm-6'>"
                list_berita_html +="<div class='frame'>"
                list_berita_html +="<a class='image' href='javascript:void(0)'>"
                list_berita_html +="<figure class='image-holder'>"
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
