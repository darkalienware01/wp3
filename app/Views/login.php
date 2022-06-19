<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-dark.min.css'); ?>"">
    welcome <?= session()->get('name');?>

    <title>Login</title>
</head>

<body>
    
    <div class=" container">
    <div class="row justify-content-md-center">

        <div class="col-6">
            <h1>Sign In</h1>
            <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif;?>
            <form action="<?= base_url('/login/auth')?>" method="post">
                <div class="mb-3">
                    <label for="InputForEmail" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="InputForEmail">
                </div>
                <div class="mb-3">
                    <label for="InputForPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="InputForPassword">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

    </div>
    </div>

    <!-- Popper.js first, then Bootstrap JS -->

    </body>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

</html>