
<style media="screen">
    .running-textfield {
      display: none
    }
</style>
 <!-- <div class="page-content-wrapper"> -->
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN DASHBOARD STATS 1-->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="1349" id="dataBookToday">0</span>
                        </div>
                        <div class="desc">Saldo Infaq</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="12,5" id="dataBookTodayconfirm">0</span></div>
                        <div class="desc">Saldo Infaq Tarawih</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                    <div class="visual">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="549" id="dataBookTodayunconfirm">0</span>
                        </div>
                        <div class="desc">Saldo Infaq Shubuh</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                    <div class="visual">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="details">
                        <div class="number"> +
                            <span data-counter="counterup" data-value="89"></span>% </div>
                        <div class="desc"> Rata-Rata Jama'ah </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-xs-12 col-sm-12">
              <div class="portlet light" style="background-color: #fbfafa;">
                  <div class="portlet-title tabbable-line">
                      <div class="caption">
                          <i class="icon-bubbles font-dark hide"></i>
                          <span class="caption-subject font-dark bold uppercase">Profile</span>
                          <div class="mt-comment-info">
                              <span class="mt-comment-date">Last Update. 26 Feb, 10:30AM</span>
                          </div>
                      </div>
                  </div>
                  <div class="portlet-body">
                      <div class="tab-content">
                          <div class="tab-pane active">
                              <!-- BEGIN: Comments -->
                              <div class="mt-comments">
                                  <div class="mt-comment">
                                      <div class="mt-comment-body">
                                          <div class="mt-comment-info">
                                              <span class="mt-comment-author">Running Text</span>
                                          </div>
                                          <div id="view-runtext" class="mt-comment-text"> <?php echo isset($webprofile->webprofile_runtext) ? $webprofile->webprofile_runtext : ""; ?> </div>
                                          <textarea class="form-control running-textfield" id="ringkas_runtext" rows="6" required
                                          data-validation-required-message="Please enter your message" minlength="5"
                                          data-validation-minlength-message="Min 5 characters" name="kajian_summary";
                                          maxlength="999" style="resize:none" data-toggle="tooltip"
                                          required title="Character tidak boleh melebihi 300 character"><?php echo isset($webprofile->webprofile_runtext) ? $webprofile->webprofile_runtext : ""; ?></textarea>
                                          <div class="tooltip top" role="tooltip">
                                            <div class="tooltip-arrow"></div>
                                            <div class="tooltip-inner">
                                              Some tooltip text!
                                            </div>
                                          </div>
                                          <div class="mt-comment-details">
                                              <ul class="mt-comment-actions">
                                                  <li>
                                                      <a href="javascript:void(0)" onclick="update_runningtext()">Quick Edit</a>
                                                  </li>
                                                  <li>
                                                      <a href="javascript:void(0)" onclick="save_runningtext()">Save Edit</a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- END: Comments -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-xs-12 col-sm-12">
              <div class="portlet light" style="background-color: #fbfafa;">
                  <div class="portlet-title tabbable-line">
                      <div class="caption">
                          <i class="icon-bubbles font-dark hide"></i>
                          <span class="caption-subject font-dark bold uppercase">Content</span>
                          <div class="mt-comment-info">
                              <span class="mt-comment-date">Last Update. 26 Feb, 10:30AM</span>
                          </div>
                      </div>
                  </div>
                  <div class="portlet-body">
                      <div class="tab-content">
                          <div class="tab-pane active">
                              <!-- BEGIN: Comments -->
                              <div class="mt-comments">
                                  <div class="mt-comment">
                                      <div class="mt-comment-body">
                                          <div class="mt-comment-info">
                                              <span class="mt-comment-author">Youtube Embed</span>
                                          </div>
                                          <div id="view-youtube-embed" class="mt-comment-text"> <?php echo isset($webcontent->webprofile_runtext) ? $webcontent->webprofile_runtext : ""; ?> </div>
                                          <textarea class="form-control running-textfield" id="youtube-embed-textarea" rows="6" required
                                          data-validation-required-message="Please enter your message" minlength="5"
                                          data-validation-minlength-message="Min 5 characters" name="kajian_summary";
                                          maxlength="999" style="resize:none" data-toggle="tooltip"
                                          required title="Character tidak boleh melebihi 300 character"> <?php echo isset($webcontent->webprofile_runtext) ? $webcontent->webprofile_runtext : ""; ?> </textarea>
                                          <div class="tooltip top" role="tooltip">
                                            <div class="tooltip-arrow"></div>
                                            <div class="tooltip-inner">
                                              Some tooltip text!
                                            </div>
                                          </div>
                                          <div class="mt-comment-details">
                                              <ul class="mt-comment-actions">
                                                  <li>
                                                      <a href="javascript:void(0)" onclick="update_youtube_embed()">Quick Edit</a>
                                                  </li>
                                                  <li>
                                                      <a href="javascript:void(0)" onclick="save_youtube_embed()">Save Edit</a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- END: Comments -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <!-- END DASHBOARD STATS 1-->
        <div class="row">

        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>

<script type="text/javascript">
  function update_runningtext() {
      var ringkas_runtext = $('#ringkas_runtext')
      if (ringkas_runtext.css('display') == 'none') {
          $('#ringkas_runtext').css('display', 'block')
          $('#view-runtext').css('display', 'none')
      } else {
          $('#ringkas_runtext').css('display', 'none')
          $('#view-runtext').css('display', 'block')
      }
  }

  function save_runningtext() {
      var ringkas_runtext = $('#ringkas_runtext')[0].value
      $('#ringkas_runtext').css('display', 'none')
      $('#view-runtext').css('display', 'block')

      $.ajax({
         type: "POST",
         url: '<?php echo site_url('C_dashboard/save_webprofile')?>',
         data: {webprofile_runtext : ringkas_runtext}, // serializes the form's elements.
         success: function(data) {
             $('#view-runtext').html(ringkas_runtext)

             new PNotify({
               title: 'Success !',
               text: 'Running Text berhasil disimpan .',
               type: 'success'
             });
         }
       });
  }

  function update_youtube_embed() {
      var youtube_embed = $('#youtube-embed-textarea')
      if (youtube_embed.css('display') == 'none') {
          $('#youtube-embed-textarea').css('display', 'block')
          $('#view-youtube-embed').css('display', 'none')
      } else {
          $('#youtube-embed-textarea').css('display', 'none')
          $('#view-youtube-embed').css('display', 'block')
      }
  }

  function save_youtube_embed() {
      var youtube_embed = $('#youtube-embed-textarea')[0].value
      $('#youtube-embed-textarea').css('display', 'none')
      $('#view-youtube-embed').css('display', 'block')

      $.ajax({
         type: "POST",
         url: '<?php echo site_url('C_dashboard/save_webcontent')?>',
         data: {youtube_embed : youtube_embed}, // serializes the form's elements.
         success: function(data) {
             $('#view-youtube-embed').html(youtube_embed)

             new PNotify({
               title: 'Success !',
               text: 'Youtube embed berhasil disimpan .',
               type: 'success'
             });
         }
       });
  }

</script>
