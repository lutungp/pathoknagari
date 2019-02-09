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
                        <label for="">Judul Majelis Ilmu</label>
                        <input type="hidden" name="majelisilmu_id" class="form-control"
                        value="<?php echo isset($majelisilmu_details->majelisilmu_id) ? $majelisilmu_details->majelisilmu_id : ""?>" required>
                        <input type="text" name="majelisilmu_judul" class="form-control"
                        value="<?php echo isset($majelisilmu_details->majelisilmu_judul) ? $majelisilmu_details->majelisilmu_judul : ""?>" required>
                      </div>
                      <div class="form-group">
                        <label for="">Narasumber</label>
                        <input type="text" name="majelisilmu_narasumber" class="form-control"
                        value="<?php echo isset($majelisilmu_details->majelisilmu_narasumber) ? $majelisilmu_details->majelisilmu_narasumber : ""?>" required>
                      </div>
                      <div class="form-group">
                        <label for="">Urutan</label>
                        <select class="form-control js-example-basic-single" id="majelisilmu_urutan" name="majelisilmu_urutan">
                          <?php
                            $majelisilmu_urutan = isset($majelisilmu_details->majelisilmu_urutan) ? $majelisilmu_details->majelisilmu_urutan : "";
                           ?>
                          <option value="1" <?php if ($majelisilmu_urutan == 1) { echo "selected"; } ?>>1</option>
                          <option value="2" <?php if ($majelisilmu_urutan == 2) { echo "selected"; } ?>>2</option>
                          <option value="3" <?php if ($majelisilmu_urutan == 3) { echo "selected"; } ?>>3</option>
                          <option value="4" <?php if ($majelisilmu_urutan == 4) { echo "selected"; } ?>>4</option>
                          <option value="5" <?php if ($majelisilmu_urutan == 5) { echo "selected"; } ?>>5</option>
                          <option value="6" <?php if ($majelisilmu_urutan == 6) { echo "selected"; } ?>>6</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" id="majelisilmu_keterangan" rows="6" required
                        data-validation-required-message="Please enter your message" minlength="5"
                        data-validation-minlength-message="Min 5 characters" name="majelisilmu_keterangan";
                        maxlength="999" style="resize:none" data-toggle="tooltip"
                        required title="Character tidak boleh melebihi 300 character"><?php echo isset($majelisilmu_details->majelisilmu_keterangan) ? $majelisilmu_details->majelisilmu_keterangan : ""; ?></textarea>
                        <div class="tooltip top" role="tooltip">
                          <div class="tooltip-arrow"></div>
                          <div class="tooltip-inner">
                            Some tooltip text!
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <button type="submit" class="btn btn-primary" id="Btnsave_majelisilmu">Simpan</button>
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
            $('#ringkas_majelisilmu').on('keyup', function () {
                var ringkasmajelisilmu = $('#ringkas_majelisilmu').val();
                if (ringkasmajelisilmu.length > 200) {
                  new PNotify({
                    title: 'Warning !',
                    text: 'Character yang anda input melebihi limit (200) .',
                    type: 'error'
                  });

                  $('#Btnsave_majelisilmu').prop('disabled', true);
                } else {
                  $('#Btnsave_majelisilmu').prop('disabled', false);
                }
            })

            $('#ringkas_majelisilmu').tooltip({
                placement: "right",
                trigger: "focus"
            });

            $('#isi_majelisilmu').summernote({
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

        function majelisilmu_readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
              $('#majelisilmu_img_preview').empty();
              $('#majelisilmu_img_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
