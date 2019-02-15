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
                        <label for="">Judul Kabar</label>
                        <input type="hidden" name="kabar_id" class="form-control"
                        value="<?php echo isset($kabar_details->kabar_id) ? $kabar_details->kabar_id : ""?>" required>
                        <input type="text" name="kabar_nama" class="form-control"
                        value="<?php echo isset($kabar_details->kabar_nama) ? $kabar_details->kabar_nama : ""?>" required>
                      </div>
                      <div class="form-group">
                        <label for="">Penulis</label>
                        <input type="text" name="kabar_penulis" class="form-control"
                        value="<?php echo isset($kabar_details->kabar_penulis) ? $kabar_details->kabar_penulis : ""?>" required>
                      </div>
                      <div class="form-group">
                        <label for="">Tanggal Kabar</label>
                        <div class="input-group date" data-provide="datepicker" style="width: 400px;">
                            <input type="text" class="form-control" name="kabar_tanggal"
                            value="<?php echo isset($kabar_details->kabar_tanggal) ? date('d-m-Y', strtotime($kabar_details->kabar_tanggal)) : ""?>" required>
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ringkas Kabar</label>
                        <textarea class="form-control" id="ringkas_kajian" rows="6" required
                        data-validation-required-message="Please enter your message" minlength="5"
                        data-validation-minlength-message="Min 5 characters" name="kabar_summary";
                        maxlength="999" style="resize:none" data-toggle="tooltip" required title="Character tidak boleh melebihi 300 character"><?php echo isset($kabar_details->kabar_summary) ? $kabar_details->kabar_summary : ""; ?></textarea>
                        <div class="tooltip top" role="tooltip">
                          <div class="tooltip-arrow"></div>
                          <div class="tooltip-inner">
                            Some tooltip text!
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Isi Kabar</label>
                        <textarea id="kabar_isi" name="kabar_isi"><?php echo isset($kabar_details->kabar_isi) ? $kabar_details->kabar_isi : ""; ?></textarea>
                      </div>
                      <div class="form-group">
                        <div class="img-box">
                          <input type="file" id="kabar_photo" name="kabar_photo" class="btn btn-default" value="<?php echo $kabar_details->kabar_photo; ?>" onchange="kabar_readURL(this);">
                          <?php $img_kajian = isset($kabar_details->kabar_photo) ? $kabar_details->kabar_photo : "img_not_found.png";?>
                          <div class="">&nbsp;</div>
                          <img style="max-width: 200px!important; max-height: 400px!important;" class="img-responsive" src="<?php echo base_url('assets/img/items/'.$img_kajian)?>" alt="" id="kabar_img_preview">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <button type="submit" class="btn btn-primary" id="Btnsave_kajian">Simpan</button>
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
            $('#ringkas_kajian').on('keyup', function () {
                var ringkaskajian = $('#ringkas_kajian').val();
                if (ringkaskajian.length > 200) {
                  new PNotify({
                    title: 'Warning !',
                    text: 'Character yang anda input melebihi limit (200) .',
                    type: 'error'
                  });

                  $('#Btnsave_kajian').prop('disabled', true);
                } else {
                  $('#Btnsave_kajian').prop('disabled', false);
                }
            })

            $('#ringkas_kajian').tooltip({
                placement: "right",
                trigger: "focus"
            });

            $('#kabar_isi').summernote({
                tabsize: 2,
                height: 400,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'italic', 'underline', 'clear']],
                  ['fontname', ['fontname']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['view', ['codeview']],
                ]
            });
        })

        function kabar_readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
              $('#kabar_img_preview').empty();
              $('#kabar_img_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
