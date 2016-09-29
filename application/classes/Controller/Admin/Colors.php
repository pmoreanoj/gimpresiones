<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Colors extends Controller_Admin_Containers_Default {

    public function action_index() {

        $this->template->title = 'Lista de Colores';
        $view = view::factory('controllers/admin/colors/index');
        $color = ORM::factory('ClothColors');
        $colors = $color->find_all();
        $view->colors = $colors;
        //$total = $color->count_all();
        //$view->total = $total;
        $this->view = $view;
    }

    public function action_cloths_colors() {
        $this->template->title = 'Nuevo Color';
        $view = view::factory('controllers/admin/colors/cloths_colors');
        $this->view = $view;
    }

    public function action_cloths_edit_colors() {
        $id = $this->request->query('color');
        if ($id) {
            $color = ORM::factory('ClothColors', $id);
            $this->template->title = 'Editar color ' . $color->name;
            $view = view::factory('controllers/admin/colors/cloths_edit_colors');
            $view->color = $color;
            $this->view = $view;
        } else {
            //$this->redirect('admin/colors');
        }
    }

    public function action_ajax_edit_colors() {
        //David
        if ($this->request->is_ajax()) {
            $response = array();
            $this->auto_render = false;
            $id = strip_tags($this->request->post('id'));
            $name = strip_tags($this->request->post('name'));
            $description = strip_tags($this->request->post('description'));
            $image = strip_tags($this->request->post('image'));
            $color = ORM::factory('ClothColors',$id);
            if ($color->name) {
                $color->name = $name;
                $color->description = $description;
                $color->image = $image;
                $color->save();
                $response['success'] = 'OK'; 
            }
            else{
                $response['success'] = 'BAD'; 
                $response['error'] = 'Not ID found';
            }
            echo json_encode($response);
        }
    }

    public function action_ajax_edit_color_img() {
        //Pato
        if ($this->request->is_ajax()) {
            $response = array();
            $directory = "data/colors/";
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

    public function action_ajax_colors() {

        if ($this->request->is_ajax()) {
            $response = array();
            $this->auto_render = false;
            $name = strip_tags($this->request->post('name'));
            $description = strip_tags($this->request->post('description'));
            $image = strip_tags($this->request->post('image'));
            $count = ORM::factory('ClothColors')->where('name', '=', $name)->find_all();

            if (count($count) > 0) {
                $response['success'] = 'BAD';
                $response['error'] = 'name';
            } else if (!$image) {
                $response['success'] = 'BAD';
                $response['error'] = 'image';
            } else if (isset($name)) {
                $response['success'] = 'OK';
                $new_color = ORM::factory('ClothColors');
                $new_color->name = $name;
                $new_color->description = $description;
                $new_color->image = $image;
                $saved = $new_color->save();
            }
            echo json_encode($response);
        }
    }

    public function action_ajax_color_img() {

        if ($this->request->is_ajax()) {
            $response = array();
            $directory = "data/colors/";
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

}
