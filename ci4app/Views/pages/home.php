<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>ようこそ</h1>
                    <h2>Welcome to our store</h2>
                    <br><br>

                    <p>click these button to see our catalogue</p>
                    <a class="btn btn-primary" href="/device" role="button">Catalogue</a>


                </div>
            </div>
        </div>



        <?= $this->endSection(); ?>