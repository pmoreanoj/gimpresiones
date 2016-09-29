<?php

class Model_Item extends ORM {

    protected $_table_name = 'item';
    protected $_belongs_to = array(
        'first' => array(
            'model' => 'ClothColors',
            'foreign_key' => 'first_color'
        ),
        'second' => array(
            'model' => 'ClothColors',
            'foreign_key' => 'second_color'
        ),
        'clothing' => array(
            'model' => 'Cloths',
            'foreign_key' => 'clothing_id'
        )
    );

}
