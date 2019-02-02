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
                        <label for="">Judul Kajian</label>
                        <input type="hidden" name="kajian_id" class="form-control"
                        value="<?php echo isset($kajian_details->kajian_id) ? $kajian_details->kajian_id : ""?>" required>
                        <input type="text" name="kajian_nama" class="form-control"
                        value="<?php echo isset($kajian_details->kajian_nama) ? $kajian_details->kajian_nama : ""?>" required>
                      </div>
                      <div class="form-group">
                        <label for="">Penulis</label>
                        <input type="text" name="kajian_penulis" class="form-control"
                        value="<?php echo isset($kajian_details->kajian_penulis) ? $kajian_details->kajian_penulis : ""?>" required>
                      </div>
                      <div class="form-group">
                        <label for="">Tanggal Kajian</label>
                        <div class="input-group date" data-provide="datepicker" style="width: 400px;">
                            <input type="text" class="form-control" name="kajian_tanggal"
                            value="<?php echo isset($kajian_details->kajian_tanggal) ? date('d-m-Y', strtotime($kajian_details->kajian_tanggal)) : ""?>" required>
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ringkas Kajian</label>
                        <textarea class="form-control" id="ringkas_kajian" rows="6" required
                        data-validation-required-message="Please enter your message" minlength="5"
                        data-validation-minlength-message="Min 5 characters" name="kajian_summary";
                        maxlength="999" style="resize:none" data-toggle="tooltip" required title="Character tidak boleh melebihi 300 character"><?php echo isset($kajian_details->kajian_summary) ? $kajian_details->kajian_summary : ""; ?>
                        </textarea>
                        <div class="tooltip top" role="tooltip">
                          <div class="tooltip-arrow"></div>
                          <div class="tooltip-inner">
                            Some tooltip text!
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Isi Kajian</label>
                        <textarea id="isi_kajian" name="kajian_isi">
                          <?php echo isset($kajian_details->kajian_isi) ? $kajian_details->kajian_isi : ""; ?>
                        </textarea>
                      </div>
                      <div class="form-group">
                        <div class="img-box">
                          <input type="file" id="kajian_photo" name="kajian_photo" class="btn btn-default" value="<?php echo $kajian_details->kajian_photo; ?>" onchange="kajian_readURL(this);">
                          <?php $img_kajian = isset($kajian_details->kajian_photo) ? $kajian_details->kajian_photo : "img_not_found.png";?>
                          <div class="">&nbsp;</div>
                          <img style="max-width: 200px!important; max-height: 400px!important;" class="img-responsive" src="<?php echo base_url('assets/img/items/'.$img_kajian)?>" alt="" id="kajian_img_preview">
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

            $('#isi_kajian').summernote({
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

        function kajian_readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
              $('#kajian_img_preview').empty();
              $('#kajian_img_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
