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
                        <label for="">Judul Iklan</label>
                        <input type="hidden" name="iklan_id" class="form-control"
                        value="<?php echo isset($iklan_details->iklan_id) ? $iklan_details->iklan_id : ""?>" required>
                        <input type="text" name="iklan_nama" class="form-control"
                        value="<?php echo isset($iklan_details->iklan_nama) ? $iklan_details->iklan_nama : ""?>" required>
                      </div>
                      <div class="form-group">
                        <label for="">Penulis</label>
                        <input type="text" name="iklan_penulis" class="form-control"
                        value="<?php echo isset($iklan_details->iklan_penulis) ? $iklan_details->iklan_penulis : ""?>" required>
                      </div>
                      <div class="form-group">
                        <label for="">Tanggal Iklan</label>
                        <div class="input-group date" data-provide="datepicker" style="width: 400px;">
                            <input type="text" class="form-control" name="iklan_tanggal"
                            value="<?php echo isset($iklan_details->iklan_tanggal) ? date('d-m-Y', strtotime($iklan_details->iklan_tanggal)) : ""?>" required>
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ringkas Iklan</label>
                        <textarea class="form-control" id="ringkas_iklan" rows="6" required
                        data-validation-required-message="Please enter your message" minlength="5"
                        data-validation-minlength-message="Min 5 characters" name="iklan_summary";
                        maxlength="999" style="resize:none" data-toggle="tooltip" required title="Character tidak boleh melebihi 300 character"><?php echo isset($iklan_details->iklan_summary) ? $iklan_details->iklan_summary : ""; ?></textarea>
                        <div class="tooltip top" role="tooltip">
                          <div class="tooltip-arrow"></div>
                          <div class="tooltip-inner">
                            Some tooltip text!
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Isi Iklan</label>
                        <textarea id="iklan_isi" name="iklan_isi"><?php echo isset($iklan_details->iklan_isi) ? $iklan_details->iklan_isi : ""; ?></textarea>
                      </div>
                      <div class="form-group">
                        <div class="img-box">
                          <input type="file" id="iklan_photo" name="iklan_photo" class="btn btn-default" value="<?php echo $iklan_details->iklan_photo; ?>" onchange="iklan_readURL(this);">
                          <?php $img_kajian = isset($iklan_details->iklan_photo) ? $iklan_details->iklan_photo : "img_not_found.png";?>
                          <div class="">&nbsp;</div>
                          <img style="max-width: 200px!important; max-height: 400px!important;" class="img-responsive" src="<?php echo base_url('assets/img/items/'.$img_kajian)?>" alt="" id="iklan_img_preview">
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
            $('#ringkas_iklan').on('keyup', function () {
                var ringkaskajian = $('#ringkas_iklan').val();
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

            $('#ringkas_iklan').tooltip({
                placement: "right",
                trigger: "focus"
            });

            $('#iklan_isi').summernote({
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

        function iklan_readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
              $('#iklan_img_preview').empty();
              $('#iklan_img_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
