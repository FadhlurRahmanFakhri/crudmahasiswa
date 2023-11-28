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
                <div class="row bg-secondary rounded align-items-center justify-content-center">
                    <div class="mt-3">
                        <a href="<?= base_url() ?>Pinjaman/tambah" class="btn btn-primary">Tambah Pinjaman</a>
                    </div>
                    <table class="table">
                            <thead>
                                <tr>
                                    <td>NIK</td>
                                    <td>Nama</td>
                                    <td>Alamat</td>
                                    <td>No Telepon</td>
                                    <td>Email</td>
                                    <td>Besar Pinjaman</td>
                                    <td>Durasi Pinjaman</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i =1; ?>
                                <?php foreach ($pinjaman as $us) : ?>

                                    <tr>
                                        <td> <?= $i; ?>.</td>
                                        <td><?= $us['nik']; ?></td>
                                        <td><?= $us['nama']; ?></td>
                                        <td><?= $us['alamat']; ?></td>
                                        <td><?= $us['no_telpon']; ?></td>
                                        <td><?= $us['email']; ?></td>
                                        <td><?= $us['besar_pinjaman']; ?></td>
                                        <td><?= $us['durasi_pinjaman']; ?></td>

                                        <td>
                                            <a href="<?= base_url('Pinjaman/hapus/') .$us['id']; ?>" class="badge badge-danger">Hapus</a>
                                            <a href="<?= base_url('Pinjaman/edit/') .$us['id']; ?>" class="badge badge-warning">Edit</a>
                                           
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>                       
                </div>
            </div>
            <!-- Blank End (Akhir Tempat Edit)-->