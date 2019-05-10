<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url" content="https://pathoknagari.id/berita-detail?message=<?php echo $berita_id ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $berita_detail['data'][0]['berita_nama']; ?>" />
    <meta property="og:description" content="<?php echo $berita_detail['data'][0]['berita_summary']; ?>" />
    <meta property="og:image" itemprop="image" content="<?php echo $berita_detail['img_url'] . $berita_detail['data'][0]['berita_photo']?>" />
    <title>Pathok Nagari</title>
    <link href="assets/images/212.png" rel="icon">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets_custom/css/style.css">
    <link rel="stylesheet" href="assets_2/css/style.css">

    <!-- Meta Tags Generated -->


    <!-- Markup JSON-LD -->
    <script type="application/ld+json">
       {
          "@context": "http://schema.org",
          "@type": "Organization",
          "url": "https://pathoknagari.id",
          "logo": "https://pathoknagari.id/assets/images/21.png"
        }
      }
    </script>
    <style media="screen">
        .news_item {
            height: auto;
        }

        #navbar_header {
          -webkit-box-pack: unset !important;
          justify-content: normal;
        }

        #navbar_btn {
          position: absolute;
          right: 10px;
          top: 40px;
        }

        .mobile {
          display: none;
        }

        @media (max-width: 700px) {
           .no-mobile {
             display: none;
           }

           .mobile {
             display: block;
           }
        }

    </style>
  </head>
  <body  data-spy="scroll" data-target=".navbar" data-offset="90">
    <link itemprop="thumbnailUrl" href="url_image">
    <span itemprop="thumbnail" itemscope itemtype="<?php echo $berita_detail['img_url'] . $berita_detail['data'][0]['berita_photo']?>">
      <link itemprop="url" href="url_image">
    </span>
    <!--PreLoader-->
    <div class="loader">
       <div class="loader-inner">
          <img src="assets/images/Preloader_3.gif" alt="">
       </div>
    </div>
    <!--PreLoader Ends-->


    <!-- header -->
    <header class="site-header">
      <nav class="navbar navbar-expand-lg transparent-bg fixedmenu">
        <nav class="navbar">
          <marquee style="background:#000000;font-style:bold;color:white;" behavior="scroll" direction="left">
              <?php echo $running_text['data'][0]['webprofile_runtext']; ?>
          </marquee>
          <div id="navbar_header" class="container">
            <a class="navbar-brand" href="beranda">
              <img src="assets/images/pn5-transparent.png" alt="logo">
            </a>
            <button id="navbar_btn" class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#xenav">
              <span> </span>
              <span> </span>
              <span> </span>
            </button>
            <div class="collapse navbar-collapse" id="xenav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="beranda#berita">Kabar Ad-Darojat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="beranda#agenda">Majelis Ilmu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="beranda#profil">Profil Masjid</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="beranda#streaming">Live Streaming</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="beranda#kontak">Kontak</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href=""></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </nav>

       <!-- side menu -->
      <a id="close_side_menu" href="javascript:void(0);"></a>
       <!-- End side menu -->
    </header>
    <!-- header -->

    <!-- berita-detail -->
    <section id="berita-detail" class="padding bglight">
       <div class="container">
          <div class="row">
             <div class="col-md-8">
                <div class="news_item shadow">
                   <div class="image">
                      <img src="<?php echo $berita_detail['img_url'] . $berita_detail['data'][0]['berita_photo']?>" alt="Latest News" class="img-responsive">
                   </div>
                    <div class="news_desc text-left">
                      <h3 class="text-capitalize font-light darkcolor"><a href="berita-detail"><?php echo $berita_detail['data'][0]['berita_nama']; ?></a></h3>
                      <ul class="meta-tags top20 bottom20">
                        <li><a href="#."><i class="fa fa-calendar"></i><?php echo date("d M Y", strtotime($berita_detail['data'][0]['berita_tanggal'])); ?></a></li>
                        <li><a href="#."> <i class="fa fa-user-o"></i><?php echo $berita_detail['data'][0]['berita_penulis']; ?></a></li>
                      </ul>
                      <p class="bottom35">
                        <?php echo html_entity_decode($berita_detail['data'][0]['berita_isi']); ?>
                      </p>

                      <div class="profile-authors heading_space">
                        <div class="row" style="margin-bottom: 10px;">
                          <button id="shareFbBtn" type="button" class="btn btn-facebook"><i class="fa fa-facebook fa-2"></i></button>
                          &nbsp;
                          <button type="button" class="mobile btn btn-facebook" href="whatsapp://send?text=https://pathoknagari.id/berita-detail?message=<?php echo $berita_id ?>" data-action="share/whatsapp/share">
                            <i class="fa fa-whatsapp fa-2"></i>
                          </button>
                          <a type="button" class="no-mobile btn btn-facebook" href="https://web.whatsapp.com/send?text=https://pathoknagari.id/berita-detail?message=<?php echo $berita_id ?>" data-action="share/whatsapp/share">
                            <i class="fa fa-whatsapp fa-2"></i>
                          </a>
                        </div>
                        <h4 class="text-capitalize darkcolor bottom40">Tinggalkan Komentar</h4>
                        <div class="fb-comments" data-href="https://pathoknagari.id/berita-detail?message=<?php echo $berita_id ?>" data-width="670" data-numposts="5"></div>
                        <div id="fb-root"></div>
                      </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
             <div class="col-md-4">
                <aside class="sidebar whitebox">
                   <div class="widget heading_space">
                      <h4 class="text-capitalize darkcolor bottom20">Kabar Terbaru</h4>
                      <?php
                          $terbaru = "";
                          foreach ($berita_terbaru['data'] as $keybaru => $valuebaru) {
                              $terbaru .= " <div class='bottom15'>
                                               <a href='javascript:void(0)' onclick='berita_detail(this)' class='post' value='" . $valuebaru['berita_id'] . "'>
                                                  <div class='row' style='font-size: 10px;'>
                                                  <img src='" . $berita_terbaru['img_url'] . $valuebaru['berita_photo'] . "' alt='post image'
                                                  style='width: 80px;height: 50px;'>
                                                      <div style='width: 200px;padding-left:10px;'>
                                                      " . $valuebaru['berita_nama'] . "
                                                      </div>
                                                  </div>
                                               </a>
                                            </div> ";
                          }
                       ?>

                       <?php echo $terbaru; ?>
                   </div>
                   <div class="widget heading_space">
                      <h4 class="text-capitalize darkcolor bottom20">Kategori</h4>
                      <ul class="webcats">
                         <li><a href="#.">Kajian Islami <span>(20)</span></a></li>
                         <li><a href="#.">Kabar Ad-Darojat <span>(05)</span></a></li>
                      </ul>
                   </div>
                   <div class="widget heading_space">
                      <h4 class="text-capitalize darkcolor bottom20">Pencarian</h4>
                      <form class="widget_search">
                         <div class="input-group">
                            <input type="search" class="form-control" placeholder="cari..." required>
                            <button type="submit" class="input-group-addon"><i class="fa fa-search"></i> </button>
                         </div>
                      </form>
                   </div>
                </aside>
             </div>
          </div>
       </div>
    </section>
    <!--Berita Ends-->

    <!--Site Footer Here-->
    <footer id="site-footer" class="padding_half">
       <div class="container">
          <div class="row">
             <div class="col-md-12 col-sm-12 text-center">
               <img src="assets/images/pn1-transparent.png" alt="logo" class="footer-logo bottom45">
                <ul class="social-icons small bottom25 wow fadeInUp" data-wow-delay="300ms">
                  <li><a href="https://www.facebook.com/pathoknagoro.addarojat?fref=ts/"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/ipib.update/"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="https://twitter.com/ipib1960/"><i class="fa fa-twitter"></i></a></li>
      	          <li><a href="https://wa.me/+628562898979"><i class="fa fa-whatsapp"></i> </a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-envelope-o"></i> </a></li>
                </ul>
                <p class="copyrights wow fadeInUp" data-wow-delay="400ms"> IPIB Production &copy; 2018</p>
             </div>
          </div>
       </div>
    </footer>
    <!--Footer ends-->


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-3.1.1.min.js"></script>

  <!--Bootstrap Core-->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!--to view items on reach-->
  <script src="assets/js/jquery.appear.js"></script>

  <!--Equal-Heights-->
  <script src="assets/js/jquery.matchHeight-min.js"></script>

  <!--Owl Slider-->
  <script src="assets/js/owl.carousel.min.js"></script>

  <!--number counters-->
  <script src="assets/js/jquery-countTo.js"></script>

  <!--Parallax Background-->
  <script src="assets/js/parallaxie.js"></script>

  <!--Cubefolio Gallery-->
  <script src="assets/js/jquery.cubeportfolio.min.js"></script>

  <!--FancyBox popup-->
  <script src="assets/js/jquery.fancybox.min.js"></script>

  <!-- Video Background-->
  <!-- <script src="assets/js/jquery.background-video.js"></script> -->

  <!--TypeWriter-->
  <script src="assets/js/typewriter.js"></script>

  <!--Particles-->
  <script src="assets/js/particles.min.js"></script>

  <!--WOw animations-->
  <script src="assets/js/wow.min.js"></script>

  <!--Revolution SLider-->
  <script src="assets/js/revolution/jquery.themepunch.tools.min.js"></script>
  <script src="assets/js/revolution/jquery.themepunch.revolution.min.js"></script>
  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS-->
  <script src="assets/js/revolution/extensions/revolution.extension.actions.min.js"></script>
  <script src="assets/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
  <script src="assets/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="assets/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="assets/js/revolution/extensions/revolution.extension.migration.min.js"></script>
  <script src="assets/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
  <script src="assets/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
  <script src="assets/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
  <!-- <script src="assets/js/revolution/extensions/revolution.extension.video.min.js"></script> -->

  <script type='text/javascript' data-cfasync='false'>
    window.purechatApi = {
       l: [], t: [], on: function () {
         this.l.push(arguments);
       }
    };

    (function () {
      var done = false;
      var script = document.createElement('script'); script.async = true;
      script.type = 'text/javascript';
      script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';
      document.getElementsByTagName('HEAD').item(0).appendChild(script);
      script.onreadystatechange = script.onload = function (e) {
        if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
          var w = new PCWidget({c: '01d08824-a3a9-453b-9891-dd06c87837df', f: true }); done = true;
        }
      };
    })();

  </script>

  <!--Google Map API-->
  <script src="assets/js/functions.js"></script>
  <script type="text/javascript">

      window.fbAsyncInit = function() {
        FB.init({
          appId      : '417994868791839',
          cookie     : true,
          xfbml      : true,
          version    : 'v3.2'
        });

        FB.AppEvents.logPageView();

      };


      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2&appId=417994868791839&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      document.getElementById('shareFbBtn').onclick = function() {
          FB.ui({
            method: 'share',
            display: 'popup',
            href: 'https://pathoknagari.id/berita-detail?message=<?php echo $berita_id ?>'
          }, function(response){});
      }
      /* auto submission ketika reload */
      if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
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

          map = window.open("", "_self");

          if (map) {
              mapForm.submit();
          } else {
              alert('You must allow popups for this map to work.');
          }
      }

  </script>
  </body>
</html>
