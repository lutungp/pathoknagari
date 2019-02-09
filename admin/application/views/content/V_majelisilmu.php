
<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
	<div class="page-bar">
		<?php echo $title_page ?>
	</div>
	  <div class="row">
			<div class="col-md-12">
				<div class="portlet light bordered">
						<div class="portlet-body">
              <table id="nopagination" class="table table-striped table-bordered table-hover dt-responsive" width="100%">
									<thead>
										<tr>
											<th class="text-center" style="width:5%;">No.</th>
											<th class="text-center">Judul Majelis Ilmu</th>
											<th class="text-center">Urutan</th>
											<th class="text-center">Config.</th>
										</tr>
									</thead>
									<tbody>
											<?php
											$no = 1;
											foreach ($majelisilmu->result() as $key => $row): ?>
													<tr>
														<td align=center><?php echo $no ?></td>
														<td><?php echo $row->majelisilmu_judul; ?></td>
														<td align='center'><?php echo $row->majelisilmu_urutan; ?></td>
														<td class="text-center">
		                          <a href="<?php echo base_url('Majelisilmu-Edit/'.$row->majelisilmu_id)?>" class="btn btn-success">
		                            <i class="fa fa-edit"></i> Edit
		                          </a>
		                          <a href="javascript:void(0)" class="btn btn-danger"
		                          onclick="confirm_delete(<?php echo $row->majelisilmu_id?>, 'C_majelisilmu/majelisilmu_delete/')">
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
                      <td colspan="3">
                        <button id="Btn-addmajelis" href="<?php echo $action ?>" class="btn btn-primary"
                           onclick=" addmajelis(this)">
                          Tambah Majelis
                        </button>
                      </td>
	                  </tr>
                  </tfoot>
							</table>
						</div>
					</div>
		  </div>
	  </div>
    <script type="text/javascript">
      $(document).ready(function () {
          var table = $("#nopagination").DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false
          });

          if (table.rows()[0].length >= 6) {
            $('#Btn-addmajelis').attr('disabled', 'true')
          }
      })

      function addmajelis(elem) {
        location.href = $(elem).attr('href')
      }
    </script>
