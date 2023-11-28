<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('auth'); ?>" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?=set_value('email');?>" id="email" name="email" placeholder="Masukkan Alamat Email...">
                                <?=form_error('email','<small class="text-danger pl-3">','</small>');?>
                            </div>
                            <p></p>
                            <div class="form-group">
                            <input type="password" class="form-control form-control-user" value="<?=set_value('nama');?>" name="password" id="password" placeholder="Password">
                                <?=form_error('password','<small class="text-danger pl-3">','</small>');?>
                            </div>
                            <p></p>
                                
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        </form>
                        <p class="text-center mb-0">Don't have an Account? <a href="<?= base_url('auth/logout'); ?>">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>