<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center">
                        <div class="col-sm-10">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><b>Welcome Back!</b></h1>
                                </div>
                                <?= $this->session->flashdata('pesan'); ?>
                                <?= form_open('', ['class' => 'user']); ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class=" form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    <input style="margin: 10px;" type="checkbox" onclick="myFunction()"> Show Password
                                    <?= form_error('pass', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-danger btn-user btn-block">
                                    Login
                                </button>
                                <a href="<?= base_url('home') ?>" class="btn btn-facebook btn-user btn-block">
                                    <i class="fas fa-home"></i> Back to Home
                                </a>
                                <?= form_close(); ?>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth') ?>/register">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<script src="<?= base_url('assets/js/app.js') ?>"></script>