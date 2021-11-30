<?php

function sudah_login()
{
  $ci = get_instance();
  //jika tidak ada session email pada userdata
  //atau user belum login
  if (!$ci->session->userdata('email')) {
    // tendang ke auth/login page
    redirect('auth');
    //jika session ada pada url/method nya maka dapat (sudah login)
  } else {
    //yang melakukan login role id nya tangkap
    $role_id = $ci->session->userdata('role_id');
    //user akses ke controller mana, sesuai uri (url pada browser)
    $menu = $ci->uri->segment(1);

    //query ke tbl menu_user untuk mendapatkan id menu
    $queryMenu = $ci->db->get_where('menu_user', ['menu' => $menu])->row_array();
    //dapatkan id menu ke variabel id_menu
    $id_menu = $queryMenu['id'];

    //query mendapatkan akses menu user yang sesuai dengan role id && id menu nya
    $aksesUser = $ci->db->get_where('akses_menu_user', [
      'role_id' => $role_id,
      'id_menu' => $id_menu
    ]);

    //jika query akses user ke menu tersebut tidak ada
    if ($aksesUser->num_rows() < 1) {
      //maka kita tendang ke halaman block
      //buat function block pada Auth.php
      redirect('auth/block');
    }
  }
}
