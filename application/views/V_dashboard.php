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
        $berita_row = 0 ;
        $ringkas_berita = json_decode($ringkas_berita);
        $text = "";
        foreach ($ringkas_berita->data as $key => $value) {
          $berita_row++;
          if ($berita_row == 1) {
              $text .= "<div class='row'>";
          }

            $text .= "<div class='col-md-4'>
                        <div class='news_item shadow text-center wow fadeInLeft' data-wow-delay='450ms'>
                          <a class='image' href='berita-detail'>
                            <img src='" . $ringkas_berita->img_url . $value->berita_photo . "' alt='Latest News' class='img-responsive'>
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
              <ul class="pagination justify-content-center top50">
                 <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                 <li class="page-item active"><a class="page-link" href="#">1</a></li>
                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                 <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
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
       <h2 class="wow fadeInUp bottom30" data-wow-delay="350ms">LIVE STREAMING</h2>
       <p class="wow fadeInUp bottom30" data-wow-delay="400ms">Kami menyiarkan secara langsung agenda kegiatan dakwah Masjid Ad-Darojat melalui Live Streaming. Sebagai bentuk dari dakwah kami untuk mengedukasi dan bisa dijangkau semua
        lapisan masyarakat dan umat .</p>
    </div><br>
  </div>
  <div class="col-md-12">
    <div class="profile-video wow fadeInUp" data-wow-delay="450ms">
      <iframe width="80%" class="youtubeembed" src="https://www.youtube.com/embed/Ha2NT4y1a2A"
      frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
         </div>
	       <div class="row">
         <div class="col-lg-3 col-md-6">
            <div class="team-box grey-shade top60 wow fadeInLeft" data-wow-delay="350ms">
               <div class="image">
                  <img src="assets/images/ustadz/1.jpg"  alt="">
               </div>
               <div class="team-content darkcolor">
                  <h3>Ketua Takmir</h3>
                  <p class="nomargin">Drs. H. Harsoyo, MS.I</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="team-box grey-shade top60 wow fadeInLeft" data-wow-delay="400ms">
               <div class="image">
                  <img src="assets/images/ustadz/2.jpg" alt="">
               </div>
               <div class="team-content darkcolor">
                  <h3>Wakil Takmir</h3>
                  <p class="nomargin">Ir. H. Syaiful Huda, M.T</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="team-box grey-shade top60 wow fadeInLeft" data-wow-delay="450ms">
               <div class="image">
                  <img src="assets/images/ustadz/3.jpg" alt="">
               </div>
               <div class="team-content darkcolor">
                  <h3>Bendahara</h3>
                  <p class="nomargin">H. Zamzuri,S.Ag, S.H.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="team-box grey-shade top60 wow fadeInLeft" data-wow-delay="500ms">
               <div class="image">
                  <img src="assets/images/ustadz/5.jpg" alt="">
               </div>
               <div class="team-content darkcolor">
                  <h3>Sekretaris</h3>
                  <p class="nomargin">H. Suhari</p>
               </div>
            </div>
         </div>
		 <div class="col-lg-3 col-md-6">
            <div class="team-box grey-shade top60 wow fadeInRight" data-wow-delay="550">
               <div class="image">
                  <img src="assets/images/ustadz/4.jpg" alt="">
               </div>
               <div class="team-content darkcolor">
                  <h3>Ustadz</h3>
                  <p class="nomargin">Zaenal Syarifudin, M.Ag</p>
               </div>
            </div>
         </div>
		 <div class="col-lg-3 col-md-6">
            <div class="team-box grey-shade top60 wow fadeInRight" data-wow-delay="600ms">
               <div class="image">
                  <img src="assets/images/ustadz/6.jpg" alt="">
               </div>
               <div class="team-content darkcolor">
                  <h3>Ustadz</h3>
                  <p class="nomargin">Dr. Nurkholis, M.Ag</p>
               </div>
            </div>
         </div>
		 <div class="col-lg-3 col-md-6">
            <div class="team-box grey-shade top60 wow fadeInRight" data-wow-delay="650ms">
               <div class="image">
                  <img src="assets/images/ustadz/7.jpg" alt="">
               </div>
               <div class="team-content darkcolor">
                  <h3>Ustadz</h3>
                  <p class="nomargin">Ngudi Hartono</p>
               </div>
            </div>
         </div>
		 <div class="col-lg-3 col-md-6">
            <div class="team-box grey-shade top60 wow fadeInRight" data-wow-delay="700ms">
               <div class="image">
                  <img src="assets/images/ustadz/8.jpg" alt="">
               </div>
               <div class="team-content darkcolor">
                  <h3>Ustadz</h3>
                  <p class="nomargin">dr. Zulrifqi Buyung, Sp.PD.</p>
               </div>
            </div>
         </div>
      </div>
	</div>
</section>
<!--Beranda ends-->

<!--Gallery-->
<section id="portfolio_top" class="bglight">
   <div class="container"><br><br>
      <div id="portfolio-measonry" class="cbp border-portfolio simple_overlay">
         <div class="cbp-item itemshadow">
            <img src="assets/images/Galeri/e.jpg" alt="">
            <div class="overlay center-block whitecolor">
               <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/e1.jpg"></a>
               <h4 class="top30">Klik + </h4>
               <p>Lihat lebih Detail</p>
            </div>
         </div>
         <div class="cbp-item">
            <div class="text_wrap wow fadeIn" data-wow-delay="350ms">
               <div class="heading-title text-center padding_top wow fadeInRight">
                  <span>Documenter</span>
                  <h2 class="darkcolor bottom10 fadeInRight">Galeri Masjid</h2>
                  <p>Dokumentasi foto Masjid Ad-Darojat serta kegiatan Takmir dan Ikatan Pemuda Islam Babadan.</p>
               </div>
            </div>
         </div>
         <div class="cbp-item itemshadow">
            <img src="assets/images/Galeri/g.jpg" alt="">
            <div class="overlay center-block whitecolor">
               <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/g1.jpg"></a>
               <h4 class="top30">Klik + </h4>
               <p>Lihat lebih Detail</p>
            </div>
         </div>
         <div class="cbp-item itemshadow">
            <img src="assets/images/Galeri/h.jpg" alt="">
            <div class="overlay center-block whitecolor">
               <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/h1.jpg"></a>
               <h4 class="top30">Klik + </h4>
               <p>Lihat lebih Detail</p>
            </div>
         </div>
         <div class="cbp-item itemshadow">
            <img src="assets/images/Galeri/j.jpg" alt="">
            <div class="overlay center-block whitecolor">
               <a class="plus" data-fancybox="gallery" href="assets/images/Galeri/j1.jpg"></a>
              <h4 class="top30">Klik + </h4>
               <p>Lihat lebih Detail</p>
            </div>
         </div>
         <div class="cbp-item">
            <div class="bottom-text">
               <div class="cells wow fadeInLeft" data-wow-delay="350ms">
                  <p>Kami telah mendokumentasikan lebih dari </p>
                  <h2 class="port_head gradient_text">1774</h2>
                  <p class="bottom15">foto kegiatan yang sangat luar biasa</p>
               </div>
               <div class="cells wow fadeIn" data-wow-delay="700ms">
                  <a href="galeri" class="button btnsecondary btn-gradient-hvr">Lihat Semua</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Gallery Ends-->

<!-- Kajian Islami -->
<section id="kajian" class="padding">
   <div class="container">
      <div class="row">
         <div class="col-md-5 col-sm-12">
            <div class="image hover-effect wow fadeInLeft" style="padding-top :40px;" data-wow-delay="300ms"><img src="assets/images/kajian/1.jpg" alt="berita" class="equalheight"></div>
         </div>
         <div class="col-md-7 col-sm-12">
            <div class="split-box center-block equalheight container-padding">
               <div class="heading-title padding_half" style="padding-top :130px;">
               <span class="wow fadeInRight" data-wow-delay="350ms">Kajian Islami</span>
               <h2 class="darkcolor bottom25 wow fadeInRight" data-wow-delay="400ms">Kajian Islami Terbaru</h2>
               <p class="bottom30 wow fadeInRight" data-wow-delay="450ms">Kami selalu berusaha untuk menghadirkan artikel kajian-kajian islam
			   yang bertujuan memberikan edukasi serta tarbiyah bagi sahabat-sahabat kaum muslimin.</p>
               <a href="#kajian2" class="nav-link pagescroll button btnsecondary wow fadeIn" data-wow-delay="700ms">Lihat Semua kajian</a>
            </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="kajian2" class="padding bglight">
  <div class="container">
     <div class="row box-berita">
        <div class="col-md-4">
          <div class="news_item shadow text-center wow fadeInLeft" data-wow-delay="300ms">
            <a class="image" href="kajian-detail">
              <img src="assets/images/kajian/1.png"alt="Latest News" class="img-responsive">
            </a>
            <div class="news_desc">
              <h3 class="text-capitalize font-light darkcolor"><a href="kajian-detail">Islam dan Sunnah</a></h3>
              <ul class="meta-tags top20 bottom20"></ul>
              <p class="bottom35">Bukankah sunnah adalah sesuatu yang apabila dikerjakan, pelakunya mendapat pahala.
              </p>
              <a href="kajian-detail" class="button btnprimary btn-gradient-hvr">Baca Lengkap</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="news_item shadow text-center wow fadeIn" data-wow-delay="350ms">
            <a class="image" href="kajian-detail">
              <img src="assets/images/kajian/3.png" alt="Latest News" class="img-responsive">
            </a>
            <div class="news_desc">
              <h3 class="text-capitalize font-light darkcolor"><a href="kajian-detail">Akibat Buruk Dusta</a></h3>
              <ul class="meta-tags top20 bottom20"></ul>
              <p class="bottom35">erkadang dengan lisannya seseorang mengucapkan kata-kata tanpa
                dipertimbangkan dan dipikirkan sebelumnya.</p>
              <a href="kajian-detail" class="button btnprimary btn-gradient-hvr">Baca Lengkap</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="news_item shadow text-center wow fadeInRight" data-wow-delay="400ms">
            <a class="image" href="kajian-detail">
              <img src="assets/images/kajian/5.png" alt="Latest News" class="img-responsive">
            </a>
            <div class="news_desc">
              <h3 class="text-capitalize font-light darkcolor"><a href="kajian-detail">Haid dan Nifas</a></h3>
              <ul class="meta-tags top20 bottom20"></ul>
              <p class="bottom35">Ada berbagai larangan saat haid yang beredar di masyarakat khususnya
                 kaum hawa yang menjalani periode menstruasi setiap bulannya.</p>
              <a href="kajian-detail" class="button btnprimary btn-gradient-hvr">Baca Lengkap</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="news_item shadow text-center wow fadeInLeft" data-wow-delay="450ms">
            <a class="image" href="kajian-detail">
              <img src="assets/images/kajian/2.png" alt="Latest News" class="img-responsive">
            </a>
            <div class="news_desc">
              <h3 class="text-capitalize font-light darkcolor"><a href="kajian-detail">Istiqomah</a></h3>
              <ul class="meta-tags top20 bottom20"></ul>
              <p class="bottom35">Seorang muslim yang baik tentunya diharapakan bisa beristiqamah dengan ibadah yang ia lakukan serta menjaga akhlaknya.</p>
              <a href="kajian-detail" class="button btnprimary btn-gradient-hvr">Baca Lengkap</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="news_item shadow text-center wow fadeIn" data-wow-delay="500ms">
            <a class="image" href="kajian-detail">
              <img src="assets/images/kajian/4.png" alt="Latest News" class="img-responsive">
            </a>
            <div class="news_desc">
              <h3 class="text-capitalize font-light darkcolor"><a href="kajian-detail">Kajian Ilmiah</a></h3>
              <ul class="meta-tags top20 bottom20"></ul>
              <p class="bottom35">Sebagian ahli pendidikan mengatakan bahwa ilmu pendidikan
adalah penerapan ilmu-ilmu lain dalam praktek pendidikan.</p>
              <a href="kajian-detail" class="button btnprimary btn-gradient-hvr">Baca Lengkap</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="news_item shadow text-center wow fadeInRight" data-wow-delay="550ms">
            <a class="image" href="kajian-detail">
              <img src="assets/images/kajian/6.png" alt="Latest News" class="img-responsive">
            </a>
            <div class="news_desc">
              <h3 class="text-capitalize font-light darkcolor"><a href="kajian-detail">Do'a Malaikat</a></h3>
              <ul class="meta-tags top20 bottom20"></ul>
              <p class="bottom35">Ibnu Katsir berkata: Adapun shalawat dari malaikat dalam ayat di atas, maknanya adalah doa dan istighfar bagi para manusia.</p>
              <a href="kajian-detail" class="button btnprimary btn-gradient-hvr">Baca Lengkap</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <!--Pagination-->
            <ul class="pagination justify-content-center top50">
               <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
               <li class="page-item active"><a class="page-link" href="#">1</a></li>
               <li class="page-item"><a class="page-link" href="#">2</a></li>
               <li class="page-item"><a class="page-link" href="#">3</a></li>
               <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
         </div>
      </div>
 </div>
</section>
<!--Kajian Islami Ends-->


 <!-- Merchandise -->
<section id="merchandise" class="padding bglight">
   <div class="container"><br><br>
      <div class="row">
         <div class="col-md-8 offset-md-2 col-sm-12 text-center">
            <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
               <span>Dapatkan Segera</span>
               <h2 class="darkcolor bottom30">Merchandise</h2>
               <p>Kami menyediakan merchandise untuk para jamaah. Anda bisa mendapatkannya langsung dimasjid. Sebagian dari hasil penjualan kami
				  donasikan untuk kegiatan umat.</p>
            </div>
         </div>
      </div>
      <div class="row three-col-pricing">
         <div class="col-lg-4 col-sm-12">
            <div class="price-table top60 wow fadeInUp" data-wow-delay="350ms">
                <img src = "assets/images/merchandise/mug2.png" style="width:282px"></img>
               <div class="clearfix"></div>
            <a href="https://wa.me/+628562898979" class="button btnprimary top20">Beli</a>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12">
            <div class="price-table active top60 wow fadeInUp" data-wow-delay="400ms">
               <img src = "assets/images/merchandise/2.jpg" style="width:282px"></img>
               <div class="clearfix"></div>
             <a href="https://wa.me/+628562898979" class="button btnprimary top20">Beli</a>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12">
            <div class="price-table top60 wow fadeInUp" data-wow-delay="450ms">
              <img src = "assets/images/merchandise/mug1.png" style="width:282px"></img>
               <div class="clearfix"></div>
             <a href="https://wa.me/+628562898979" class="button btnprimary top20">Beli</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Merchandise ends-->

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

<!-- Kontak -->
<section id="kontak" class="padding_top">
   <div class="container"><br><br>
      <div class="row">
        <div class="col-md-12 col-sm-12">
           <div class="heading-title heading_space wow fadeInUp" data-wow-delay="300ms">
               <span>Salurkan Infaq & Sodaqoh Anda</span>
               <h2 class="darkcolor">Hubungi Kami</h2>
            </div>
        </div>
         <div class="col-md-6 col-sm-12 margin_bottom wow fadeInUp" data-wow-delay="350ms">
            <p>Terima kasih atas kritik dan saran serta donasi yang anda berikan, kami akan selalu berusaha lebih baik lagi dalam memakmurkan masjid demi kepentingan umat.</p>
            <div class="row">
               <div class="col-md-6 col-sm-6 our-address top40">
                  <h5 class="bottom25">Alamat</h5>
                  <p class="bottom15">Jl. Babadan 739 Banguntapan, Bantul, Yogyakarta.</p>
                  <a class="pickus" href="#kontak" class="nav link pagescroll" data-text="Petunjuk Arah">Petunjuk Arah</a>
               </div>
               <div class="col-md-6 col-sm-6 our-address top40">
                  <h5 class="bottom25">Telepon</h5>
                  <p class="bottom15"> Telp : 0274-555732 <span class="block">
                     Mobile : 085 628 989 79
                  </span> </p>
                  <a class="pickus" href="https://wa.me/+628562898979" data-text="Hubungi Kami">Hubungi Kami</a>
               </div>
               <div class="col-md-6 col-sm-6 our-address top40">
                  <h5 class="bottom25">Email</h5>
                  <p class="bottom15">Email: masjidpathoknagari@gmail.com <span class="block">IPIB  : IPIB@gmail.com</span> </p>
                  <a class="pickus" href="#." data-text="Kirim Pesan">Kirim Pesan</a>
               </div>
			    <div class="col-md-6 col-sm-6 our-address top40">
                  <h5 class="bottom25">Rekening</h5>
                  <p class="bottom15"> BNI Syariah 0500-262-00000-185-3 a/n Ikatan Pemuda Islam Babadan</p>
                  <a class="pickus" href="#." data-text="Infaq dan Shodaqoh">Infaq dan Shodaqoh</a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-sm-12 margin_bottom">
            <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
               <div class="row">

                  <div class="col-sm-12" id="result"></div>

                  <div class="col-md-6 col-sm-6">
                     <div class="form-group bottom35">
                        <input class="form-control" type="text" placeholder="Nama Depan " required id="first_name" name="first_name">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="form-group bottom35">
                        <input class="form-control" type="text" placeholder="Nama Belakang " required id="last_name" name="last_name">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="form-group bottom35">
                        <input class="form-control" type="email" placeholder="Email " required id="email" name="email">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="form-group bottom35">
                        <input class="form-control" type="tel" placeholder="Telepon " id="phone" name="phone">
                     </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                     <div class="form-group bottom35">
                        <textarea class="form-control" placeholder="Pesan" id="message" name="message"></textarea>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <button type="submit" class="button btnprimary" id="submit_btn">Kirim</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
<!--Location Map here-->
<div id="map-container" style="position: relative; overflow: hidden;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9145938275583!2d110.40445308236907!3d-7.798866756827787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5767325ce71d%3A0x3c6ecf319bdc98e4!2sMasjid+Pathok+Negara+Ad-Darojat+Babadan!5e0!3m2!1sid!2sid!4v1482320261664"
	width="1130" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
     <div class="col-md-12 col-sm-12 text-center">
      <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
      <!-- Histats.com  START  (aync)-->
				<script type="text/javascript">var _Hasync= _Hasync|| [];
				_Hasync.push(['Histats.start', '1,4198969,4,205,255,27,00011000']);
				_Hasync.push(['Histats.fasi', '1']);
				_Hasync.push(['Histats.track_hits', '']);
				(function() {
				var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
				hs.src = ('//s10.histats.com/js15_as.js');
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')				               [0]).appendChild(hs);
				})();</script>
				<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4198969&101" 		                     alt="" border="0"></a></noscript>
	<!-- Histats.com  END  -->
	</div>
</section>
