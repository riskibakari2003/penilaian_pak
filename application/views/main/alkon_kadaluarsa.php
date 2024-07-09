                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Alat Kontrasepsi Kadaluarsa</h1>
                    </div>
					<div class="row">
						<div class="col-md-12">
							<!-- DataTales Example -->
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">Data Alkon Kadaluarsa</h6>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th style="width: 5%;">No</th>
													<th style="width: 30%;">Nama Alkon</th>
													<th style="width: 25%;">No Batch</th>
													<th style="width: 25%;">Asal Stok</th>
													<th style="width: 20%;">Stok Kadaluarsa</th>
													<th style="width: 20%;">Tanggal Kadaluarsa</th>
												</tr>
											</thead>
											<tbody>
												<?php $no = 1; foreach($kadaluarsa as $row) : ?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $row->nama_alkon; ?></td>
													<td><?= $row->no_batch; ?></td>
													<td><?= $row->nama_supplier; ?></td>
													<td><?= $row->stock." ".$row->satuan; ?></td>
													<td><?= $row->stock; ?></td>
												</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

                </div>
                <!-- /.container-fluid -->

				<script src="<?= base_url('public/'); ?>vendor/jquery/jquery.min.js"></script>

				<script>
					$(document).ready(function() {
						$('#dataTable').DataTable();
					});
				</script>
