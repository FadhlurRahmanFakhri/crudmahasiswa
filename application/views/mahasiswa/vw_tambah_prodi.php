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
                    <form action="<?= base_url('Prodi/tambah'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>

                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Prodi">
                        </div>
                        <div class="form-group">
                            <label for="nim">Ruangan</label>
                            <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="Ruangan">
                        </div>
                        <div class="form-group">
                            <label for="jenis kelamin">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan">
                        </div>
                        <div class="form-group">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="Akreditasi">
                        </div>
                        <div class="form-group">
                            <label for="prodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">
                        </div>
                        <div class="form-group">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                        </div>
                        <div class="form-group">
                            <label for="output_lulusan">Output Lulusan</label>
                            <input type="text" name="output_lulusan" class="form-control" id="output_lulusan" placeholder="Output Lulusan">
                        </div>
                        <div class="form-group mb-3">
                            <label for="formFile" class="form-label">Masukkan Gambar</label>
                            <input class="form-control bg-dark" type="file" id="formFile" name="gambar">
                        </div>
                        <div class="mt-3">
                            <a href="<? base_url('prodi') ?>" class="btn btn-danger">Tutup
                            </a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                Prodi
                            </button>
                        </div>

                    </form>
                </div>
            </div>