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

                   <a href="#kabar" class="button btnwhite pagescroll wow fadeInUp" data-wow-delay="600ms">Jelajahi</a>
               </div>
         </div>
         <div class="col-md-2 col-sm-1"></div>
      </div>
   </div>
   <video class="my-background-video jquery-background-video" loop autoplay muted poster="assets/video/end.jpg">
		<source src="assets/video/11111.mp4" type="video/mp4">
	</video>
</section>

<!-- Kabar Ad-Darojat -->
  <section id="kabar" class="padding">
     <div class="container">
        <div class="row">
           <div class="col-md-7 col-sm-12">
              <div class="split-box center-block equalheight container-padding" style="padding-top :50px;">
                 <div class="heading-title padding_half">
                 <span class="wow fadeInUp" data-wow-delay="350ms">Berita Terbaru</span>
                 <h2 class="darkcolor bottom25 wow fadeInUp" data-wow-delay="400ms">Kabar Ad-Darojat</h2>
                 <p class="bottom30 wow fadeInUp" data-wow-delay="450ms">Kami selalu berusaha untuk menghadirkan kabar berita terbaru
  			          yang bertujuan memberikan informasi yang mengedukasi serta tarbiyah bagi sahabat-sahabat kaum muslimin.</p>
                 <a href="#berita" class="nav-link pagescroll button btnsecondary wow fadeInUp" data-wow-delay="700ms">Lihat Semua Kabar</a>
                 </div>
              </div>
           </div>
  		 <div class="col-md-5 col-sm-12">
              <div class="image hover-effect wow fadeInUp" data-wow-delay="300ms" style="padding-top :30px;">
                <img src="assets/images/Berita/1.png" alt="berita" class="equalheight"></div>
           </div>
        </div>
      </div>
  </section>

  <section id="berita" class="padding bglight">
      <div class="container">
        <?php
        $berita_row  = 0 ;
        $berita_row2 = 1; /* baris berita sebenarnya */
        $ringkas_berita = $ringkas_berita;
        $text = "";

        $animation_cls[0]  = 'fadeInLeft';
        $animation_cls[1]  = 'fadeInUp';
        $animation_cls[2]  = 'fadeInRight';

        foreach ($ringkas_berita['data'] as $key => $value) {
          $cls = $animation_cls[$berita_row];
          $berita_row++;
          if ($berita_row == 1) {
              $style = "";
              if ($berita_row2 == 1) {
                  /* memberi baris pertama padding bottom */
                  $style = "style='padding-bottom : 15px;'";
              }

              $text .= "<div class='row' $style >";
              $berita_row2++;
          }

            $text .= "<div class='col-md-4'>
                        <div class='news_item shadow text-center wow " . $cls . "' data-wow-delay='450ms'>
                          <a class='image image-berita' href='berita-detail'>
                            <img src='" . $ringkas_berita['img_url'] . $value['berita_photo'] . "' alt='Latest News' class='img-responsive'>
                          </a>
                          <div class='news_desc news_desc2'>
                            <h3 class='text-capitalize font-light darkcolor'><a href='berita-detail'>Lomba Mewarnai</a></h3>
                            <ul class='meta-tags top20 bottom20'></ul>
                            <p class='bottom35'>Dalam rangka bulan ramadhan kami menghadirkan acara lomba merwarnai dalam rangkaian olimpiade Santri.</p>
                            <a href='berita-detail' class='button btnprimary btn-gradient-hvr'>Baca Lengkap</a>
                          </div>
                        </div>
                      </div>";

            if ($berita_row == 3) {
              $text .= "</div>";
              $berita_row = 0;
            }
        }

        echo $text;

        ?>
        <div class="row">
           <div class="col-sm-12">
              <!--Pagination-->
              <ul class="pagination justify-content-center top50" id="pagination_news">

              </ul>
           </div>
        </div>
      </div>
  </section>
<!--Kabar Ad-Darojat-->

<!--Live Streaming section-->
<section id="streaming" class="padding"><br><br>
  <div class="container-fluid w-100 m-0 p-0 homeprofil pb-5">
    <div class="col-md-8 offset-md-2 col-sm-12 text-center">
      <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
         <span>Masjid Ad-Darojat</span>
         <h2 class="darkcolor wow fadeInUp bottom30" data-wow-delay="350ms">LIVE STREAMING</h2>
         <p class="wow fadeInUp bottom30" data-wow-delay="400ms">Kami menyiarkan secara langsung agenda kegiatan dakwah Masjid Ad-Darojat melalui Live Streaming. Sebagai bentuk dari dakwah kami untuk mengedukasi dan bisa dijangkau semua
          lapisan masyarakat dan umat .</p>
      </div><br>
    </div>
    <div class="col-md-12">
      <div class="profile-video wow fadeInUp" data-wow-delay="450ms">
        <iframe width="80%" class="youtubeembed" src="https://www.youtube.com/embed/Ha2NT4y1a2A"
        frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="container wow fadeIn" data-wow-delay="400ms">
         <h3 class="invisible">hidden</h3>
         <div class="row">
            <div class="col-md-12 col-sm-12">
               <div id="partners-slider" class="owl-carousel">
                 <div class="item">
                    <div class="logo-item"> <img alt="" src="assets/images/patner/logo-1.png" ></div>
                 </div>
                 <div class="item">
                    <div class="logo-item"><img alt="" src="assets/images/patner/logo-2.png"></div>
                 </div>
                 <div class="item">
                    <div class="logo-item"><img alt="" src="assets/images/patner/logo-3.png"></div>
                 </div>
                 <div class="item">
                    <div class="logo-item"><img alt="" src="assets/images/patner/logo-4.png"></div>
                 </div>
                 <div class="item">
                    <div class="logo-item"><img alt="" src="assets/images/patner/logo-5.png"></div>
                 </div>
                 <div class="item">
                    <div class="logo-item"><img alt="" src="assets/images/patner/logo-6.png"></div>
                 </div>
               </div>
            </div>
         </div>
      </div>
    </div>
  </div>
</section>
<!--Live Streaming ends-->

<!-- Agenda -->
<section id="agenda" class="padding bg-counter-light parallaxie">
   <div class="container"><br><br>
    <div class="row">
         <div class="col-md-12 col-sm-12 text-center">
           <div class="whitecolor heading-title-top10 wow fadeInUp" data-wow-delay="300ms">
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
			   <h4 class="font-light darkcolor top10 bottom10">Dr. Nurkholis, M.Ag.</h4>
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

<!--Beranda section-->
<section id="profil" class="padding single-feature">
  <div class="container"><br><br>
    <div class="row">
         <div class="col-md-8 col-sm-7 text-md-left text-center wow fadeInLeft" data-wow-delay="300ms">
            <div class="heading-title heading_space">
               <span>Biografi</span>
               <h2 class="darkcolor bottom30 wow fadeInLeft" data-wow-delay="350ms">Sejarah Masjid</h2>
            </div>
            <p class="bottom35 wow fadeInLeft" data-wow-delay="350ms">Masjid Ad-Darojat Kauman Babadan adalah salah satu masjid Pathok Nagari
			   yang didirikan oleh Sultan Hamengku Buwono I pada tahun 1774 di atas tanah mutihan atau Sultan ground seluas 120 meter persegi.
			   Pada zaman penjajahan Jepang yakni pada tahun 1940, Masjid Ad-Darojat dan masyarakat Babadan dipindah ke Desa Babadan Jl. Kaliurang, Kentungan,
			   Sleman. Perpindahan ini dikarenakan saat itu daerah Babadan terkena pelebaran pangkalan pesawat terbang dan sebagai gudang senjata.
			   Akibat perpindahan tersebut denyut kampung Babadan sebagai kampung santri sempat mengalami tidur panjang.</p>
            <a href="sejarah" class="button btnprimary">Selengkapnya</a><br><br>
         </div>
         <div class="col-md-4 col-sm-5 wow fadeInRight" data-wow-delay="400ms">
            <div class="image"><img alt="logo" src="assets/images/21.png"></div>
         </div>
    </div><br><br>
    <div class="container">
     <div class="row">
          <div class="col-md-8 offset-md-2 col-sm-12 text-center">
             <div id="flat-filters" class="cbp-l-filters dark bottom30">
                <div data-filter="*" class="cbp-filter-item">
                   <span>Semua</span>
                </div>
                <div data-filter=".takmir" class="cbp-filter-item">
                   <span>Takmir</span>
                </div>
                <div data-filter=".ipib" class="cbp-filter-item">
                   <span>IPIB</span>
                </div>
                <div data-filter=".masjid" class="cbp-filter-item">
                   <span>Masjid</span>
                </div>
             </div>
          </div>
       </div>
       <div id="flat-gallery" class="cbp">
     <div class="cbp-item masjid">
             <img src="assets/images/Galeri/mas1.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/mas1.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div><div class="cbp-item masjid">
             <img src="assets/images/Galeri/mas2.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/mas2.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div><div class="cbp-item masjid">
             <img src="assets/images/Galeri/mas3.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/mas3.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div><div class="cbp-item masjid">
             <img src="assets/images/Galeri/mas4.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/mas4.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div><div class="cbp-item masjid">
             <img src="assets/images/Galeri/mas5.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/mas5.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
          <div class="cbp-item ipib">
             <img src="assets/images/Galeri/nau.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/nau.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
          <div class="cbp-item takmir">
             <img src="assets/images/Galeri/1.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/1.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
          <div class="cbp-item ipib">
             <img src="assets/images/Galeri/ipib.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/ipib.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
           <div class="cbp-item takmir">
             <img src="assets/images/Galeri/tmk.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/tmk.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
          <div class="cbp-item ipib">
             <img src="assets/images/Galeri/had.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/had.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
          <div class="cbp-item takmir">
             <img src="assets/images/Galeri/2.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/2.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
          <div class="cbp-item ipib">
             <img src="assets/images/Galeri/arg.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/arg.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
          <div class="cbp-item takmir">
             <img src="assets/images/Galeri/3.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/3.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
          <div class="cbp-item ipib">
             <img src="assets/images/Galeri/ind.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/ind.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
          <div class="cbp-item takmir">
             <img src="assets/images/Galeri/5.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/5.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
          <div class="cbp-item ipib">
             <img src="assets/images/Galeri/bil.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/bil.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
          <div class="cbp-item takmir">
             <img src="assets/images/Galeri/4.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/4.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
      <div class="cbp-item masjid">
             <img src="assets/images/Galeri/al1.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/al1.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
      <div class="cbp-item masjid">
             <img src="assets/images/Galeri/al2.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/al2.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div><div class="cbp-item masjid">
             <img src="assets/images/Galeri/al3.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/al3.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div><div class="cbp-item masjid">
             <img src="assets/images/Galeri/al4.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/al4.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
      <div class="cbp-item masjid">
             <img src="assets/images/Galeri/al5.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/al5.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div>
       <div class="cbp-item masjid">
             <img src="assets/images/Galeri/al6.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/al6.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
          </div> <div class="cbp-item masjid">
             <img src="assets/images/Galeri/al7.jpg" alt="">
             <div class="overlay center-block whitecolor">
                <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/al7.jpg"></a>
                <h4 class="top30">Klik +</h4>
                <p>Lihat Lebih Detail</p>
             </div>
           </div>
         </div>
       </div>
     </div>
</section>
<!--Video Ends-->

<script type="text/javascript">
    $( document ).ready(function() {
        var jml_berita = '<?php echo $ringkas_berita['nbrows'] ?>'
        var pageval = 1
        var leftrow = '<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>'
        var rightrow = '<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>'

        var page    = '<li class="page-item"><a class="page-link" href="#">' + pageval + '</a></li>'

        page = ''
        pagebullet = 1;
        if (jml_berita > 6) {
            for (var i = 0; i < jml_berita; i++) {
                if (i % 6 == 0) {
                    page += '<li class="page-item"><a class="page-link" href="#">' + pagebullet + '</a></li>'
                    pagebullet++
                }
            }

            $('#pagination_news').append(leftrow + page + rightrow)
        }

    });
</script>
