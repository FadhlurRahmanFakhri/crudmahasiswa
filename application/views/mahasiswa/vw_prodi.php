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


            <!-- Blank Start (Tempat Edit) -->
            <div class="container-fluid">
            <?= $this->session->flashdata('message');?>

                <div class="row bg-secondary rounded align-items-center justify-content-center">
                    <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Prodi</td>
                                    <td>Ruangan</td>
                                    <td>Jurusan</td>
                                    <td>Akreditasi</td>
                                    <td>Nama Kaprodi</td>
                                    <td>Tahun Berdiri</td>
                                    <td>Output Kelulusan</td>
                                    <td>Gambar</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i =1; ?>
                                <?php foreach ($prodi as $us) : ?>

                                    <tr>
                                        <td> <?= $i; ?>.</td>
                                        <td><?= $us['nama']; ?></td>
                                        <td><?= $us['ruangan']; ?></td>
                                        <td><?= $us['jurusan']; ?></td>
                                        <td><?= $us['akreditasi']; ?></td>
                                        <td><?= $us['nama_kaprodi']; ?></td>
                                        <td><?= $us['tahun_berdiri']; ?></td>
                                        <td><?= $us['output_lulusan']; ?></td>
                                        <td><img src="<?= base_url('assets/img/prodi/') . $us['gambar']; ?>" style="width:100px;" alt=""></td>
                                        <td>
                                            <a href="<?= base_url('Prodi/hapus/') .$us['id'] ?>" class="badge badge-danger">Hapus</a>
                                            <a href="<?= base_url('Prodi/edit/') .$us['id'] ?>" class="badge badge-warning">Edit</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>                       
                </div>
            </div>
            <!-- Blank End (Akhir Tempat Edit)-->