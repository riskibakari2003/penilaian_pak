                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Alat Kontrasepsi Masuk</h1>
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="card o-hidden border-0 shadow-lg">
								<div class="card-body">
									<!-- Nested Row within Card Body -->
									<div class="row">
										<div class="col-lg-12">
											<div class="p-5">
												<div class="text-left">
													<h1 class="h4 text-gray-900 mb-4">Alat Kontrasepsi Masuk</h1>
												</div>
												<form class="user" action="<?= base_url('alkon_masuk_proses')?>" method="POST">
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label for="alkon" class="text-gray-900">Alkon Masuk</label>
																<select class="form-control form-control" id="alkon" name="alkon">
																	<option value="" selected>Pilih Alkon</option>
																	<?php foreach($alkon as $row) : ?>
																	<option value="<?= $row->id_alkon; ?>"><?= $row->nama_alkon; ?></option>
																	<?php endforeach ; ?>
																</select>
															</div>	
															<div class="form-group">
																<label for="no_batch" class="text-gray-900">No Batch</label>
																<input type="text" class="form-control form-control"
																	id="no_batch" name="no_batch" placeholder="Enter Name...">
															</div>
															<div class="form-group">
																<label for="expired_date" class="text-gray-900">Tanggal Kadalursa</label>
																<input type="date" class="form-control form-control"
																	id="expired_date" name="expired_date">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label for="supplier" class="text-gray-900">Supplier Pemasok</label>
																<select class="form-control form-control" id="supplier" name="supplier">
																	<option value="" selected>Pilih Supplier</option>
																	<?php foreach($supplier as $row) : ?>
																	<option value="<?= $row->id_supplier; ?>"><?= $row->nama_supplier; ?></option>
																	<?php endforeach ; ?>
																</select>
															</div>
															<div class="form-group">
																<label for="stok" class="text-gray-900">Stok Awal</label>
																<div class="row">
																	<div class="col-lg-8">
																	<input type="text" class="form-control form-control"
																		id="stok" name="stok" placeholder="Enter Stok awal...">
																	</div>
																	<div class="col-lg-4 text-center">
																		<span class="input-group-text" id="satuan">Butir</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<button type="submit" class="btn btn-primary btn-user btn-block">
														Login
													</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<!-- DataTales Example -->
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">Data Alkon Masuk</h6>
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
													<th style="width: 20%;">Stok Masuk</th>
													<th style="width: 20%;">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $no = 1; foreach($masuk as $row) : ?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $row->nama_alkon; ?></td>
													<td><?= $row->no_batch; ?></td>
													<td><?= $row->nama_supplier; ?></td>
													<td><?= $row->stock." ".$row->satuan; ?></td>
													<td>
														<a href="#" class="btn btn-info btn-circle btn-sm">
															<i class="fas fa-pen"></i>
														</a>
														<a href="<?= base_url('alkon_masuk_delete/').urlencode($this->encryption->encrypt($row->id_stock_alkon)); ?>" class="btn btn-danger btn-circle btn-sm">
															<i class="fas fa-trash"></i>
														</a>
													</td>
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
