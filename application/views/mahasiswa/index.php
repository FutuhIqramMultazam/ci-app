<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata("flash"); ?>"></div>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6 mb-3">
            <form action="" method="post">
                <div class="input-group ">
                    <input name="keyword" autocomplete="off" type="text" class="form-control" placeholder="cari data mahasiswa di sini berdasarkan apa aja..">
                    <button class="btn btn-info" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>

            <?php if (empty($mahasiswa)): ?>
                <div class="alert alert-danger my-4" role="alert">
                    Data Mahasiswa tidak di temukan <br> jika anda ingin mengembalikan seluruh data klik tombol cari
                </div>
            <?php endif; ?>

            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs): ?>
                    <li class="list-group-item">
                        <?= $mhs["nama"]; ?>
                        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs["id"]; ?>" class="ms-2 badge text-bg-danger text-decoration-none float-end tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs["id"]; ?>" class="ms-2 badge text-bg-warning text-decoration-none float-end">ubah</a>
                        <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs["id"]; ?>" class="badge text-bg-info text-decoration-none float-end">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>