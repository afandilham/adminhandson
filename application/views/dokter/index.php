<body>
    <div class="container">
        <h1>Manage Dokter</h1>

        <a href="<?php base_url() ?>insert_dokter" class="btn btn-primary">Insert dokter</a>

        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
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
                        foreach ($data as $row) {
                            echo "<tr>";
                            echo "<td>" . $row->id_doctor . "</td>";
                            echo "<td>" . $row->name_doctor . "</td>";
                            echo "<td>" . $row->speciality . "</td>";
                            echo "<td>" . $row->rating . "</td>";
                            echo "<td>" . $row->insert_date . "</td>";
                            echo "<td>" . $row->last_update . "</td>";
                            ?>
                            <td>
                            <a href="<?= base_url(); ?>" class="badge badge-danger ">hapus</a>
                            <a href="<?= base_url(); ?>" class="badge badge-success ">ubah</a>
                            <a href="<?= base_url(); ?>" class="badge badge-primary ">detail</a>
                            </td>
                            <?php

                            echo "</tr>";
                        }

                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
</body>