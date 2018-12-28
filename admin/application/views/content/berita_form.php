<style media="screen">
  body {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 14px;
    }
  .container {
      padding: 20px;
    }
</style>

<div class="page-content">
  <div class="page-bar">
    <?php echo $title_page ?>
  </div>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-body form">
              <form class="" action="<?php echo base_url($action_add)?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="form-group">
                        <label for="">Judul Berita</label>
                        <input type="hidden" name="berita_id" class="form-control"
                        value="<?php echo isset($berita_details->berita_id) ? $berita_details->berita_id : ""?>" required>
                        <input type="text" name="berita_nama" class="form-control"
                        value="<?php echo isset($berita_details->berita_nama) ? $berita_details->berita_nama : ""?>" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ringkas Berita</label>
                        <textarea class="form-control" id="ringkas_berita" rows="6" required
                        data-validation-required-message="Please enter your message" minlength="5"
                        data-validation-minlength-message="Min 5 characters" name="berita_summary";
                        maxlength="999" style="resize:none" data-toggle="tooltip" required title="Character tidak boleh melebihi 300 character"><?php echo isset($berita_details->berita_summary) ? $berita_details->berita_summary : ""; ?>
                        </textarea>
                        <div class="tooltip top" role="tooltip">
                          <div class="tooltip-arrow"></div>
                          <div class="tooltip-inner">
                            Some tooltip text!
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="img-box">
                          <input type="file" id="berita_photo" name="berita_photo" class="btn btn-default" value="<?php echo $berita_details->berita_photo; ?>" onchange="berita_readURL(this);">
                          <?php $img_berita = isset($berita_details->berita_photo) ? $berita_details->berita_photo : "img_not_found.png";?>
                          <div class="">&nbsp;</div>
                          <img style="max-width: 200px!important; max-height: 400px!important;" class="img-responsive" src="<?php echo base_url('assets/img/items/'.$img_berita)?>" alt="" id="berita_img_preview">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <button type="submit" class="btn btn-primary" id="Btnsave_berita">Simpan</button>
                      <a href="<?php echo base_url($action_close)?>" class="btn btn-danger">Keluar</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#ringkas_berita').on('keyup', function () {
                var ringkasberita = $('#ringkas_berita').val();
                if (ringkasberita.length > 200) {
                  new PNotify({
                    title: 'Warning !',
                    text: 'Character yang anda input melebihi limit (200) .',
                    type: 'error'
                  });

                  $('#Btnsave_berita').prop('disabled', true);
                } else {
                  $('#Btnsave_berita').prop('disabled', false);
                }
            })

            $('#ringkas_berita').tooltip({
                placement: "right",
                trigger: "focus"
            });

        })

        function berita_readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
              $('#berita_img_preview').empty();
              $('#berita_img_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
