<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <a href="<?= base_url() ?>Bahasa" class="btn btn-primary">Kembali</a>
                <p class="h1">Update data Bahasa</p>
                <form action="<?= base_url() ?>bahasa/update_bahasa" method="POST">
                    <?php
                    $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                    );
                    foreach ($bahasa as $row) {
                    ?>

                    <label for="bahasa" class="">Bahasa</label>
                    <input name="bahasa" type="text" class="form-control" value="<?=$row->bahasa?>"> </input>
                    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                    <input type="hidden" name="id_bahasa" value="<?=$id_bahasa?>"/>
                    <div class="divider"></div>
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                    <?php
                            echo "</tr>";
                        }
                        ?>
                </form>
            </div>
        </div>
    </div>
</div>
</div>