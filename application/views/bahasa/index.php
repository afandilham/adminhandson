<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>Tabel Bahasa
                        <div class="page-title-subheading">
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="<?= base_url() ?>bahasa/insert" class="mb-2 mr-2 btn btn-primary">Insert Bahasa</a>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Bahasa</th>
                            <th>Insert By</th>
                            <th>Insert Date</th>
                            <th>Last Update</th>
                            <th>Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($bahasa as $row) {
                            echo "<tr>";
                            echo "<td>" . $row->id_bahasa . "</td>";
                            echo "<td>" . $row->bahasa . "</td>";
                            echo "<td>" . $row->insert_by . "</td>";
                            echo "<td>" . $row->insert_date . "</td>";
                            echo "<td>" . $row->last_update . "</td>";
                        ?>
                            <td>
                                <a href="bahasa/delete_bahasa/<?=$row->id_bahasa?>" class="badge badge-danger ">Delete</a>
                                <a href="bahasa/update/<?=$row->id_bahasa?>" class="badge badge-success ">Update</a>
                                
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