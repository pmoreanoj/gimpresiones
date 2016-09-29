<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Cloths extends Controller_Admin_Containers_Default {

    public function action_index() {
        $this->template->title = 'Lista de Ropa';
        $view = view::factory('controllers/admin/cloths/index');
        $cloth = ORM::factory('Cloths');
        $clothes = $cloth->find_all();
        $view->clothes = $clothes;
        $this->view = $view; //already set up to show list of clothes
    }

    public function action_create() {
        $this->template->title = 'Agregar Ropa';
        $view = view::factory('controllers/admin/cloths/create');
        $this->view = $view;
    }

    public function action_ajax_create() {
        if ($this->request->is_ajax()) {
            $type_dic = array("1" => "T-SHIRT", "2" => "V-SHIRT", "3" => "BBDS_A", "4" => "BBDS_B", "5" => "BUSO_A", "6" => "BUSO_B");
            $this->auto_render = false;
            $person = $this->request->post('person');
            $type = $this->request->post('type');
            $price = $this->request->post('price');
            $size = $this->request->post('size');
            $paper_termic = $this->request->post('termic');
            $paper_transfer = $this->request->post('transfer');
            $custom_logo = $this->request->post('custom');
            try {
 //$count = ORM::factory('Cloths')->where('type', '=', 'type')->find_all
                if (isset($person) && isset($type) && isset($price) && isset($size) && isset($paper_termic) && isset($paper_transfer) && isset($custom_logo)) {
                    $response['success'] = 'OK';
                    $new_cloth = ORM::factory('Cloths');
                    $new_cloth->person_type =$person;
                    $new_cloth->type_enum = $type_dic[$type];
                    $new_cloth->price = $price;
                    $new_cloth->size = $size;
                    $new_cloth->paper_termic = $paper_termic;
                    $new_cloth->paper_transfer = $paper_transfer;
                    $new_cloth->custom_logo = $custom_logo;
                    $new_cloth->save();
                } else {
                    $response['success'] = 'BAD';
                    $response['error'] = 'Something';
                }
                
            } catch (Exception $exc) {
                $response['success'] = 'BAD';
                //echo $exc->getTraceAsString();
                $response['error'] = $exc->getTraceAsString();
            }
            echo json_encode($response);
            //$this->redirect('admin/cloths');
        }
    }

    public function action_edit() {
        $id = $this->request->query('cloth');
        if ($id) {
            $cloth = ORM::factory('Cloths', $id);
            $this->template->title = 'Editar Ropa ' . $cloth->person_type . ' '. $cloth->type_enum;
            $view = view::factory('controllers/admin/cloths/edit');
            $view->cloth = $cloth;
            $this->view = $view;
        } else {
            $this->redirect('admin/cloths');
        }
    }
    
    public function action_ajax_edit(){
        
        if ($this->request->is_ajax()) {
            $type_dic = array("1" => "T-SHIRT", "2" => "V-SHIRT", "3" => "BBDS_A", "4" => "BBDS_B", "5" => "BUSO_A", "6" => "BUSO_B");
            $this->auto_render = false;
            $id = strip_tags($this->request->post('id'));
            $person = $this->request->post('person');
            $type = $this->request->post('type');
            $price = $this->request->post('price');
            $size = $this->request->post('size');
            $paper_termic = $this->request->post('termic');
            $paper_transfer = $this->request->post('transfer');
            $custom_logo = $this->request->post('custom');
            $cloth = ORM::factory('Cloths', $id);
            try {
 //$count = ORM::factory('Cloths')->where('type', '=', 'type')->find_all
                if (isset($id) && isset($person) && isset($type) && isset($price) && isset($size) && isset($paper_termic) && isset($paper_transfer) && isset($custom_logo)) {
                    $response['success'] = 'OK';
                    $cloth->person_type =$person;
                    $cloth->type_enum = $type_dic[$type];
                    $cloth->price = $price;
                    $cloth->size = $size;
                    $cloth->paper_termic = $paper_termic;
                    $cloth->paper_transfer = $paper_transfer;
                    $cloth->custom_logo = $custom_logo;
                    $cloth->save();
                } else {
                    $response['success'] = 'BAD';
                    $response['error'] = 'Something';
                }
                
            } catch (Exception $exc) {
                $response['success'] = 'BAD';
                //echo $exc->getTraceAsString();
                $response['error'] = $exc->getTraceAsString();
            }
            echo json_encode($response);
        }
    }

    public function action_delete() {
        
    }

}
