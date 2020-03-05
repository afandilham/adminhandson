<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <a href="<?= base_url() ?>Bahasa" class="btn btn-primary">Kembali</a>
                <p class="h1">Insert data Bahasa</p>
                <form action="php/bahasa_update.php" method="POST">

                        <label for="bahasa" class="">Bahasa</label>
                        <textarea name="riwayatpendidikan" type="textarea" class="form-control"> </textarea>
                        <div class="divider"></div>
                        <button type="submit" class="btn btn-primary" name="update">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>