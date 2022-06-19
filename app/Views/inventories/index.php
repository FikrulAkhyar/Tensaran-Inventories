<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Inventaris</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Inventaris Desa Tensaran</h6>
    </div>
    <div class="card-body">
        <div>
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal">Tambah</button>
            <a href="<?= base_url('inventaris/excel_inventories') ?>"><button class="btn btn-outline-primary mb-3"><i class="fas fa-download fa-sm"></i> Unduh Excel</button></a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Merek/Tipe</th>
                        <th>Jumlah</th>
                        <th>Tahun</th>
                        <th>Kondisi</th>
                        <th>Harga</th>
                        <th>Sumber Dana</th>
                        <th>Keterangan</th>
                        <th class="px-5">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($inventaris); $i++) : ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= $inventaris[$i]['code'] ?></td>
                            <?php if ($inventaris[$i]['image'] == '') : ?>
                                <td><?= $inventaris[$i]['name'] ?></td>
                            <?php else : ?>
                                <td><a href=' #' data-toggle='modal' data-target=" #imageModal<?= $inventaris[$i]['id_inventory'] ?>"><?= $inventaris[$i]['name'] ?></a></td>
                            <?php endif ?>
                            <td><?= $inventaris[$i]['type'] ?></td>
                            <td><?= $inventaris[$i]['amount'] ?></td>
                            <td><?= $inventaris[$i]['year'] ?></td>
                            <td><?= $inventaris[$i]['condition'] ?></td>
                            <td><?= 'Rp. ' . number_format($inventaris[$i]['price'], 0, ",", ".") ?></td>
                            <td><?= $inventaris[$i]['source'] ?></td>
                            <td><?= ($inventaris[$i]['note']) ? $inventaris[$i]['note'] : 'Tidak ada' ?></td>
                            <td>
                                <button class="btn btn-warning" data-toggle="modal" data-target="#updateModal<?= $inventaris[$i]['id_inventory'] ?>"><i class="fas fa-xs fa-edit"></i></button>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $inventaris[$i]['id_inventory'] ?>"><i class="fas fa-xs fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endfor ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal add data -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Inventaris</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('inventaris/store') ?>" id="formAdd" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan nama barang" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe_barang">Merek Barang</label>
                        <input type="text" class="form-control" id="tipe_barang" name="tipe_barang" placeholder="Masukkan merek barang">
                    </div>
                    <div class="form-group">
                        <label for="kondisi_barang">Kondisi Barang</label>
                        <input type="text" class="form-control" id="kondisi_barang" name="kondisi_barang" placeholder="Masukkan kondisi barang">
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun Peroleh Barang</label>
                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Masukkan tahun peroleh barang" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Barang</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan jumlah barang" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Barang</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga barang" required>
                    </div>
                    <div class="form-group">
                        <label for="sumber">Sumber Dana</label>
                        <input type="text" class="form-control" id="sumber" name="sumber" placeholder="Masukkan sumber dana">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar_barang">Gambar Barang</label>
                        <input type="file" class="form-control-file" id="gambar_barang" name="gambar_barang">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" form="formAdd">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal update data -->
<?php for ($i = 0; $i < count($inventaris); $i++) : ?>
    <div class="modal fade" id="updateModal<?= $inventaris[$i]['id_inventory'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Inventaris</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('inventaris/update') ?>" id="formUpdate" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $inventaris[$i]['id_inventory'] ?>">
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan nama barang" value="<?= $inventaris[$i]['name'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tipe_barang">Merek/Tipe Barang</label>
                            <input type="text" class="form-control" id="tipe_barang" name="tipe_barang" placeholder="Masukkan merek/tipe barang" value="<?= $inventaris[$i]['type'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="kondisi_barang">Kondisi Barang</label>
                            <input type="text" class="form-control" id="kondisi_barang" name="kondisi_barang" placeholder="Masukkan kondisi barang" value="<?= $inventaris[$i]['condition'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun Peroleh Barang</label>
                            <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Masukkan tahun peroleh barang" value="<?= $inventaris[$i]['year'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah Barang</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan jumlah barang" value="<?= $inventaris[$i]['amount'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Barang</label>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga barang" value="<?= $inventaris[$i]['price'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="sumber">Sumber Dana</label>
                            <input type="text" class="form-control" id="sumber" name="sumber" placeholder="Masukkan sumber dana">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="2"><?= $inventaris[$i]['note'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar_barang">Gambar Barang</label>
                            <input type="file" class="form-control-file" id="gambar_barang" name="gambar_barang">
                        </div>
                    </form>

                    <form id="formDeleteImage" action="<?= base_url('inventaris/delete_image') ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $inventaris[$i]['id_inventory'] ?>">
                    </form>
                </div>
                <div class="modal-footer">
                    <?php if ($inventaris[$i]['image']) : ?>
                        <button type="submit" class="btn btn-info" form="formDeleteImage">Hapus Gambar</button>
                    <?php endif ?>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" form="formUpdate">Ubah</button>
                </div>
            </div>
        </div>
    </div>
<?php endfor ?>


<!-- Modal delete data -->
<?php for ($i = 0; $i < count($inventaris); $i++) : ?>
    <div class="modal fade" id="deleteModal<?= $inventaris[$i]['id_inventory'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Inventaris</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('inventaris/delete') ?>" id="formDelete" method="POST">
                        <input type="hidden" name="id" value="<?= $inventaris[$i]['id_inventory'] ?>">
                        Yakin ingin menghapus barang ini ?
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" form="formDelete">Hapus</button>
                </div>
            </div>
        </div>
    </div>
<?php endfor ?>


<!-- Modal show image -->
<?php for ($i = 0; $i < count($inventaris); $i++) : ?>
    <div class="modal fade" id="imageModal<?= $inventaris[$i]['id_inventory'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <img src="<?= base_url('img/gambar_barang/' . $inventaris[$i]['image']) ?>" alt="Tidak ada gambar">
            </div>
        </div>
    </div>
<?php endfor ?>

<?= $this->endSection() ?>

<?= $this->section('page-script') ?>
<script>
    $('#formDelete').submit(function(e) {
        e.preventDefault();

        var formData = new FormData($("#formDelete")[0]);

        $.ajax({
            url: $("#formDelete").attr('action'),
            type: 'post',
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(response) {
                toastr.success(response.message, 'Perhatian')
                setTimeout(function() {
                    location.reload()
                }, 1500);
            }
        });
    });

    $('#formDeleteImage').submit(function(e) {
        e.preventDefault();

        var formData = new FormData($("#formDeleteImage")[0]);

        $.ajax({
            url: $("#formDeleteImage").attr('action'),
            type: 'post',
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(response) {
                toastr.success(response.message, 'Perhatian')
                setTimeout(function() {
                    location.reload()
                }, 1500);
            }
        });
    });

    $('#formUpdate').submit(function(e) {
        e.preventDefault();

        var formData = new FormData($("#formUpdate")[0]);

        $.ajax({
            url: $("#formUpdate").attr('action'),
            type: 'post',
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(response) {
                toastr.success(response.message, 'Perhatian')
                setTimeout(function() {
                    location.reload()
                }, 1500);
            }
        });
    });

    $('#formAdd').submit(function(e) {
        e.preventDefault();

        var formData = new FormData($("#formAdd")[0]);

        $.ajax({
            url: $("#formAdd").attr('action'),
            type: 'post',
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(response) {
                toastr.success(response.message, 'Perhatian')
                setTimeout(function() {
                    location.reload()
                }, 1500);
            }
        });
    });
</script>
<?= $this->endSection() ?>