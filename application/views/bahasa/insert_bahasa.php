<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <a href="<?= base_url() ?>Bahasa" class="btn btn-primary">Kembali</a>
                <p class="h1">Insert data Bahasa</p>
                <form action="<?= base_url() ?>bahasa/insert_bahasa" method="POST">
                    <?php
                    $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                    );
                    ?>

                    <label for="bahasa" class="">Bahasa</label>
                    <input name="bahasa" type="textarea" class="form-control"> </input>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="divider"></div>
                    <button type="submit" class="btn btn-primary" name="insert">Insert</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>