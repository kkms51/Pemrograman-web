<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Daftar Device</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Nama Device</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1?>
                        <?php foreach($device as $d) :?>
                        <tr>
                            <th scope="row"><?= $i++;?></th>
                            <td><img src="<?= $d['gambar'];?>"class="sampul"></td>
                            <td><?= $d['device_name'];?></td>
                            <td><?= $d['device_brand'];?></td>
                            <td><?= $d['device_quantity'];?></td>
                            <td><?= $d['device_status'];?></td>
                            <td><a href="/detail/<?= $d['slug']?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach?>                       
                    </tbody>
                </table>
               
    <?= $this->endSection(); ?>
    <?= $this->extend('layout/template'); ?>
    <?= $this->extend('layout/template'); ?>  