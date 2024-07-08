                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">User</h1>
                    </div>
					<div class="row">
						<div class="col-md-4">
							<div class="card o-hidden border-0 shadow-lg">
								<div class="card-body">
									<!-- Nested Row within Card Body -->
									<div class="row">
										<div class="col-lg-12">
											<div class="p-5">
												<div class="text-left">
													<h1 class="h4 text-gray-900 mb-4">New User</h1>
												</div>
												<form class="user" action="<?= base_url('user_proses')?>" method="POST">
													<div class="form-group">
														<label for="nama" class="text-gray-900">Nama User</label>
														<input type="text" class="form-control form-control"
															id="nama" name="nama" placeholder="Enter Name...">
													</div>
													<div class="form-group">
														<label for="username" class="text-gray-900">Username</label>
														<input type="text" class="form-control form-control"
															id="username" name="username" placeholder="Enter Username...">
													</div>
													<div class="form-group">
														<label for="role" class="text-gray-900">Role User</label>
														<select class="form-control form-control" id="role" name="role">
															<option value="" selected>Pilih role user</option>
															<option value="0">Admin</option>
															<option value="1">Petugas</option>
															<option value="2">Pimpinan</option>
														</select>
													</div>
													<div class="form-group">
														<label for="password" class="text-gray-900">Password</label>
														<input type="password" class="form-control form-control"
															id="password" name="password" placeholder="Enter Password...">
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
						<div class="col-md-8">
							<!-- DataTales Example -->
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">Data User</h6>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th style="width: 10%;">No</th>
													<th style="width: 40%;">Nama</th>
													<th style="width: 30%;">Username</th>
													<th style="width: 20%;">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $no = 1; foreach($user as $row) : ?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $row->nama ?></td>
													<td><?= $row->username ?></td>
													<td>
														<!-- <a href="#" class="btn btn-info btn-circle btn-sm">
															<i class="fas fa-pen"></i>
														</a> -->
														<a href="<?= base_url('user_reset/').urlencode($this->encryption->encrypt($row->id_user)); ?>" class="btn btn-warning btn-circle btn-sm">
															<i class="fas fa-key"></i>
														</a>
														<a href="<?= base_url('user_delete/').urlencode($this->encryption->encrypt($row->id_user)); ?>" class="btn btn-danger btn-circle btn-sm">
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
