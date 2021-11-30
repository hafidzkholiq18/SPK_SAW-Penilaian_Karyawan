<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?= base_url('auth'); ?>" class="site_title"><i class="fa fa-paw"></i> <span>SPK PT.YIG</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?= base_url('assets/images/') . $user['image'] ?>" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?= $user['nama']; ?></h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- QUERY MENU -->
                <?php
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `menu_user`.`id`, `menu`
                            FROM `menu_user` JOIN `akses_menu_user`
                              ON `menu_user`.`id` = `akses_menu_user`.`id_menu`
                           WHERE `akses_menu_user`.`role_id` = $role_id
                        ORDER BY `akses_menu_user`.`id_menu` ASC
                        ";
                $menu = $this->db->query($queryMenu)->result_array();
                ?>

                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <!-- LOOPING MENU -->
                        <?php foreach ($menu as $m) : ?>
                            <hr style="border-top: 1px solid gray;">
                            <h3><?= $m['menu']; ?></h3>

                            <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                            <?php
                                $idMenu = $m['id'];
                                $querySubMenu = "SELECT *
                               FROM `sub_menu_user` JOIN `menu_user` 
                                 ON `sub_menu_user`.`id_menu` = `menu_user`.`id`
                              WHERE `sub_menu_user`.`id_menu` = $idMenu
                        ";
                                $subMenu = $this->db->query($querySubMenu)->result_array();
                                ?>

                            <?php foreach ($subMenu as $sm) : ?>
                                <ul class="nav side-menu">
                                    <li><a href="<?= base_url($sm['url']); ?>"><i class="<?= $sm['icon']; ?>"></i><?= $sm['judul']; ?></a></li>
                                </ul>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </div>

                    <!-- <div class="menu_section"> -->
                    <ul class="nav side-menu">
                        <li><a class="tombol-logout" href="<?= base_url('auth/logout'); ?>"> <i class="fa fa-sign-out"></i>Logout</a></li>
                    </ul>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>