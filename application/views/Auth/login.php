<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $judul; ?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url('assets'); ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets'); ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="<?= base_url('auth'); ?>" method="POST">


                        <h1>Please Login</h1>
                        <!-- Pop up login -->
                        <?= $this->session->flashdata('message'); ?>

                        <div>
                            <small class="text-danger"><?= form_error('Email'); ?></small>
                            <input type="text" class="form-control" placeholder="Email" name="Email" />
                        </div>
                        <div>
                            <small class="text-danger"><?= form_error('Password'); ?></small>
                            <input type="password" class="form-control" placeholder="Password" name="Password" />
                        </div>
                        <div>
                            <button class="btn btn-default submit" type="submit">Log in</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">New to site?
                                <a class="to_register" href=" <?= base_url('auth/daftar'); ?>">Create Account</a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <p>©2019 All Rights Reserved. PT. Yogya Indo Global. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>