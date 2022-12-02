<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-2">Detail Device</h2>
            <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= $device['gambar']?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $device['device_name']?></h5>
        <p class="card-text"><?= $device['device_brand']?></p>
        <p class="card-text"><?= $device['device_quantity']?></p>

        <br><br>
        <a href="/device">Kembalik ke daftar device</a>
      </div>
    </div>
  </div>
</div>
              </div>
        </div>
    </div>



    <?= $this->endSection(); ?>
    <?= $this->extend('layout/template'); ?>
    <?= $this->extend('layout/template'); ?>
