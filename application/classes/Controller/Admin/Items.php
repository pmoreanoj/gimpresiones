<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Items extends Controller_Admin_Containers_Default {

    public function action_index() {

        $this->template->title = 'Lista de Items';
        $view = view::factory('controllers/admin/items/index');
        $item = ORM::factory('item');
        $items = $item->find_all();
        $view->items = $items;
        $this->view = $view;
    }

    public function action_create() {
        $this->template->title = 'Nuevo Item';
        $view = view::factory('controllers/admin/items/create');
        $cloth = ORM::factory('Cloths');
        $color = ORM::factory('ClothColors');
        $colors = $color->find_all();
        $view->colors = $colors;
        $this->view = $view;
    }

    public function action_edit() {
        $id = $this->request->query('item');
        if ($id) {
            $item = ORM::factory('item', $id);
            $this->template->title = 'Editar item ' . $item->name;
            $view = view::factory('controllers/admin/items/edit');
            $view->item = $item;
            $this->view = $view;
        } else {
            $this->redirect('admin/items');
        }
    }

    public function action_ajax_edit_item() {

        if ($this->request->is_ajax()) {
            $response = array();
            $this->auto_render = false;
            $id = strip_tags($this->request->post('id'));
            $name = strip_tags($this->request->post('name'));
            $clothing_id = strip_tags($this->request->post('clothing_id'));
            $photo = strip_tags($this->request->post('image'));
            $first_color = strip_tags($this->request->post('first_color'));
            $second_color = strip_tags($this->request->post('second_color'));
            $active = strip_tags($this->request->post('active'));
            $item = ORM::factory('Item', $id);

            if (!$name) {
                $response['success'] = 'BAD';
                $response['error'] = 'not found';
            } else if (!$photo) {
                $response['success'] = 'BAD';
                $response['error'] = 'image';
            } else if (!$first_color) {
                $response['success'] = 'BAD';
                $response['error'] = 'first color';
            } else if (isset($name)) {
                $response['success'] = 'OK';
                $item->name = $name;
                $item->photo = $photo;
                $item->clothing_id = $clothing_id;
                $item->first_color = $first_color;
                $item->second_color = $second_color;
                $item->active = $active;
                $item->save();
            }
            echo json_encode($response);
        }
    }

    public function action_ajax_edit_item_img() {
        //Pato
        if ($this->request->is_ajax()) {
            $response = array();
            $directory = "data/items/";
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

    public function action_ajax_item() {

        if ($this->request->is_ajax()) {
            $response = array();
            $this->auto_render = false;
            $name = strip_tags($this->request->post('name'));
            $clothing_id = strip_tags($this->request->post('clothing_id'));
            $photo = strip_tags($this->request->post('image'));
            $first_color = strip_tags($this->request->post('first_color'));
            $second_color = strip_tags($this->request->post('second_color'));
            $count = ORM::factory('Item')->where('name', '=', $name)->find_all();

            if (count($count) > 0) {
                $response['success'] = 'BAD';
                $response['error'] = 'name';
            } else if (!$photo) {
                $response['success'] = 'BAD';
                $response['error'] = 'image';
            } else if (!$first_color) {
                $response['success'] = 'BAD';
                $response['error'] = 'first color';
            } else if (isset($name) && isset($second_color)) {
                $response['success'] = 'OK';
                $new_item = ORM::factory('Item');
                $new_item->name = $name;
                $new_item->clothing_id = $clothing_id;
                $new_item->photo = $photo;
                $new_item->first_color = $first_color;
                $new_item->second_color = $second_color;
                $new_item->active='ENABLED';
                $new_item->save();
            }
            else if (isset($name) && (!$second_color)){
                $response['success'] = 'OK';
                $new_item = ORM::factory('Item');
                $new_item->name = $name;
                $new_item->clothing_id = $clothing_id;
                $new_item->photo = $photo;
                $new_item->first_color = $first_color;
                $new_item->active='ENABLED';
                //$new_item->second_color = $second_color;
                $new_item->save();
            }
            echo json_encode($response);
        }
    }

    public function action_ajax_item_img() {

        if ($this->request->is_ajax()) {
            $response = array();
            $directory = "data/items/";
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

    public function action_ajax_get_type() {

        if ($this->request->is_ajax()) {
            $response = array();
            $this->auto_render = false;
            $genre = $this->request->post('genre');
            $rows = ORM::factory('Cloths')->where('person_type', '=', $genre)->group_by('type_enum')->find_all();

            if (count($rows) > 0) {
                $html = '<select id="clothing_type">';
                $html .='<option>Escoja tipo de prenda</option>';
                foreach ($rows as $row) {
                    $html.='<option value=' . $row->type_enum . '>' . $row->type_enum . '</option>';
                }
                $html.='</select>';

                $response['html'] = $html;
            }
            else{
                 $response['html']='<p>Debe ingresar art&iacute;culos</p>';
            }
            echo json_encode($response);
        }
    }
    
    public function action_ajax_get_size() {

        if ($this->request->is_ajax()) {
            $response = array();
            $this->auto_render = false;
            $genre = $this->request->post('genre');
            $type = $this->request->post('type');
            $rows = ORM::factory('Cloths')->where('person_type', '=', $genre)->and_where('type_enum', '=', $type)->find_all();

            if (count($rows) > 0) {
                $html = '<select id="clothing_id">';
                $html .='<option>Escoja la talla</option>';
                foreach ($rows as $row) {
                    $html.='<option value=' . $row->id . '>' . $row->size . '</option>';
                }
                $html.='</select>';

                $response['html'] = $html;
            }
            else{
                 $response['html']='<p>Debe ingresar art&iacute;culos</p>';
            }
            echo json_encode($response);
        }
    }

}
