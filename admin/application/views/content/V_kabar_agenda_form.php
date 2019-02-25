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
                        <label for="">Judul Agenda</label>
                        <input type="hidden" name="agenda_id" class="form-control"
                        value="<?php echo isset($agenda_details->agenda_id) ? $agenda_details->agenda_id : ""?>" required>
                        <input type="text" name="agenda_nama" class="form-control"
                        value="<?php echo isset($agenda_details->agenda_nama) ? $agenda_details->agenda_nama : ""?>" required>
                      </div>
                      <div class="form-group">
                        <label for="">Tanggal Agenda</label>
                        <div class="input-group date" data-provide="datepicker" style="width: 400px;">
                            <input type="text" class="form-control" name="agenda_tanggal"
                            value="<?php echo isset($agenda_details->agenda_tanggal) ? date('d-m-Y', strtotime($agenda_details->agenda_tanggal)) : ""?>" required>
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="img-box">
                          <input type="file" id="agenda_photo" name="agenda_photo" class="btn btn-default" value="<?php echo $agenda_details->agenda_photo; ?>" onchange="agenda_readURL(this);">
                          <?php $img_kajian = isset($agenda_details->agenda_photo) ? $agenda_details->agenda_photo : "img_not_found.png";?>
                          <div class="">&nbsp;</div>
                          <img style="max-width: 200px!important; max-height: 400px!important;" class="img-responsive" src="<?php echo base_url('assets/img/items/'.$img_kajian)?>" alt="" id="agenda_img_preview">
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

            $('#agenda_isi').summernote({
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

        function agenda_readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
              $('#agenda_img_preview').empty();
              $('#agenda_img_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
