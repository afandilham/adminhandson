<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>Tabel Dokter
                        <div class="page-title-subheading">Pengajar Berprofesi Dokter pada Handson
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="<?= base_url() ?>dokter/insert" class="mb-2 mr-2 btn btn-primary">Insert Dokter</a>
                </div>
            </div>
        </div>
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
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>

                        <td><a href="<?= base_url(); ?>" class="badge badge-danger ">Hapus</a>
                            <a href="<?= base_url(); ?>dokter/update" class="badge badge-success ">Update</a>
                            <a href="<?= base_url(); ?>" class="badge badge-primary ">Detail</a>
                        </td>
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
    </div>
</div>