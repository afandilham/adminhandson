<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');">
                                                    </div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Admin Handson
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-xs" style="height: 150px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">

                                                        <li class="nav-item-header nav-item">My Account
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Settings
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider mb-0 nav-item"></li>
                                            </ul>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item">
                                                </li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-wide btn btn-primary btn-sm">
                                                        Logout
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li>
                                <a href="index.php">
                                    <i class="metismenu-icon"></i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon"></i>Course
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon"></i>User
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>dokter">
                                    <i class="metismenu-icon"></i>Dokter
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon"></i>Kategori
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon"></i>Pembayaran
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon"></i>Log Aktivitas
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="main-card mb-3 card">
						<div class="card-body">
						<a href="<?=base_url()?>dokter" class="btn btn-primary">Kembali</a>
						<p class="h1">Update data dokter</p>
						<?php
						echo form_open('insert_dokter/insert_dokter');
						$namadokter = array(
							'name'          => 'namadokter',
							'id'            => 'namadokter',
							'class'			=> 'position-relative form-group form-control'
						);

						echo form_label('Nama Dokter', 'namadokter');
						echo form_input($namadokter);
						
						$spesialis = array(
							'name'          => 'spesialis',
							'id'            => 'spesialis',
							'class'			=> 'position-relative form-group form-control'
						);

						echo form_label('Spesialis', 'spesialis');
						echo form_input($spesialis);
						$riwayatpendidikan = array(
							'name'          => 'riwayatpendidikan',
							'id'            => 'riwayatpendidikan',
							'type'			=> 'textarea',
							'class'			=> 'position-relative form-group form-control'
						);

						echo form_label('Riwayat Pendidikan', 'riwayatpendidikan');
						echo form_textarea($riwayatpendidikan);

						$riwayatpekerjaan = array(
							'name'          => 'riwayatpekerjaan',
							'id'            => 'riwayatpekerjaan',
							'type'			=> 'textarea',
							'class'			=> 'position-relative form-group form-control'
						);

						echo form_label('Riwayat Pekerjaan', 'riwayatpekerjaan');
						echo form_textarea($riwayatpekerjaan);

						$motto = array(
							'name'          => 'motto',
							'id'            => 'motto',
							'type'			=> 'textarea',
							'class'			=> 'position-relative form-group form-control'
						);

						echo form_label('Motto', 'motto');
						echo form_textarea($motto);
						?>
						<div class="divider"></div>
							<div class="float-right">
								<?php
								$btnupdate = array(
									'name'          => 'btn-update',
									'id'            => 'btn-update',
									'value'			=> 'update',
									'class'			=> 'btn btn-primary btn-lg',
								);
								echo form_submit($btnupdate);
								echo form_close();
								?>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</body>