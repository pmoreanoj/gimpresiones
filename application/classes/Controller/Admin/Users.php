<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Admin_Containers_Default {

    public function action_index() {
        $this->template->title = 'Inicio';
        $view = view::factory('controllers/admin/users/index');
        $this->view = $view;
    }

    public function action_create(){
         $this->template->title = 'Crear Usuario';
        $view = view::factory('controllers/admin/users/create');
        $this->view = $view;
    }
    public function action_new() {
        if ($this->request->is_ajax()) {
            $this->auto_render = false;
            $record = array('id' => '1',
                'first_name' => 'Luis',
                'last_name' => 'Gomez',
                'type' => 'User',
                'email' => 'lucho@panda-corp.com');
            $response = array('Result' => 'OK', "Record" => $record);
            echo json_encode($response);
        }
    }

    public function action_list() {
        if ($this->request->is_ajax()) {
            $this->auto_render = false;
            $sorting = $this->request->query('jtSorting');

            if ($sorting=='') {
                $user = array('id' => '1',
                    'first_name' => 'David',
                    'last_name' => 'Villacis',
                    'type' => 'Admin',
                    'email' => 'david@panda-corp.com');
                $user2 = array('id' => '2',
                    'first_name' => 'Patricio',
                    'last_name' => 'Moreano',
                    'type' => 'Admin',
                    'email' => 'patricio@panda-corp.com');
                $users = array($user, $user2);
                $response = array('Result' => 'OK', 'Records' => $users);
            } else {
                $response = array('Result' => 'ERROR', 'Message' => 'Intentando: '.$sorting);
            }

            echo json_encode($response);
        } else {
            die('WRONG REQUEST');
        }
    }

    public function action_delete() {
        if ($this->request->is_ajax()) {
            $this->auto_render = false;
            $id = $this->request->post('id');
            $response = array('Result' => 'OK');
            echo json_encode($response);
        }
    }

    public function action_update() {
        if ($this->request->is_ajax()) {
            $this->auto_render = false;
            $id = $this->request->post('id');
            $response = array('Result' => 'OK');
            echo json_encode($response);
        }
    }

}
