<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Users extends Controller_Web_Containers_Default {
/**
 * Strip TAGS
 */
    public function action_login() {
        //Login process
        //Strip tags
        if ($_POST != NULL) {
           
            $username = strip_tags($this->request->post('username'));
            $password = strip_tags($this->request->post('password')); //encription required
            strip_tags($this->redirect('admin')); //prueba para redireccionar sin validación al panel admin
        }
    }

    public function action_register(){
         if ($_POST != NULL) {
             $username = strip_tags($this->request->post('username'));
             $password = strip_tags($this->request->post('password'));
             $first_name = strip_tags($this->request->post('first_name'));
             $last_name = strip_tags($this->request->post('last_name'));
             $type = strip_tags($this->request->post('type'));
             $email = strip_tags($this->request->post('email'));
             $hash= sha1($email);
         }
    }
    
    public function action_activation(){
        $email=strip_tags($this->request->query('email'));
        $hash=strip_tags($this->request->query('code'));
        
    }
    
   
    
    
}