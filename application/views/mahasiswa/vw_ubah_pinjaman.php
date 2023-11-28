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
                    <form action="<?= base_url('Pinjaman/upload'); ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $pinjaman['id']; ?>">
                        <div class="form-group">
                            <label for="nik">NIK</label>

                            <input type="text" name="nik" value="<?= $pinjaman['nik']; ?>" class="form-control" id="nik" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $pinjaman['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="text" name="alamat" value="<?= $pinjaman['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="no_telpon">No Telepon</label>
                            <input type="text" name="no_telpon" value="<?= $pinjaman['no_telpon']; ?>" class="form-control" id="no_telpon" placeholder="No Telepon">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?= $pinjaman['email']; ?>" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="besar_pinjaman">Besar Pinjaman</label>
                            <input type="text" name="besar_pinjaman" value="<?= $pinjaman['besar_pinjaman']; ?>" class="form-control" id="besar_pinjaman"  placeholder="Besar Pinjaman">
                        </div>
                        <div class="form-group">
                            <label for="durasi_pinjaman">Durasi Pinjaman</label>
                            <input type="text" name="durasi_pinjaman" value="<?= $pinjaman['durasi_pinjaman']; ?>" class="form-control" id="durasi_pinjaman" placeholder="Durasi Pinjaman">
                        </div>
                        <div class="mt-3">
                            <a href="<? base_url('prodi') ?>" class="btn btn-danger">Tutup
                            </a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah
                                Pinjaman
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>