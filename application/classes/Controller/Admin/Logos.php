<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Logos extends Controller_Admin_Containers_Default {

    public function action_index() {
        $this->template->title = 'Lista de Logos';
        $view = view::factory('controllers/admin/logos/index');
        $logo = ORM::factory('logos');
        $logos = $logo->find_all();
        $view->logos = $logos;
        $this->view = $view;
    }

    public function action_create() {
        $this->template->title = 'Subir Logo';
        $view = view::factory('controllers/admin/logos/create');
        $this->view = $view;
    }

    public function action_ajax_upload() {
        if ($this->request->is_ajax()) {
            $response = array();
            $directory = "data/logos/";
            try {
                $this->auto_render = false;


                foreach ($_FILES["images"]["error"] as $key => $error) {
                    if ($error == UPLOAD_ERR_OK) {
                        $name = $directory . $_FILES["images"]["name"][$key];
                        $name = filter_var($name, FILTER_SANITIZE_URL);
                        $name = strip_tags($name);
                        move_uploaded_file($_FILES["images"]["tmp_name"][$key], $name);
                    }
                }

                $response['success'] = 'OK';
                $response['image'] = $name;
                echo json_encode($response);
            } catch (Exception $exc) {
                //echo $exc->getTraceAsString();
                $response['success'] = 'BAD';
                //$response['Exception']=$exc->getTraceAsString();
                echo json_encode($response);
            }
        }
    }

    public function action_ajax_logos() {

        if ($this->request->is_ajax()) {
            $categories=array(
                '1'=>'TEXTO',
                '2'=>'BROMAS',
                '3'=>'FRASES',
                '4'=>'DIBUJOS',
                '5'=>'SIMPSONS',
                '6'=>'DRAGONBALL',
                '7'=>'SONIC',
                '8'=>'HEROES',
                '9'=>'PELICULAS',
                '10'=>'TRANSFORMERS',
                '11'=>'TWILLIGHT',
                '12'=>'PERSONAJES',
                '13'=>'DONRAMON',
                '14'=>'OTROS'
                );
            $response = array();
            $this->auto_render = false;
            $name = strip_tags($this->request->post('name'));
            $type = strip_tags($this->request->post('type'));
            $category = strip_tags($this->request->post('category'));
            $category=$categories[$category];
            $description = strip_tags($this->request->post('description'));
            $image = strip_tags($this->request->post('image'));
            $count = ORM::factory('logos')->where('name', '=', $name)->find_all();

            if (count($count) > 0) {
                $response['success'] = 'BAD';
                $response['error'] = 'name';
            } else if (!$image) {
                $response['success'] = 'BAD';
                $response['error'] = 'image';
            } //else if (!$first_color) {
                //$response['success'] = 'BAD';
                //$response['error'] = 'first color';
             else if (isset($name)) {
                $response['success'] = 'OK';
                $new_item = ORM::factory('Logos');
                $new_item->name = $name;
                $new_item->type = $type;
                $new_item->category = $category;
                $new_item->description = $description;
                $new_item->image = $image;
                $new_item->save();
            }
            echo json_encode($response);
        }
    }
    
    public function action_edit(){
        $id = $this->request->query('logo');
        if ($id) {
            $logo = ORM::factory('logos', $id);
            $this->template->title = 'Editar logo ' . $logo->name;
            $view = view::factory('controllers/admin/logos/edit');
            $view->logo = $logo;
            $this->view = $view;
        } else {
            //$this->redirect('admin/colors');
        }
    }
    public function action_ajax_edit_logo() {

        if ($this->request->is_ajax()) {
            $response = array();
            $this->auto_render = false;
            $id = strip_tags($this->request->post('id'));
            $name = strip_tags($this->request->post('name'));
            $type = strip_tags($this->request->post('type'));
            $category = strip_tags($this->request->post('category'));
            $description = strip_tags($this->request->post('description'));
            $image = strip_tags($this->request->post('image'));
            $logo = ORM::factory('logos',$id);
            if ($logo->name) {
                $logo->name = $name;
                $logo->type = $type;
                $logo->category = $category;
                $logo->description = $description;
                $logo->image = $image;
                $logo->save();
                $response['success'] = 'OK'; 
            }
            else{
                $response['success'] = 'BAD'; 
                $response['error'] = 'Not ID found';
            }
            echo json_encode($response);
        }
    }
    public function action_ajax_upload_edit(){
        if ($this->request->is_ajax()) {
            $response = array();
            $directory = "data/logos/";
            try{
               $this->auto_render = false;
               
               foreach ($_FILES["images"]["error"] as $key => $error) {
                    if ($error == UPLOAD_ERR_OK) {
                        $name = $directory . $_FILES["images"]["name"][$key];
                        $name = filter_var($name, FILTER_SANITIZE_URL);
                        $name = strip_tags($name);
                        move_uploaded_file($_FILES["images"]["tmp_name"][$key], $name);
                    }
                }
                $response['success'] = 'OK';
                $response['image'] = $name;
                echo json_encode($response);
            }
            catch (Exception $exc) {
                //echo $exc->getTraceAsString();
                $response['success'] = 'BAD';
                //$response['Exception']=$exc->getTraceAsString();
                echo json_encode($response);
            }
        }
    }
}
