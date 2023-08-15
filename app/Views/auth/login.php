<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>

<?= $this->section('content') ?>    
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-5">

                    <!-- Checking Error -->
                    <?php if(session()->getFlashdata('error')): ?>
                    <style>
                    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

                    .swal2-popup .swal2-content {
                        font-family: 'Poppins', sans-serif;
                        font-size: 16px;
                    }
                    </style>
                    <script>
                    Swal.fire({
                        title: 'ERROR!',
                        text: '<?php echo session()->getFlashdata('error');?>',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    })
                    </script>
                    <?php endif; ?>

                    <form class="card-body cardbody-color p-lg-4" method="post" action="/auth/login">
                        <?= csrf_field() ?>
                        <div class="text-center mb-4">
                            <img src="<?= base_url('assets/logo/logo.png') ?>" width="100" alt="">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" aria-describedby="emailHelp"
                                placeholder="Username" id="username" name="username" required
                                value="<?= set_value('username') ?>">
                        </div>
                        <div class="mb-5">
                            <input type="password" class="form-control" placeholder="Password" id="password" required name="password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success px-5 w-100">Login</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="<?= base_url('bootstrap/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
<?= $this->endSection() ?>
