                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">User</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> New User</a>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
												<a href="#" class="btn btn-sm btn-primary">Edit</a>
												<a href="#" class="btn btn-sm btn-warning">Reset Password</a>
												<a href="#" class="btn btn-sm btn-danger">Delete</a>
											</td>
                                        </tr>
										<?php endforeach; ?>
                                    </tbody>
                                </table>
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
