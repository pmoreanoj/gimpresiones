<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Products extends Controller_Web_Containers_Default {

    public function action_index() {
        //$this->template->title = 'Dise&ntildea tu producto';
        $option = strip_tags($this->request->query('op'));

        switch ($option) {
            case 'M':
                $this->template->title = 'Dise&ntildea tu producto de Hombre';
                $view = View::factory('controllers/web/products/index_men');
                break;
            case 'W':
                $this->template->title = 'Dise&ntildea tu producto de Mujer';
                $view = View::factory('controllers/web/products/index_women');
                break;
            case 'K':
                $this->template->title = 'Dise&ntildea tu producto de Ni&ntilde;os';
                $view = View::factory('controllers/web/products/index_kids');
                break;
            default:
                $view = View::factory('controllers/web/products/index_men');
                break;
        }


        $this->view = $view;
    }

    public function action_agetlogos() {
        if ($this->request->is_ajax()) {
            $response = array();
            $LIMIT = 7;
            $this->auto_render = false;
            $category = $this->request->post('category');
            $page = $this->request->post('page');

            if (($page == NULL) && ($category == NULL)) {
                $response['page'] = 1;
                $response['category'] = 'OTROS';
                $logos = ORM::factory('Logos')->order_by('id', 'DESC')->limit($LIMIT)->find_all();
                $response['render'] = "YES";
            } else {
                $response['category'] = $category;
                if ($page > 1) {
                    $logos = ORM::factory('Logos')->where('category', '=', $category)->limit($LIMIT * ($page - 1) . ',' . $LIMIT)->find_all();
                    if (count($logos) > 0) {
                        $response['page'] = $page;
                        $response['render'] = "YES";
                    } else {
                        $response['page'] = $page - 1;
                        $response['render'] = "NO";
                    }
                } else {
                    $logos = ORM::factory('Logos')->where('category', '=', $category)->limit($LIMIT)->find_all();
                    $response['render'] = "YES";
                    $response['page'] = $page;
                }
            }
            $view = View::factory('controllers/web/products/designer/logos_ajax');
            $view->logos = $logos;
            $logos_bar = "" . $view;

            $response['html'] = $logos_bar;
            echo json_encode($response);
        }
    }

    public function action_agetclothing() {
        if ($this->request->is_ajax()) {
            $this->auto_render = false;
            $genre_dic = array('M' => 'MEN', 'W' => 'WOMEN', 'K' => 'KIDS');
            $genre = $this->request->post('genre');
            $genre = $genre_dic[$genre];
            $size = $this->request->post('size');
            $color = $this->request->post('color');
            $option = $this->request->post('option');
            $clothing_bar = View::factory('controllers/web/products/designer/clothing_ajax');
            if($color){
                $rows = ORM::factory('Item')
                        ->join('clothing', 'LEFT')
                        ->on('item.clothing_id', '=', 'clothing.id')
                        ->where('person_type', '=', $genre)
                        ->and_where('type_enum', '=', $option)
                        ->and_where('first_color', '=', $color)
                        ->and_where('active', '=', 'ENABLED')
                        ->limit('5')
                        ->find_all();
            }
            else if ($size != '') {
                $rows = ORM::factory('Item')
                        ->join('clothing', 'LEFT')
                        ->on('item.clothing_id', '=', 'clothing.id')
                        ->where('person_type', '=', $genre)
                        ->and_where('type_enum', '=', $option)
                        ->and_where('size', '=', $size)
                        ->and_where('active', '=', 'ENABLED')
                        ->limit('5')
                        ->find_all();
            } else {
                $rows = ORM::factory('Item')
                        ->join('clothing', 'LEFT')
                        ->on('item.clothing_id', '=', 'clothing.id')
                        ->where('person_type', '=', $genre)
                        ->and_where('type_enum', '=', $option)
                        ->and_where('active', '=', 'ENABLED')
                        ->limit('5')
                        ->find_all();
            }
            $clothing_bar->clothing = $rows;
            echo $clothing_bar;
            return 'OK';
        }
    }

    public function action_agetsizes() {
        if ($this->request->is_ajax()) {
            $this->auto_render = false;
            $genre_dic = array('M' => 'MEN', 'W' => 'WOMEN', 'K' => 'KIDS');
            $genre = $this->request->post('genre');
            $genre = $genre_dic[$genre];

            $option = $this->request->post('option');

            $rows = ORM::factory('Item')
                    ->join('clothing', 'LEFT')
                    ->on('item.clothing_id', '=', 'clothing.id')
                    ->where('person_type', '=', $genre)
                    ->and_where('type_enum', '=', $option)
                    ->and_where('active', '=', 'ENABLED')
                    ->group_by('size')
                    ->find_all();

            /**
              $rows=ORM::factory('Cloths')
              ->where('person_type', '=', $genre)
              ->and_where('type_enum', '=', $option)
              ->group_by('size')
              ->find_all();
             * 
             */
            $sizes = View::factory('controllers/web/products/designer/size_ajax');
            $sizes->rows = $rows;
            echo $sizes;
            return 'OK';
        }
    }

    public function action_agetcolors() {
        if ($this->request->is_ajax()) {
            $this->auto_render = false;
            $genre_dic = array('M' => 'MEN', 'W' => 'WOMEN', 'K' => 'KIDS');
            $genre = $this->request->post('genre');
            $genre = $genre_dic[$genre];
            $size = $this->request->post('size');
            $option = $this->request->post('option');
            if ($size != '') {
                $colors_list = ORM::factory('Item')
                        ->join('clothing', 'LEFT')
                        ->on('item.clothing_id', '=', 'clothing.id')
                        ->where('person_type', '=', $genre)
                        ->and_where('type_enum', '=', $option)
                        ->and_where('size', '=', $size)
                        ->and_where('active', '=', 'ENABLED')
                        ->group_by('first_color')
                        ->find_all();
            } else {
                $colors_list = ORM::factory('Item')
                        ->join('clothing', 'LEFT')
                        ->on('item.clothing_id', '=', 'clothing.id')
                        ->where('person_type', '=', $genre)
                        ->and_where('type_enum', '=', $option)
                        ->and_where('active', '=', 'ENABLED')
                        ->group_by('first_color')
                        ->find_all();
            }
            $view = View::factory('controllers/web/products/designer/colors_ajax');
            $view->colors = $colors_list;
            echo $view;
        }
    }

    public function action_aget_image() {
        if ($this->request->is_ajax()) {
            $response = array();
            $directory = "data/users/logos/";
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
