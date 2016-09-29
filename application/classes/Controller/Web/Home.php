<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Home extends Controller_Web_Containers_Default {

    public function action_index() {
        $this->template->title = 'Inicio';
        $view = view::factory('controllers/web/home/index');
        $this->view = $view;
    }

    public function action_shoppingcart() {
        $this->template->title = 'Carrito de Compras';
        $view = view::factory('controllers/web/home/shoppingcart');
        $this->view = $view;
    }

    public function action_account() {
        $this->template->title = 'Mi Cuenta';
        $view = view::factory('controllers/web/home/account');
        $this->view = $view;
    }

    public function action_aboutus() {
        $this->template->title = 'Sobre Nosotros';
        $view = view::factory('controllers/web/home/aboutus');
        $this->view = $view;
    }

    public function action_contact() {
        $this->template->title = 'Contact&eacute;nos';
        $view = view::factory('controllers/web/home/contact');
        $this->view = $view;
    }

    public function action_acontact() {
        if ($this->request->is_ajax()) {
            $recipient = 'anamaarmo@gmail.com';
            $this->auto_render = false;
            $name = strip_tags($this->request->post('name'));
            $email = strip_tags($this->request->post('email'));
            $date = strip_tags($this->request->post('time'));
            $message = strip_tags($this->request->post('message'));

            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            $headers .= 'From: <gimpresiones@panda-corp.com>' . "\r\n";
            
            $subject=$name.' Te ha escrito en gimpresiones.com';
            
            $email_text='<html>'
                    . '<p>Hola</p>'
                    . '<p>Has recibido un mensaje en al seccion de contacto de Gimpresiones, los datos son los siguientes:</p></br>'
                    . '<p><b>Nombre:</b>'.$name.'</p>'
                    . '<p><b>Correo:</b>'.$email.'</p>'
                    . '<p><b>Fecha y Hora:</b>'.$date.'</p>'
                    . '<p><b>Mensaje:</b></p><p>'.$message.'</p>'
                    . '<br/><i>Atentanmente,</i><br/>'
                    . 'Panda Corp</html>';
            
           //echo $subject;
            mail($recipient, $subject, $email_text, $headers);
            return 'OK';
        }
    }

    public function action_product() {
        $this->template->title = 'Producto';
        $view = view::factory('controllers/web/home/product');
        $this->view = $view;
    }

    public function action_men_tshirt() {
        $this->template->title = 'Categoría Hombres - Camisetas cuello redondo';
        $view = view::factory('controllers/web/home/men_tshirt');
        $this->view = $view;
    }
    
    public function action_men_vshirt() {
        $this->template->title = 'Categoría Hombres - Camisetas cuello en V';
        $view = view::factory('controllers/web/home/men_vshirt');
        $this->view = $view;
    }
    
    public function action_men_bbd() {
        $this->template->title = 'Categoría Hombres - BBDs';
        $view = view::factory('controllers/web/home/men_bbd');
        $this->view = $view;
    }
    
    public function action_men_hoodie() {
        $this->template->title = 'Categoría Hombres - Busos manga larga';
        $view = view::factory('controllers/web/home/men_hoodie');
        $this->view = $view;
    }
    
    public function action_men_hoodie2() {
        $this->template->title = 'Categoría Hombres - Busos con capucha';
        $view = view::factory('controllers/web/home/men_hoodie2');
        $this->view = $view;
    }

    public function action_women_tshirt() {
        $this->template->title = 'Categoría Mujeres - Camisetas cuello redondo';
        $view = view::factory('controllers/web/home/women_tshirt');
        $this->view = $view;
    }
    
    public function action_women_bbd() {
        $this->template->title = 'Categoría Mujeres - BBDs';
        $view = view::factory('controllers/web/home/women_bbd');
        $this->view = $view;
    }
    
    public function action_women_hoodie() {
        $this->template->title = 'Categoría Mujeres - Busos manga larga';
        $view = view::factory('controllers/web/home/women_hoodie');
        $this->view = $view;
    }
    
    public function action_women_hoodie2() {
        $this->template->title = 'Categoría Mujeres - Busos con capucha';
        $view = view::factory('controllers/web/home/women_hoodie2');
        $this->view = $view;
    }
    
    public function action_women_vshirt() {
        $this->template->title = 'Categoría Mujeres - Camisetas en V';
        $view = view::factory('controllers/web/home/women_vshirt');
        $this->view = $view;
    }

    public function action_kidlist() {
        $this->template->title = 'Niños y Niñas';
        $view = view::factory('controllers/web/home/kidlist');
        $this->view = $view;
    }

    public function action_landing() {
        $this->template->title = 'Bienvenidos';
        $view = view::factory('controllers/web/home/landing');
        $this->view = $view;
    }

    public function action_filmstamp() {
        $this->template->title = 'Película térmica';
        $view = view::factory('controllers/web/home/filmstamp');
        $this->view = $view;
    }

    public function action_paperstamp() {
        $this->template->title = 'Papel transfer';
        $view = view::factory('controllers/web/home/paperstamp');
        $this->view = $view;
    }

    public function action_termsconditions() {
        $this->template->title = 'Términos y Condiciones';
        $view = view::factory('controllers/web/home/termsconditions');
        $this->view = $view;
    }

}
