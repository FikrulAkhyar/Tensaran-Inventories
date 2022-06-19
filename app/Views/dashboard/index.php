<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2 <?= $color_random[array_rand($color_random, 1)] ?>">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Biaya Inventaris
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= 'Rp. ' . number_format($total_harga, 0, ",", ".") ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php for ($i = 0; $i < count($per_tahun); $i++) : ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 <?= $color_random[array_rand($color_random, 1)] ?>">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Inventaris <?= $per_tahun[$i]['year'] . ' (' . $per_tahun[$i]['banyak_barang'] . ' Barang)' ?>
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= 'Rp. ' . number_format($per_tahun[$i]['total_harga'], 0, ",", ".") ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endfor ?>
</div>
<?= $this->endSection() ?>