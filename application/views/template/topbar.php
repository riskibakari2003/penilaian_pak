<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('public/dist/img/AdminLTELogo.png') ?>" alt="Sikwan Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sikwan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('public/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $session->name; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="<?= base_url(); ?>" class="nav-link <?= $title == 'Dashboard' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

								<li class="nav-item">
										<a href="<?= base_url('biodata'); ?>" class="nav-link  <?= $title == 'Biodata' ? 'active' : ''; ?>">
												<i class="nav-icon fas fa-home"></i>
												<p>
														Biodata
												</p>
										</a>
								</li>

								<li class="nav-item">
										<a href="<?= base_url('data-dukung'); ?>" class="nav-link  <?= $title == 'Data Dukung' ? 'active' : ''; ?>">
												<i class="nav-icon fas fa-home"></i>
												<p>
														Data Dukung
												</p>
										</a>
								</li>

								<li class="nav-item">
										<a href="<?= base_url('data-pak'); ?>" class="nav-link  <?= $title == 'Data Penilaian PAK' ? 'active' : ''; ?>">
												<i class="nav-icon fas fa-home"></i>
												<p>
														Data Penilaian PAK
												</p>
										</a>
								</li>

								<li class="nav-item">
										<a href="<?= base_url('cek-data'); ?>" class="nav-link  <?= $title == 'Cek Data' ? 'active' : ''; ?>">
												<i class="nav-icon fas fa-home"></i>
												<p>
														Cek Data
												</p>
										</a>
								</li>

								<li class="nav-item">
										<a href="<?= base_url('verifikasi'); ?>" class="nav-link  <?= $title == 'Data Verifikasi' ? 'active' : ''; ?>">
												<i class="nav-icon fas fa-home"></i>
												<p>
														Data Verifikasi
												</p>
										</a>
								</li>

								<?php if($session->role == 0): ?>
								<li class="nav-item">
										<a href="<?= base_url('master/berkas'); ?>" class="nav-link  <?= $title == 'Master Berkas Upoad' ? 'active' : ''; ?>">
												<i class="nav-icon fas fa-home"></i>
												<p>
														Master Berkas Upoad
												</p>
										</a>
								</li>

								<li class="nav-item">
										<a href="<?= base_url('master/tahun-ajar'); ?>" class="nav-link  <?= $title == 'Master Tahun Ajaran' ? 'active' : ''; ?>">
												<i class="nav-icon fas fa-home"></i>
												<p>
														Master Tahun Ajaran
												</p>
										</a>
								</li>

								<li class="nav-item">
										<a href="<?= base_url('master/institusi'); ?>" class="nav-link  <?= $title == 'Master Data institusi' ? 'active' : ''; ?>">
												<i class="nav-icon fas fa-home"></i>
												<p>
														Master Data institusi
												</p>
										</a>
								</li>

								<li class="nav-item">
										<a href="<?= base_url('master/pangkat'); ?>" class="nav-link  <?= $title == 'Master Data Pangkat' ? 'active' : ''; ?>">
												<i class="nav-icon fas fa-home"></i>
												<p>
														Master Data Pangkat
												</p>
										</a>
								</li>

								<li class="nav-item">
										<a href="<?= base_url('master/golongan'); ?>" class="nav-link  <?= $title == 'Master Data Golongan' ? 'active' : ''; ?>">
												<i class="nav-icon fas fa-home"></i>
												<p>
														Master Data Golongan
												</p>
										</a>
								</li>

								<li class="nav-item">
										<a href="<?= base_url('master/jabatan'); ?>" class="nav-link  <?= $title == 'Master Data Jabatan' ? 'active' : ''; ?>">
												<i class="nav-icon fas fa-home"></i>
												<p>
														Master Data Jabatan
												</p>
										</a>
								</li>

								<li class="nav-item">
										<a href="<?= base_url('master/provinsi'); ?>" class="nav-link  <?= $title == 'Master Data Provinsi' ? 'active' : ''; ?>">
												<i class="nav-icon fas fa-home"></i>
												<p>
														Master Data Provinsi
												</p>
										</a>
								</li>
								<?php endif; ?>
								
                <li class="nav-item">
                    <a href="<?= base_url('logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
