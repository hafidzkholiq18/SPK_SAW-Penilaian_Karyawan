<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $judul ?></title>

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
                    <form action="<?= base_url('auth/daftar'); ?>" method="POST">
                        <h1>Create Account</h1>
                        <div>
                            <small class="text-danger"><?= form_error('Username'); ?></small>
                            <input type="text" class="form-control" placeholder="Username" name="Username" required />
                        </div>
                        <div>
                            <small class="text-danger"><?= form_error('Email'); ?></small>
                            <input type="email" class="form-control" placeholder="Email" name="Email" required />
                        </div>
                        <div>
                            <small class="text-danger"><?= form_error('Password1'); ?></small>
                            <input type="password" class="form-control" placeholder="Password" name="Password1" required />
                        </div>

                        <div>
                            <input type="password" class="form-control" placeholder="Konfirmasi Password" name="Password2" required />
                        </div>

                        <div>
                            <button class="btn btn-default submit" type="submit">Submit</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already have account?
                                <a href="<?= base_url('auth'); ?>" class="to_register"> Log in </a>
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