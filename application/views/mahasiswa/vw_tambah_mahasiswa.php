        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-2">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
            </nav>
            <!-- Navbar End -->

            <div class="container-fluid">
                <div class="row bg-secondary rounded align-items-center justify-content-center">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>

                            <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" id="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" value="<?= set_value('nim') ?>" class="form-control" id="nim" placeholder="NIM">
                            <?= form_error('nim', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis kelamin">Jenis Kelamin</label>
                            <select name="jenis kelamin" value="<?= set_value('jenis_kelamin') ?>" id="jenis kelamin" class="form-select">
                                <option values="">
                                    Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <?= form_error('jenis_kelamin', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" value="<?= set_value('email') ?>" name="email" class="form-control" id="email" placeholder="Email">
                            <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <select name="prodi" id="prodi" class="form-select " value="<?= set_value('prodi') ?>">
                                <option value="">Pilih Prodi</option>
                                <?php foreach ($prodi as $p) : ?>
                                    <option value="<?= $p['id']; ?>">
                                        <?= $p['nama']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('prodi', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="asal sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" value="<?= set_value('asal_sekolah') ?>" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                            <?= form_error('asal_sekolah', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No
                                HP</label>
                            <input type="text" name="no_hp" value="<?= set_value('no_hp') ?>" class="form-control" id="asal_sekolah" placeholder="No HP">
                            <?= form_error('no_hp', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control" id="alamat" placeholder="Alamat">
                            <?= form_error('alamat', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="mt-3">
                            <a href="<?= base_url('mahasiswa') ?>" class="btn btn-danger">Tutup
                            </a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                Mahasiswa
                            </button>
                        </div>

                    </form>
                </div>
            </div>