<div class="main-card mb-3 card">
<div class="card-body">
    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama dokter</th>
                <th>Spesialis</th>
                <th>Rating</th>
                <th>Insert date</th>
                <th>Last update</th>
                <th>Menu</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'php/koneksi.php';
            $sql = "SELECT * FROM `doctor`";
            $hasil = $koneksi->query($sql);
            while ($dokter = $hasil->fetch_assoc()) { ?>
                <tr>
                    <td><?= $dokter['id_doctor'] ?></td>
                    <td><?= $dokter['name_doctor'] ?></td>
                    <td><?= $dokter['speciality'] ?></td>
                    <td><?= $dokter['rating'] ?></td>
                    <td><?= $dokter['insert_date'] ?></td>
                    <td><?= $dokter['last_update'] ?></td>
                    <td>
                        <form action="php/dokter_delete.php" method="post">
                            <button type="submit" class="badge badge-danger" name="id_doctor" value="<?= $dokter['id_doctor'] ?>">Delete</button>
                        </form>
                        <form action="dokter_form_update.php" method="post">
                            <button type="submit" class="badge badge-success" name="id_doctor" value="<?= $dokter['id_doctor'] ?>">Update</button>
                        </form>
                        <form action="dokter_detail.php" method="post">
                            <button type="submit" class="badge badge-primary" name="id_doctor" value="<?= $dokter['id_doctor'] ?>">Detail</button>
                        </form>
                    </td>
                </tr>
            <?php
            } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nama dokter</th>
                <th>Spesialis</th>
                <th>Rating</th>
                <th>Insert date</th>
                <th>Last update</th>
                <th>Menu</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>

<body>
	<div class="container">
    	<a href="<?= base_url()?>dokter" class="btn btn-primary">Kembali</a>
		<p class="h1">Insert data dokter</p>
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
				$btninsert = array(
					'name'          => 'btn-insert',
					'id'            => 'btn-insert',
					'value'			=> 'Insert',
					'class'			=> 'btn btn-primary btn-lg',
				);
				echo form_submit($btninsert);
				echo form_close();
				?>
			</div>
	</div>
</body>