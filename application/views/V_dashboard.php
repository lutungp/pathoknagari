
<script type="text/javascript">

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
         <div class="col-md-2 col-sm-1"></div>
      </div>
   </div>
   <video class="my-background-video jquery-background-video" loop autoplay muted poster="assets/video/end.jpg">
		<!--<source src="assets/video/Frontier_1.mp4" type="video/mp4">-->
	</video>
</section>

<!--Beranda section-->
<section id="profil" class="padding">
   <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-12">
           <div class="image hover-effect wow fadeInLeft" style="padding-top :70px;" data-wow-delay="300ms"><img src="assets/images/32.jpg"
             alt="masjid" class="equalheight"></div>
        </div>
         <div class="col-md-7 col-sm-12">
            <div class="split-box center-block equalheight container-padding">
               <div class="heading-title padding_half" style="padding-top :125px;">
               <span class="wow fadeInRight" data-wow-delay="350ms">Biografi Sejarah</span>
               <h2 class="darkcolor bottom25 wow fadeInRight" data-wow-delay="400ms">Masjid Ad-Darojat</h2>
               <p class="bottom30 wow fadeInRight" data-wow-delay="400ms">Masjid Ad-Darojat Kauman Babadan adalah salah satu masjid Pathok Nagari
               yang didirikan oleh Sultan Hamengku Buwono I pada tahun 1774 di atas tanah mutihan atau Sultan ground seluas 120 meter persegi.</p>
               <a href="sejarah" class="button btnprimary wow fadeIn" data-wow-delay="500ms">Selengkapnya</a>
                </div>
            </div>
         </div>
      </div><br><br><br>
      <section class="breaking-news wow fadeInUp" data-wow-delay="350ms">
          <header>
              <h4>Takmir & Ustadz</h4>
              <i class="triangle"></i>
          </header>
          <div class="content">
              <ul>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Ketua Takmir : Drs. H. Harsoyo, MS.I</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Wakil Takmir : Ir. H. Syaiful Huda, M.T</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Bendahara : H. Zamzuri,S.Ag, S.H</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Sekretaris : H. Suhari</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Ustadz I : Zaenal Syarifudin, M.Ag</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Ustadz II : Dr. H. Nurkholis, M.Ag</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Ustadz III: Ngudi Hartono</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Ustadz IV : dr. Zulrifqi, Sp.PD.</a></li>
              </ul>
          </div>
      </section>
      <div class="row">
          <div class="col-lg-3 col-md-6">
             <div class="team-box grey-shade top60 wow fadeInUp" data-wow-delay="400ms">
                <div class="image">
                   <img src="assets/images/ustadz/1.jpg"  alt="Pathoknagari-takmir">
                </div>
                <div class="team-content darkcolor">
                   <h3>Ketua Takmir</h3>
                   <p class="nomargin">Drs. H. Harsoyo, MS.I</p>
                </div>
             </div>
          </div>
          <div class="col-lg-3 col-md-6">
             <div class="team-box grey-shade top60 wow fadeInUp" data-wow-delay="400ms">
                <div class="image">
                   <img src="assets/images/ustadz/2.jpg" alt="Pathoknagari-takmir">
                </div>
                <div class="team-content darkcolor">
                   <h3>Wakil Takmir</h3>
                   <p class="nomargin">Ir. H. Syaiful Huda, M.T</p>
                </div>
             </div>
          </div>
          <div class="col-lg-3 col-md-6">
             <div class="team-box grey-shade top60 wow fadeInUp" data-wow-delay="400ms">
                <div class="image">
                   <img src="assets/images/ustadz/3.jpg" alt="Pathoknagari-takmir">
                </div>
                <div class="team-content darkcolor">
                   <h3>Bendahara</h3>
                   <p class="nomargin">H. Zamzuri,S.Ag, S.H.</p>
                </div>
             </div>
          </div>
          <div class="col-lg-3 col-md-6">
             <div class="team-box grey-shade top60 wow fadeInUp" data-wow-delay="400ms">
                <div class="image">
                   <img src="assets/images/ustadz/5.jpg" alt="Pathoknagari-takmir">
                </div>
                <div class="team-content darkcolor">
                   <h3>Sekretaris</h3>
                   <p class="nomargin">H. Suhari</p>
                </div>
             </div>
          </div>
      <div class="col-lg-3 col-md-6">
             <div class="team-box grey-shade top60 wow fadeInUp" data-wow-delay="450">
                <div class="image">
                   <img src="assets/images/ustadz/4.jpg" alt="Pathoknagari-ustadz">
                </div>
                <div class="team-content darkcolor">
                   <h3>Ustadz I</h3>
                   <p class="nomargin">Zaenal Syarifudin, M.Ag</p>
                </div>
             </div>
          </div>
      <div class="col-lg-3 col-md-6">
             <div class="team-box grey-shade top60 wow fadeInUp" data-wow-delay="450ms">
                <div class="image">
                   <img src="assets/images/ustadz/6.jpg" alt="Pathoknagari-ustadz">
                </div>
                <div class="team-content darkcolor">
                   <h3>Ustadz II</h3>
                   <p class="nomargin">Dr. H. Nurkholis, M.Ag</p>
                </div>
             </div>
          </div>
      <div class="col-lg-3 col-md-6">
             <div class="team-box grey-shade top60 wow fadeInUp" data-wow-delay="450ms">
                <div class="image">
                   <img src="assets/images/ustadz/7.jpg" alt="Pathoknagari-ustadz">
                </div>
                <div class="team-content darkcolor">
                   <h3>Ustadz III</h3>
                   <p class="nomargin">Ngudi Hartono</p>
                </div>
             </div>
          </div>
      <div class="col-lg-3 col-md-6">
             <div class="team-box grey-shade top60 wow fadeInUp" data-wow-delay="450ms">
                <div class="image">
                   <img src="assets/images/ustadz/8.jpg" alt="Pathoknagari-ustadz">
                </div>
                <div class="team-content darkcolor">
                   <h3>Ustadz IV</h3>
                   <p class="nomargin">dr. Zulrifqi, Sp.PD.</p>
                </div>
             </div>
          </div>
       </div>
       <div id="ipib" class="container"><br><br><br><br>
          <div class="row">
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
                <div class="image hover-effect wow fadeInRight" style="padding-top:100px;" data-wow-delay="450ms"><img src="assets/images/ipib.jpg"
                  alt="ipib-logo" class="equalheight"></div>
             </div>
          </div>
       </div><br><br><br>
       <section class="breaking-news wow fadeInUp" data-wow-delay="350ms">
           <header>
               <h4>Pengurus IPIB</h4>
               <i class="triangle"></i>
           </header>
           <div class="content">
               <ul>
                 <li><a href="#"><i class="fa fa-angle-double-right"></i> Ketua Umum : Agus Purnomo</a></li>
                 <li><a href="#"><i class="fa fa-angle-double-right"></i> Ketua I : Hadiyan Haris</a></li>
                 <li><a href="#"><i class="fa fa-angle-double-right"></i> Ketua II : Indra Jaya</a></li>
                 <li><a href="#"><i class="fa fa-angle-double-right"></i> Ketua III : Naufal Ahmad</a></li>
               </ul>
           </div>
       </section>
       <div class="row">
           <div class="col-lg-3 col-md-6">
              <div class="team-box grey-shade top60 wow fadeInUp" data-wow-delay="400ms">
                 <div class="image">
                    <img src="assets/images/ustadz/agu.jpg"  alt="Pathoknagari-ipib">
                 </div>
                 <div class="team-content darkcolor">
                    <h3>Ketua Umum</h3>
                    <p class="nomargin">Agus Purnomo</p>
                 </div>
              </div>
           </div>
           <div class="col-lg-3 col-md-6">
              <div class="team-box grey-shade top60 wow fadeInUp" data-wow-delay="400ms">
                 <div class="image">
                    <img src="assets/images/ustadz/had.jpg" alt="Pathoknagari-ipib">
                 </div>
                 <div class="team-content darkcolor">
                    <h3>Ketua I</h3>
                    <p class="nomargin">Hadiyan Haris</p>
                 </div>
              </div>
           </div>
           <div class="col-lg-3 col-md-6">
              <div class="team-box grey-shade top60 wow fadeInUp" data-wow-delay="400ms">
                 <div class="image">
                    <img src="assets/images/ustadz/ind.jpg" alt="Pathoknagari-ipib">
                 </div>
                 <div class="team-content darkcolor">
                    <h3>Ketua II</h3>
                    <p class="nomargin">Indra Jaya</p>
                 </div>
              </div>
           </div>
           <div class="col-lg-3 col-md-6">
              <div class="team-box grey-shade top60 wow fadeInUp" data-wow-delay="400ms">
                 <div class="image">
                    <img src="assets/images/ustadz/nau.jpg" alt="Pathoknagari-ipib">
                 </div>
                 <div class="team-content darkcolor">
                    <h3>Ketua III</h3>
                    <p class="nomargin">Naufal Ahmad</p>
                 </div>
              </div>
           </div>
        </div>
    </div>
    <div class= "text-center">
    <a href="galeri" class="button btnprimary top60 wow fadeIn" data-wow-delay="500ms">Lihat Galeri masjid</a>
    </div><br>
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
<section id="kabar" class="padding">
   <div class="container">
      <div class="row">
         <div class="col-md-7 col-sm-12">
            <div class="split-box center-block equalheight container-padding">
               <div class="heading-title padding_half" style="padding-top :130px;">
               <span class="wow fadeInLeft" data-wow-delay="350ms">Berita Terbaru</span>
               <h2 class="darkcolor bottom25 wow fadeInLeft" data-wow-delay="400ms">Kabar Ad-Darojat</h2>
               <p class="bottom30 wow fadeInLeft" data-wow-delay="450ms">Kami selalu berusaha untuk menghadirkan kabar berita terbaru
                yang komperhensif, berimbang dan terpercaya yang bertujuan memberikan informasi dan
                mengedukasi sahabat kaum muslimin di seluruh nusantara.</p>
               <a href="#berita" class="nav-link pagescroll button btnprimary wow fadeIn" data-wow-delay="600ms">Lihat Semua kabar</a>
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
<section id="berita" class="padding" style="padding-top: 100px;padding-bottom: 40px;">
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
                   <div><br><br></div>
                   <section class="widget no-mobile">
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
                                                    <div data-src='" . $slide_berita['img_url'] . $value['berita_photo'] . "' data-alt='" . $value['berita_photo'] . "'></div>
                                                    <div class='carousel-caption'>
                                                        <div><a href='#''><h3>" . $value['berita_nama'] . "</h3></a></div>
                                                        <div class='hidden-xs'>
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
                       <!-- <header class="clearfix">
                           <h4>Headline</h4>
                       </header> -->
                       <?php
                            $kilasberita = "";
                            foreach ($kilas_berita['data'] as $key => $value) {
                                $kilasberita .= " <div class='article-medium'>
                                                    <div class='row'>
                                                        <div class='col-sm-6'>
                                                            <div class='frame'>
                                                                <a class='image'>
                                                                    <figure class='image-holder'>
                                                                        <img src='" . $kilas_berita['img_url'] . $value['berita_photo'] . "'  alt='" . $value['berita_nama'] . "'
                                                                         onclick='berita_detail(this)' value='" . $value['berita_id'] . "'>
                                                                    </figure>
                                                                    <div class='image-light'></div>
                                                                    <span class='dashicons dashicons-format-audio'></span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class='col-sm-6'>
                                                            <h4 class='custom-dio-hover'>
                                                              <a href='#'>" . $value['berita_nama'] . "</a></h4>
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
                   <div class="row" style="width:390px;">

                       <!-- SOCIALS WIDGET -->
                       <section class="col-sm-6 col-md-12 widget">
                           <header class="clearfix"><h4>Socials Media</h4></header>

                           <ul class="social clearfix">
                               <li><a href="#" title="Facebook "><span class="sc-md sc-facebook"></span></a></li>
                               <li><a href="#" title="Twitter"><span class="sc-md sc-twitter"></span></a></li>
                               <li><a href="#" title="Instagram"><span class="sc-md sc-instagram"></span></a></li>
                               <li><a href="#" title="YouTube"><span class="sc-md sc-youtube"></span></a></li>
                               <li><a href="#" title="googleplus"><span class="sc-md sc-googleplus"></span></a></li>
                           </ul>
                       </section>

                      <!-- CAROUSEL SMALL WIDGET -->
                      <section class="col-sm-6 col-md-12 widget no-mobile">
                        <header class="clearfix">
                          <h4>Gallery</h4>

                          <a href="#carousel-small" class="control" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                          </a>
                          <a href="#carousel-small" class="control" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                          </a>
                        </header>

                        <div id="carousel-small" class="carousel slide carousel-small frame" data-ride="carousel">
                          <div class="carousel-inner">
                            <a class="item active"
                            href="assets_2/img/content/unsplash_527bf4b4ae00d_1-huge.jpg"
                            title="Nunc ut dolor nec mi posuere tincidunt quis ut sem Praesent pharetra eget"
                            data-lightbox-gallery="gallery-small">
                              <div class="item-inner">
                                <div data-src="assets_2/img/content/unsplash_527bf4b4ae00d_1-medium.jpg"
                                data-alt="Nunc ut dolor nec mi posuere tincidunt quis ut sem Praesent pharetra eget"></div>
                                <div class="image-light"></div>
                                <div class="caption">
                                  <h5>Nunc ut dolor nec mi posuere tincidunt quis ut sem Praesent pharetra eget</h5>
                                </div>
                              </div>
                            </a>
                            <a class="item"
                            href="assets_2/img/content/unsplash_528a8fb8a276d_1-huge.jpg"
                            title="Vestibulum ultricies Ut sollicitudin eget massa et lobortis"
                            data-lightbox-gallery="gallery-small">
                              <div class="item-inner">
                                <div data-src="assets_2/img/content/unsplash_528a8fb8a276d_1-medium.jpg"
                                data-alt="Vestibulum ultricies Ut sollicitudin eget massa et lobortis"></div>
                                <div class="image-light"></div>
                                <div class="caption">
                                  <h5>Vestibulum ultricies Ut sollicitudin eget massa et lobortis</h5>
                                </div>
                              </div>
                            </a>
                          <a class="item"
                            href="assets_2/img/content/Bird-Profile-Wellington-New-Zealand-huge.jpg"
                            title="Bird Profile Wellington New Zealand Vivamus ac neque sed"
                            data-lightbox-gallery="gallery-small">
                              <div class="item-inner">
                                <div data-src="assets_2/img/content/Bird-Profile-Wellington-New-Zealand-medium.jpg"
                                data-alt="Bird Profile Wellington New Zealand Vivamus ac neque sed"></div>
                                <div class="image-light"></div>
                                <div class="caption">
                                  <h5>Bird Profile Wellington New Zealand Vivamus ac neque sed</h5>
                                </div>
                              </div>
                          </a>
                          <a class="item"
                          href="assets_2/img/content/unsplash_529f51e60b51c_1-huge.jpg"
                          title="Dui placerat dictum Suspendisse ut justo venenatis imperdiet"
                          data-lightbox-gallery="gallery-small">
                            <div class="item-inner">
                              <div data-src="assets_2/img/content/unsplash_529f51e60b51c_1-medium.jpg" data-alt="Dui placerat dictum Suspendisse ut justo venenatis imperdiet"></div>
                              <div class="image-light"></div>
                              <div class="caption">
                                <h5>Dui placerat dictum Suspendisse ut justo venenatis imperdiet</h5>
                              </div>
                            </div>
                          </a>
                          </div><!--.carousel-inner-->
                        </div><!--.carousel-->
                        <img src="assets_2/img/shadow.png" class="shadow" alt="shadow">
                      </section>

                      <!-- WIDGET CUSTOM -->

                      <section class="col-sm-6 col-md-12 widget">
                        <!-- Tab menus -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#popular-aside" data-toggle="tab" aria-expanded="true">Popular</a></li>
                            <li class=""><a href="#recent-aside" data-toggle="tab" aria-expanded="false">Recent</a></li>
                            <li class=""><a href="#comments-aside" data-toggle="tab" aria-expanded="false">Comments</a></li>
                        </ul>

                        <!-- Tab contents -->
                        <div class="tab-content">
                            <!--Popular-->
                            <div class="tab-pane fade active in" id="popular-aside">
                                <div class="article-tiny">
                                    <a href="#" class="image">
                                        <figure class="image-holder">
                                            <img src="assets_2/img/content/unsplash_528cba6de78e5_1-tiny.jpg"  alt="Mauris mattis ullamcorper euismod Nulla convallis">
                                        </figure>
                                        <div class="image-light"></div>
                                        <span class="dashicons dashicons-format-gallery"></span>
                                    </a>
                                    <h5><a href="#">Mauris mattis ullamcorper euismod Nulla convallis</a></h5>
                                    <p class="post-meta">
                                        <a href="#"><span class="fa fa-clock-o"></span> Apr 11, 2018</a> &nbsp;
                                        <a href="#"><span class="fa fa-folder"></span> Travel</a>
                                    </p>
                                </div>
                                <hr>

                                <div class="article-tiny">
                                    <a href="#" class="image">
                                        <figure class="image-holder">
                                            <img src="assets_2/img/content/unsplash_5261cd0183e57_1-tiny.jpg"  alt="Nulla vitae velit ac velit luctus facilisis dictum Mauris malesuada ante ut gravida condimentum">
                                        </figure>
                                        <div class="image-light"></div>
                                        <span class="dashicons dashicons-format-audio"></span>
                                    </a>
                                    <h5><a href="#">Nulla vitae velit ac velit luctus facilisis dictum Mauris malesuada ante ut gravida condimentum</a></h5>
                                    <p class="post-meta">
                                        <a href="#"><span class="fa fa-clock-o"></span> Apr 7, 2018</a> &nbsp;
                                        <a href="#"><span class="fa fa-folder"></span> Science</a>
                                    </p>
                                </div>
                                <hr>

                                <div class="article-tiny">
                                    <a href="#" class="image">
                                        <figure class="image-holder">
                                            <img src="assets_2/img/content/11452469094_9d17db34ba_o-tiny.jpg"  alt="Nulla id eros ut nibh hendrerit sollicitudin">
                                        </figure>
                                        <div class="image-light"></div>
                                        <span class="dashicons dashicons-format-links"></span>
                                    </a>
                                    <h5><a href="#">Nulla id eros ut nibh hendrerit sollicitudin</a></h5>
                                    <p class="post-meta">
                                        <a href="#"><span class="fa fa-clock-o"></span> Feb 28, 2018</a> &nbsp;
                                        <a href="#"><span class="fa fa-folder"></span> National</a>
                                    </p>
                                </div>
                                <hr>

                                <div class="article-tiny">
                                    <a href="#" class="image">
                                        <figure class="image-holder">
                                            <img src="assets_2/img/content/berries-tiny.jpg" alt="Ornare nibh Nunc semper dolor quis augue venenatis">
                                        </figure>
                                        <div class="image-light"></div>
                                        <span class="dashicons dashicons-format-links"></span>
                                    </a>
                                    <h5><a href="#">Ornare nibh Nunc semper dolor quis augue venenatis</a></h5>
                                    <p class="post-meta">
                                        <a href="#"><span class="fa fa-clock-o"></span> Jan 4, 2018</a> &nbsp;
                                        <a href="#"><span class="fa fa-folder"></span> Health</a>
                                    </p>
                                </div>
                                <hr>
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
        <iframe width="80%" class="youtubeembed" src="https://www.youtube.com/embed/Ha2NT4y1a2A"
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
        var leftrow = '<li class="page-item left-arrow"><a class="page-link"><i class="fa fa-angle-left"></i></a></li>'
        var rightrow = '<li class="page-item right-arrow"><a class="page-link"><i class="fa fa-angle-right"></i></a></li>'
        var page    = '<li class="page-item"><a class="page-link">' + pageval + '</a></li>'
        page = ''
        pagebullet = 1;
        if (jml_berita > 3) {
            for (var i = 0; i < jml_berita; i++) {
                aktif = ''
                if (i % 3 == 0) {
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
            if (pagenumber == 1) {
                pagenumber = 0
            } else {
                pagenumber = parseInt(pagenumber) + 3
            }

            startCol = parseInt(pagenumber)
            endCol   = parseInt(pagenumber) + 3
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
                list_berita_html +="<a class='image'>"
                list_berita_html +="<figure class='image-holder'>"
                list_berita_html +="<img src='" + response.img_url + data[i].berita_photo + "'  alt='" + data[i].berita_photo + "' onclick='berita_detail(this)' value='" + data[i].berita_id + "'>"
                list_berita_html +="</figure>"
                list_berita_html +="<div class='image-light'></div>"
                list_berita_html +="<span class='dashicons dashicons-format-audio'></span>"
                list_berita_html +="</a>"
                list_berita_html +="</div>"
                list_berita_html +="</div>"
                list_berita_html +="<div class='col-sm-6'>"
                list_berita_html +="<h4 class='custom-dio-hover'>"
                list_berita_html +="<a href='#'>" + data[i].berita_nama + "</a></h4>"
                list_berita_html +="<p class='post-meta'>"
                list_berita_html +="<a href='#'><span class='fa fa-clock-o'></span> " + data[i].berita_tanggal + " </a> &nbsp;"
                list_berita_html +="<a href='#'><span class='fa fa-folder'></span> Bussiness</a> &nbsp;"
                list_berita_html +="<a href='#'><span class='fa fa-comments'></span> 17</a> &nbsp;"
                list_berita_html +="<a href='#'><span class='fa fa-eye'></span> 1,324</a>"
                list_berita_html +="</p>"
                list_berita_html += data[i].berita_summary
                list_berita_html +="</div>"
                list_berita_html +="</div>"
                list_berita_html +="</div>"
            }

            $('#list_berita').html(list_berita_html)

        }

    })

</script>
