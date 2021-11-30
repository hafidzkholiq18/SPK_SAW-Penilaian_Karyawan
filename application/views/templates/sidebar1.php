<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>SPK PT.YIG</span></a>
                </div>
                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?= base_url('assets/'); ?>images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?= $user['nama']; ?></h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">

                            <li><a href="<?= base_url('admin/index'); ?>"><i class="fa fa-home"></i> Dashboard </a></li>
                            <li><a href="<?= base_url('admin/kriteria'); ?>"><i class="fa fa-asterisk"></i> Data Kriteria </a></li>
                            <li><a><i class="fa fa-users"></i> Kelola Alternatif <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?= base_url('admin/alternatif'); ?>">Data Alternatif</a></li>
                                    <li><a href="<?= base_url('admin/nilai_alternatif'); ?>">Nilai Alternatif</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('admin/perhitungan'); ?>"><i class="fa fa-calculator"></i> Perhitungan SAW</a></li>
                            <li><a href="<?= base_url('admin/pengguna'); ?>"><i class="fa fa-user"></i>User</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-book"></i>Laporan</a></li>
                            <li><a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-power-off"></i>Logout</a></li>

                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->


            </div>
        </div>