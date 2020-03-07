<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <a href="<?= base_url() ?>Kursus" class="btn btn-primary">Kembali</a>
                <p class="h1">Insert data Kursus</p>
                <form action="php/dokter_insert.php" method="POST">
                    <label for="judulkursus" class="">Judul</label>
                    <input name="judulkursus" type="text" class="form-control">

                    <label for="harga" class="">Harga</label>
                    <input name="harga" type="text" class="form-control">
                    <div class="divider"></div>

                    <label for="deskripsisingkat" class="">Deskripsi Singkat</label>
                    <textarea name="deskripsisingkat" type="textarea" class="form-control"> </textarea>

                    <label for="deskripsifull" class="">Deskripsi Full</label>
                    <textarea name="deskripsifull" type="textarea" class="form-control"> </textarea>


                    <label for="persyaratan" class="">Persyaratan</label>
                    <textarea name="persyaratan" type="textarea" class="form-control"> </textarea>

                    <label for="dokterpengajar" class="">Dokter Pengajar</label>
                    <textarea name="dokterpengajar" type="textarea" class="form-control"> </textarea>
                    <div class="divider"></div>

                    <label for="kategori" class="">Kategori</label>
                    <select name="kategori" class="mb-2 form-control">
                        <?php
                        foreach ($kategori as $row) { ?>
                            <option value="gigigeraham"><?=$row->id_kategori?></option>
                            <option value="gigisusu">Gigi Susu</option>
                            <option value="gigidepan">Gigi Depan</option>
                            <option value="behelgigi">Behel Gigi</option>
                            <option value="kesehatangigi">Kesehatan Gigi</option>
                        <?php } ?>
                    </select>
                    <div class="divider"></div>


                    <label for="bahasa" class="">Bahasa</label>
                    <select name="bahasa" class="mb-2 form-control">

                        <option value="bhsindonesia">Bahasa Indonesia</option>
                        <option value="bhsinggris">Bahasa Inggris</option>
                        <option value="bhsarab">Bahasa Arab</option>
                        <option value="bhsjerman">Bahasa Jerman</option>
                        <option value="bhsrusia">Bahasa Rusia</option>

                    </select>
                    <div class="divider"></div>

                    <label for="subtitle" class="">Subtitle</label>
                    <select name="subtitle" class="mb-2 form-control">

                        <option value="indonesia">Indonesia</option>
                        <option value="inggris">Inggris</option>
                        <option value="arab">Arab</option>

                    </select>
                    <div class="divider"></div>
                    <label for="gambar" class="">File Gambar</label>
                    <input name="gambar" type="file" class="form-control-file">
                    <div class="divider"></div>
                    <button type="submit" class="btn btn-primary" name="insert">Insert</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>