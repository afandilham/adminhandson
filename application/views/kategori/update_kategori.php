<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <a href="<?= base_url() ?>Kategori" class="btn btn-primary">Kembali</a>
                <p class="h1">Update data Kategori</p>
                <form action="php/kategori_update.php" method="POST">
                        <label for="namakategori" class="">Nama Kategori</label>
                        <input name="namakategori" type="text" class="form-control">

                        <label for="deskripsi" class="">Deskripsi Kategori</label>
                        <textarea name="deskripsi" type="textarea" class="form-control"> </textarea>

                        <div class="divider"></div>
                        <button type="submit" class="btn btn-primary" name="update">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>