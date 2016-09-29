<?php

class Model_ClothColors extends ORM {

    protected $_table_name = 'clothing_colors';
    protected $_has_many = array('cloths' => array('model' => 'Cloths', 'foreign_key' => 'primary_color'));
    
}