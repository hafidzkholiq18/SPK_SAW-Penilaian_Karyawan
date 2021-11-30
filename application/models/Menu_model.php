<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getEmail()
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function getUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function getRole()
    {
        return $this->db->get('role')->result_array();
    }
    public function getMenu()
    {
        return $this->db->get('menu_user')->result_array();
    }
    public function getSubmenu()
    {
        return $this->db->get('submenu_user')->result_array();
    }
    public function getJoin()
    {
        $query = "SELECT `submenu_user`.*, `menu_user`.`menu`
                FROM `submenu_user` JOIN `menu_user`
                ON `submenu_user`.`menu_id` = `menu_user`.`id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function tambahMenu()
    {
        $this->db->insert('menu_user', ['menu' => $this->input->post('menu')]);
    }

    public function editMenu()
    {
        $menu = $this->input->post('menu');

        $data = [
            'menu' => $menu,
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('menu_user', $data);
    }

    public function hapusMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('menu_user');
    }

    public function tambahSubmenu()
    {
        $data = [
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')
        ];

        $this->db->insert('submenu_user', $data);
    }

    public function editSubmenu()
    {
        $title = $this->input->post('title');
        $menu_id = $this->input->post('menu_id');
        $url = $this->input->post('url');
        $icon = $this->input->post('icon');
        $is_active = $this->input->post('is_active');

        $data = [
            'title' => $title,
            'menu_id' => $menu_id,
            'url' => $url,
            'icon' => $icon,
            'is_active' => $is_active
        ];
        //query ke db
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('submenu_user', $data);
    }

    public function hapusSubmenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('submenu_user');
    }
}
