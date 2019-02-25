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
                        <label for="">Nama Pemuda</label>
                        <input type="hidden" name="pegawai_id" class="form-control"
                        value="<?php echo isset($pemuda_details->pegawai_id) ? $pemuda_details->pegawai_id : ""?>" required>
                        <input type="text" name="pegawai_nama" class="form-control"
                        value="<?php echo isset($pemuda_details->pegawai_nama) ? $pemuda_details->pegawai_nama : ""?>" required>
                      </div>
                      <div class="form-group">
                        <label for="">Jabatan</label>
                        <input type="text" name="pegawai_jabatan" class="form-control"
                        value="<?php echo isset($pemuda_details->pegawai_jabatan) ? $pemuda_details->pegawai_jabatan : ""?>" required>
                      </div>
                      <div class="form-group">
                        <div class="img-box">
                          <input type="file" id="pegawai_photo" name="pegawai_photo" class="btn btn-default" value="<?php echo $pemuda_details->pegawai_photo; ?>" onchange="pegawai_readURL(this);">
                          <?php $img_pemuda = isset($pemuda_details->pegawai_photo) ? $pemuda_details->pegawai_photo : "img_not_found.png";?>
                          <div class="">&nbsp;</div>
                          <img style="max-width: 200px!important; max-height: 400px!important;" class="img-responsive" src="<?php echo base_url('assets/img/items/'.$img_pemuda)?>" alt="" id="pegawai_img_preview">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <button type="submit" class="btn btn-primary" id="Btnsave_pegawai">Simpan</button>
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
        function pegawai_readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
              $('#pegawai_img_preview').empty();
              $('#pegawai_img_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
