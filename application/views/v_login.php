<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?= $judul ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <link href="<?= base_url() ?>css/main.87c0748b313a1dda75f5.css" rel="stylesheet">
  <script type="text/javascript" src="<?= base_url() ?>assets/scripts/main.87c0748b313a1dda75f5.js"> </script>
</head>
<body>
	<div class="app-container app-theme-white body-tabs-shadow">
		<div class="app-container">
			<div class="h-100 bg-plum-plate bg-animation">
				<div class="d-flex h-100 justify-content-center align-items-center">
					<div class="mx-auto app-login-box col-md-8">
						<div class="app-logo-inverse mx-auto mb-3"></div>
						<div class="modal-dialog w-100 mx-auto">
							<div class="modal-content">
								<div class="modal-body">
									<div class="h5 modal-title text-center">
										<h4 class="mt-2">
											<div>Selamat Datang</div>
											<span>Masukkan Username dan Password</span>
										</h4>
									</div>

									<?php
									echo form_open('login/aksi_login');
									$username = array(
										'name'          => 'username',
										'id'            => 'username',
										'placeholder'   => 'username',
										'class'			=> 'position-relative form-group form-control'
									);

									echo form_input($username);

									$password = array(
										'name'          => 'password',
										'id'            => 'password',
										'placeholder'   => 'password',
										'type'			=> 'password',
										'class'			=> 'position-relative form-group form-control'
									);

									echo form_input($password);

									$keeplogin = array(
										'name'          => 'keeplogin',
										'id'            => 'keeplogin',
										'value'         => 'accept',
										'checked'       => FALSE,
										'class'			=> 'position-relative',
									);
									?>
									<!-- <div class="alert alert-secondary" role="alert" id="warning" >
  									Username atau Password Salah
									</div> -->

									<?php
									

									echo form_checkbox($keeplogin);
									echo form_label('Keep Me Logged In', 'keeplogin');
									

									?>
									<div class="divider"></div>

								</div>
								<div class="modal-footer clearfix">
									<div class="float-right">
										<?php
										$btnlogin = array(
											'name'          => 'btn-login',
											'id'            => 'btn-login',
											'value'			=> 'Login',
											'class'			=> 'btn btn-primary btn-lg',
										);
										echo form_submit($btnlogin);
										echo form_close();
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center text-white opacity-8 mt-3"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body> 
