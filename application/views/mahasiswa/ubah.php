<div class="container">

    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card mb-5">
                <div class="card-header">
                    <h4>Ubah Data Mahasiswa</h4>
                </div>

                <div class="card-body">

                    <form action="" method="post">

                        <input type="hidden" name="id" value="<?= $mahasiswa["id"]; ?>">

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input value="<?= $mahasiswa["nama"] ?>" name="nama" type="text" class="form-control" id="nama" placeholder="ketik nama di sini...">
                            <div class="form-text text-danger"><?= form_error("nama"); ?></div>
                        </div>

                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input value="<?= $mahasiswa["nim"] ?>" name="nim" type="text" class="form-control" id="nim" placeholder="ketik nim di sini...">
                            <div class="form-text text-danger"><?= form_error("nim"); ?></div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input value="<?= $mahasiswa["email"] ?>" name="email" type="text" class="form-control" id="email" placeholder="ketik email di sini...">
                            <div class="form-text text-danger"><?= form_error("email"); ?></div>
                        </div>

                        <div class="mb-5">
                            <label for="jurusan" class="form-label">jurusan</label>
                            <select name="jurusan" class="form-select" id="jurusan">
                                <?php foreach ($jurusan as $j): ?>

                                    <?php if ($j == $mahasiswa["jurusan"]): ?>
                                        <option selected value="<?= $j ?>"><?= $j ?></option>
                                    <?php else: ?>
                                        <option value="<?= $j ?>"><?= $j ?></option>
                                    <?php endif; ?>

                                <?php endforeach ?>
                            </select>
                            <div class="form-text text-danger"><?= form_error("jurusan"); ?></div>
                        </div>

                        <a href="<?= base_url() ?>mahasiswa" class="btn btn-danger float-start ms-2">Batal</a>
                        <button name="tambah" type="submit" class="btn btn-warning float-end">Ubah</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>