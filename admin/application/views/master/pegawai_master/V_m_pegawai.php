
<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
	<div class="page-bar">
		<?php echo $title_page ?>
	</div>
	  <div class="row">
			<div class="col-md-12">
				<div class="portlet light bordered">
						<div class="portlet-body">
              <table id="datatable_1" class="table table-striped table-bordered table-hover dt-responsive" width="100%">
									<thead>
										<tr>
											<th class="text-center" style="width:5%;">No.</th>
											<th class="text-center">Nama</th>
                      <th class="text-center">Jabatan</th>
											<th class="text-center">Config.</th>
										</tr>
									</thead>
									<tbody>
                    <?php
                    $no = 1;
                    foreach ($pegawai->result() as $key => $row): ?>
                        <tr>
                          <td align=center><?php echo $no ?></td>
                          <td><?php echo $row->pegawai_nama; ?></td>
                          <td><?php echo $row->pegawai_jabatan; ?></td>
                          <td class="text-center">
                            <a href="<?php echo base_url('Pegawai-Form/'.$row->pegawai_id)?>" class="btn btn-success">
                              <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="javascript:void(0)" class="btn btn-danger"
                            onclick="confirm_delete(<?php echo $row->pegawai_id?>, 'C_m_pegawai/pegawai_delete/')">
                              <i class="fa fa-trash-o"></i> Delete
                            </a>
                          </td>
                        </tr>
                    <?php
                    $no++;
                    endforeach; ?>
									</tbody>
                  <tfoot>
	                  <tr>
	                    <td colspan="4">
	                    <a href="<?php echo $action ?>" class="btn btn-primary">
	                      Tambah kategori
	                    </a>
	                    </td>
	                  </tr>
                  </tfoot>
							</table>
						</div>
					</div>
		  </div>
	  </div>
