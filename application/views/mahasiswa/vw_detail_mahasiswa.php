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
                    <div class="card-body">
                        <h2 class="card-tittle">
                            <?= $mahasiswa['nama']; ?>
                        </h2>
                        <h6 class="card-subtiltle mb-2 text-muted">
                            <?= $mahasiswa['email']; ?>
                        </h6>
                        <div class="row">
                            <div class="col-md-4">NIM</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6">
                                <?= $mahasiswa['nim']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Jenis Kelamin</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6">
                                <?= $mahasiswa['jenis_kelamin']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Prodi</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6">
                                <?= $mahasiswa['prodi']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Asal Sekolah</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6">
                                <?= $mahasiswa['asal_sekolah']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">No HP</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6">
                                <?= $mahasiswa['no_hp']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Alamat</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6">
                                <?= $mahasiswa['alamat']; ?>
                            </div>
                        </div>
                    <div class="row mt-3">
                        <div class="col">
                            <a href="<?= base_url('mahasiswa')?> " class="btn btn-danger">Tutup</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>